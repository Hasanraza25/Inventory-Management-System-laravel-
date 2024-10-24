<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    public function SupplierAll(){
        $suppliers = Supplier::latest()->get();
        return view('backend.suppliers.supplier_all', compact('suppliers'));
    }

    public function SupplierAdd(){
        return view('backend.suppliers.supplier_add');
    }

    public function SupplierStore(Request $request){

        $this->validate(request(), [
            'name' => 'required',
            'mobile_no' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        Supplier::insert([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'address' => $request->address,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Supplier Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('supplier.all')->with($notification);
    }

    public function SupplierEdit($id) {
        $supplier = Supplier::findOrFail($id);
        return view('backend.suppliers.supplier_edit', compact('supplier'));
    }

    public function SupplierUpdate( $id, Request $request){

        
        $this->validate(request(), [
            'name' => 'required',
            'mobile_no' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
        ]);
        
        $supplier = Supplier::findOrFail($request->id);

        $supplier->update([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        $notification = array(
            'message' => 'Supplier Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('supplier.all')->with($notification);
    }

    public function SupplierDestroy($id) {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        $notification = array(
            'message' => 'Supplier Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    
}
