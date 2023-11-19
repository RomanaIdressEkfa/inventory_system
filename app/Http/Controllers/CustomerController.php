<?php

namespace App\Http\Controllers;
use App\Helpers\Upload;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Exception;
use File;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(8);
        return view('backend.layouts.Customers.index', compact('customers'));
    }


    public function create()
    {
        return view('backend.layouts.Customers.create');
    }


    public function view($id)
    {
        $customer = Customer::find($id);
        return view('backend.layouts.Customers.view', compact('customer'));
    }


    public function store(StoreCustomerRequest $request)
    {

        try {
            $imageName = '';
            // upload image
            $imageName = Upload::uploadImage($request->image, 'images/customers');

            Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'loyalty_points' => $request->loyalty_points,
                'membership_status' => $request->membership_status,

            ]);
            toastr()->success('Customer has been created successfully!', 'Congrats');
            return redirect()->route('customer_details_index');
        } catch (Exception $e) {
            toastr()->error('Something went wrong!', 'Alert');
        }
    }


    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('backend.layouts.Customers.edit', compact('customer'));
    }


    public function update(UpdateCustomerRequest $request, $id)
    {
        try {
            $customer = Customer::findOrFail($id);
            $imageName = '';
            $deleteOldImage = 'images/customers/' . $customer->image;

            if ($image = $request->file('image')) {
                if (file_exists($deleteOldImage)) {
                    File::delete($deleteOldImage);
                } else {
                    $imageName = $customer->image;
                }
                //update image
                $imageName = Upload::uploadImage($request->image, 'images/customers');
            }

            $customer->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'loyalty_points' => $request->loyalty_points,
                'membership_status' => $request->membership_status,

            ]);
            toastr()->success('Customer has been updated successfully!', 'Congrats');
            return redirect()->route('customer_details_index');
        } catch (Exception $e) {
            toastr()->error('Something went wrong!', 'Alert');
        }
    }


    public function delete($id)
    {
        $customer = Customer::find($id);
        $deleteOldImage = 'images/customers/' . $customer->image;
        File::delete($deleteOldImage);
        $customer->delete();
        return redirect()->back();
    }
}