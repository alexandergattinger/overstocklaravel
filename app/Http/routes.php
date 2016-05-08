<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Task;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('tasks');
});


Route::get('customer/{id}', function($id){
  $customer = App\Customer::find($id);
  echo "hello my name is ".$customer->name;
});

Route::get('orders', function(){
  $orders = App\Order::all();
  foreach ($orders as $order) {
    echo $order->name."<br/>";
    echo $order->id."<br/>";
  }
});
