Viewable php file --> resources->view->XXX.blade.php

Controller--> app->Http

Database--> database->Migration

Model--> app->models

Web.php(route file)-->routes

.env --> set up database name, pw ( line 14)

photo,video,audio -->place in public, only file in public can be viewed by users

php artisan migrate --> copy the table in migration into db

composer require laravel/ui --> install UI package

php artisan ui vue --auth --> add Auth UI into controller

npm install --> if not no ui display for laravel package
npm i vue-loader --> add a loader to run 
npm run dev --> to run npm (then test with php artisan serv)

{{ asset('folder/file.xxx')}} --> to access the file wanted(.jpg .png .css)

<a class="nav-link" href="{{ url('/+name')}}"> --> Hyperlink format (name found in routes file)


15/11/21

make a model --> php artisan make:model NAME -m (-m migraiton automatically)
fill in Migration file with fillable vairable --> $table->string('name');
push to databse? --> php artisan migrate

go model file to set fillable & relationship between table --> hasMany / belongsTo

add "addCategory" page(.blade.php) --> write with extends template
add "addCategory" into Routes file (so the blade.php can run) --> Route::get...