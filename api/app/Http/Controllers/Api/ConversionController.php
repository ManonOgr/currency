<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Conversion;
use App\Models\Currency;
use App\Models\Pairs;
use App\Http\Resources\PairsResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response as FacadesResponse;
use Illuminate\Support\Facades\Validator;

class ConversionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function convert(Request $request){
        $validate = Validator::make($request->all(), [
            'from' => 'required|alpha',
            'to' => 'required|alpha',
            'amount' => 'required|min:0',
            'reverse'=>'required|boolean'
        ]);
        // Si les paramètres ne conviennent un message d'erreur est renvoyé
        if($validate->fails()){
            return response()->json(['message' => 'Validation failed', 'errors' => $validate->errors()], 422);
        }
        $from=$request->query('from');
        $to=$request->query('to');

        //Récupérer les devises par leur nom
        $currencyFrom = Currency::getByName($from)->first();
        $currencyTo = Currency::getByName($to)->first();
        $amount = $request->query('amount') ?? 1;
        $reverse=$request->query('reverse');

        //Si les devises n'existent pas, renvoyer un message d'erreur
        if (!$currencyFrom || !$currencyTo) return response()->json(['error' => '`from` or `to` parameters must be existing currency'], 404);
        //Si les devises sont identiques, renvoyer un message d'erreur
        if ($from == $to) return response()->json(['error' => '`from` and `to` cannot be the same'], 400);

        //Récupérer la paire en fonction des devises données
        $pairs = Pairs::getPairsByCurrencies($currencyFrom, $currencyTo);
        //Vérifier si la paire existe, sinon un message d'erreur sera renvoyé
        if ($pairs == null) return response()->json(['error' => 'Pairs not found'], 404);

        //Si la paire existe
        //Vérifier s'il faut faire le reverse
        if($reverse == true) {
            $converted = $amount * 1/$pairs->rate;
            $data = [
                'amount' => $amount,
                'currencyFrom' => $request->query('to'),
                'currencyTo' => $request->query('from'),
                'amountConverted' => $converted,

            ];
        }else {
            $converted = $amount * $pairs->rate;

            $data = [
                'amount' => $amount,
                'currencyFrom' => $request->query('from'),
                'currencyTo' => $request->query('to'),
                'amountConverted' => $converted,

            ];
        }

        //Renvoyer la donnée après la conversion
        return response()->json(['message' => 'Convert success', $data],200);

    }

    //conversions dans l'url
    public function conversions(Request $request, $rate, $currency_from_id, $currency_to_id)
    {
        $currencyFrom = Currency::where([["currencies_code", $currency_from_id]])->first("id");
        $currencyTo = Currency::where([["currencies_code", $currency_to_id]])->first("id");

        if ($currencyFrom == null || $currencyTo == null) {
            return Response::json(["message" => "Paire de conversion non existante.", "status" => \Illuminate\Http\Response::HTTP_NOT_FOUND]);
        }

        $pairs = Pairs::where([["currency_from_id", $currencyFrom->id],["currency_to_id", $currencyTo->id ]])->first();
        if ($pairs == null) {
            return FacadesResponse::json(["message" => "Paire de conversion non existante.", "status" => \Illuminate\Http\Response::HTTP_NOT_FOUND]);
        }
        return $pairs->rate * $rate;

    }

    //liste des pairs disponibles
    public function pairs()
    {
        $result  =  DB::table('pairs')
                ->join('currencies as c1', 'c1.id', '=', 'pairs.currency_from_id')
                ->join('currencies as c2', 'c2.id', '=', 'pairs.currency_to_id')
                ->select('c1.currencies_code as from_id', 'c2.currencies_code as to_id')
                ->get();
        return response()->json($result);
    }

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conversion  $conversion
     * @return \Illuminate\Http\Response
     */
    public function show(Conversion $conversion)
    {
        //
        return FacadesResponse::json(Conversion::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conversion  $conversion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conversion $conversion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conversion  $conversion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conversion $conversion)
    {
        //
    }
}
