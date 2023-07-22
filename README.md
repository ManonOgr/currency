# **Welcome to MoneyValue API**

<p align="center"><a href="#" target="_blank"><img src="https://cdn4.iconfinder.com/data/icons/world-currency-2/512/USD-512.png" width="400" alt="logo"></a></p>

# **Admin**

## Project setup
```
 cd admin 
```
```
npm install -g @vue/cli 
```
**OR**
```
yarn global add @vue/cli 
```
```
npm install 
```
## Compiles and hot-reloads for development
```
 npm run serve 
```
## Compiles and minifies for production if needed
```
 npm run build 
```
## Lints and fixes files

 ```
 npm run lint 
 ```

## Admin Logs
```
Email:  [admin@admin.fr](mailto:admin@admin.fr)  
Password: Admin
```

# **API**

Create a new database with the name moneyvalue and add the information in the .env file 
 Type : 
  ```
 cd api
 ```
 ```
 composer install
 ```
 Launch the migrations and the seeders
  ```
  php artisan migrate:fresh -seed
 ```
Launch with 
   ```
   php artisan serve
  ```
php artisan serve to then consult the project at the address indicated
