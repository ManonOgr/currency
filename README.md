#frontend

Project setup
npm install -g @vue/cli
# OR
yarn global add @vue/cli
npm install
Compiles and hot-reloads for development
npm run serve
Compiles and minifies for production if needed
npm run build
Lints and fixes files
npm run lint
Admin Logs
Email: admin@admin.fr
Password: Admin

# backend

Make a clone of the repository on the local machine: git clone https://github.com/LowReward/MoneyValue.git
Make a copy of .example.env and rename the file to .env.
Create a new database with the name moneyvalue and add the information in the .env file
Type : composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
Launch with php artisan serve to then consult the project at the address indicated
