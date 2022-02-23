<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Mobile;

class CustomerController extends Controller
{
   public function create()
   {
        $mobile = new Mobile();
        $mobile->model = "iphone11";

        $customer = new Customer();
        $customer->first_name = "Muhammad Raza";
        $customer->last_name = "Bangi";
        $customer->email = "muhammadrazabangi9@gmail.com";
        $customer->save();

        $customer->mobile()->Save($mobile);
   }

   public function show($id)
   {
       return Customer::find($id)->mobile;
        // $customer = Customer::find($id);
        // dd($customer->mobile);
   }
}
