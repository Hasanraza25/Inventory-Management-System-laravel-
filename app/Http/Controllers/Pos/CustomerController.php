<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CustomerController extends Controller
{
    public function CustomerAll() {
        $customers = Customer::latest()->get();
        return view('backend.customers.customer_all', compact('customers'));
    }

    public function CustomerAdd() {
        return view('backend.customers.customer_add');
    }

    public function CustomerStore(Request $request) {

        $image = $request->file('customer_image');

        $name_gen = hexdec(uniqid()). '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(200,200)->save('/upload/customer/'. $name_gen);
        
        $save_url = '/upload/customer/'. $name_gen;

        Customer::insert([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'customer_image' => $save_url,
            'address' => $request->address,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Customer Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('customer.all')->with($notification);
    }
}
