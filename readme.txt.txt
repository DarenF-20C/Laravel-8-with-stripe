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


SAME WEEK

create a controller --> php artisan make:controller XXXX(name:CategoryController)
add API into controller --> use DB;//database
import model to use --> use app\Models\XXXX;
put function/method operation into the controller.php --> public function add(){}
go blade.php set action & @CSRF--><form action="{{route('addCategory')}}" method="POST">
@CSRF -> to prevent double input data & ensure data come only from this folder, no outsider

add route in web.php with post method -->Route::post('/addCategory/store',[App\Http\Controller\CategoryController::class,'add'])->name('addCategory');


22/11/2021

insert product with image, and create view page for category & product
create productController --> php artisan make:controller productController
edit productController
set the form action,method & enctype
set the routes same like CategoryController


View
-interface, routes, controller

SAME WEEK (26/11/21)
(Session) not like pop-up message
Cookies - record user behaviour, action

Import session --> use Session;
Declare in function before return--> Session::flash('sessionName',"sessionMessage");
define session in layout.blade in <body>-->
    @if(Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success')  }}
      </div>
    @endif


DELETE 
href for delete --> href="{{ route('deleteProduct',['id'=>$product->id]) }}"
onclick confirmation to user --> return confirm('message')
route (get)--> Route::get('/deleteProduct/{id}',[App\Http\Controllers\ProductController::class,'delete'])->
name('deleteProduct');


29/11/21
Product EDIT

create interface blade.php --> add hidden input and add default value for each field
create route similar to deleteProduct --> function 'edit'
create 'edit' function on controller --> get info based on id to display edit form

update after confirm edit 
route

SAME WEEK 3/12/2021

DisplayProductDetail for user
create a blade.php first
set route (similar to delete product, get ID)
create function inside controller 
set foreach ($products as $product) and set ALL related detail {{$product->}}


10/12/2021
MAKE myCart & add to cart 

make:model for myCart with -m
edit migration file and migrate
edit protected fillable in model file & relationship between mycart and product+user

edit productDetail.blade --> add form action for passing detail to myCart
edit CartController --> userID use Auth::id() require login first
add a __construct function --> redirect to login page before add to myCart


13/12/2021 (new week)
add image , subtotal, action column for my Cart

Calculate subtotal of myCart
-->prepare last row for subtotal calculation
--> apply Checkbox, input with Javascript calling
--> define ajax script <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
--> write javascript on top of page

Backend-->test js
rightClick -> Inspect -> console


17/12/2021 
------------------------------------------------------------------------------------------------------
-------------------------------------------STRIPE - SET UP -------------------------------------------
------------------------------------------------------------------------------------------------------

1) composer require stripe/stripe-php (install stripe through composer) 
2) edit env. --> add public key&secret key (find on Stripe dashboard)
STRIPE_KEY=
STRIPE_SECRET=

3) set config (connection) at bottom
'stripe' => [
     		'secret' => env('STRIPE_SECRET'),
	],

4) set route
Route::post('\checkout', [App\Http\Controllers\PaymentController::class, 'paymentPost'])->name('payment.post');

5) find vendor/stripe folder

6) add PaymentController
-> php artisan make:controller PaymentController

7) add use Stripe; (use stripe library) & add paymentPost function

8) prepare UI (.blade.php)