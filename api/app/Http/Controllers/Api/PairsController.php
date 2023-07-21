<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pairs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class PairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pairs = Pairs::with('currencyFrom', 'currencyTo')->get();
        if(!$pairs) return response()->json(['error' => 'No pairs data found'], 404);
        return response()->json($pairs, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'currency_from_id' => 'required|integer',
            'currency_to_id' => 'required|integer',
            'rate' => 'required|min:0',
        ]);
        if($validate->fails()){
            return response()->json(['message' => 'Validation failed', 'errors' => $validate->errors()], 422);
        }
        $pairs = Pairs::create($request->all());
        return response()->json($pairs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pairs  $pairs
     * @return \Illuminate\Http\Response
     */
    public function show(Pairs $pairs)
    {
        //
        return Response::json(Pairs::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pairs  $pairs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formData = $request->getContent();
        var_dump($formData);
        // $pairs = Pairs::find($id);
        // $pairs->update($formData->rate);
        // return response()->json($pairs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pairs  $pairs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pairs = Pairs::find($id);
        // On supprime l'utilisateur
        $pairs->delete();

        // On retourne la réponse JSON
        return response()->json(['message'=>'Delete success']);
    }

    public function status()
    {
        // Renvoie une réponse JSON avec le statut "ok"
        return response()->json(['status' => 'ok']);
    }

}
