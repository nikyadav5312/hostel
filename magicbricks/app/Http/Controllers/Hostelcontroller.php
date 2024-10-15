<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\model\User;
use App\model\Hostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Whoops\Run;

class Hostelcontroller extends Controller
{
    public function adhostel(Request $request)
    {


        $request->validate([
            'type' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'furnished' => 'required',
            'listed_by' => 'required',
            'builtup_area' => 'required|min:3',
            'carpet_area' => 'required|min:3',
            'bachelors' => 'required',
            'floors' => 'required',
            'floor_no' => 'required',
            'carparking' => 'required',
            'phone' => 'required|min:10',
            'address' => 'required',
            'price' => 'required',
            'project_name' => 'required',
           


        ]);
        // dd($request);
        $hostel = new Hostel;


        $hostel->type = $request->input('type');
        $hostel->bedrooms = $request->input('bedrooms');
        $hostel->bathrooms = $request->input('bathrooms');
        $hostel->furnished = $request->input('furnished');
        $hostel->listed_by = $request->input('listed_by');
        $hostel->builtup_area = $request->input('builtup_area');
        $hostel->carpet_area = $request->input('carpet_area');
        $hostel->bachelors = $request->input('bachelors');
        $hostel->floors = $request->input('floors');
        $hostel->floor_no = $request->input('floor_no');
        $hostel->carparking = $request->input('carparking');
        $hostel->phone = $request->input('phone');
        $hostel->address = $request->input('address');
        $hostel->price = $request->input('price');
        $hostel->project_name = $request->input('project_name');
         
        $hostel->save();

        $request->session()->flash('status', 'Hostel Added successful!');
        return redirect('/');

        // return view('hostel');
    }

    public function showHostel()
    {
        $data = Hostel::all();

        return view('index', compact('data'));
    }

    public function userHostels($userId)
{
    $user = User::with('Hostel')->find($userId);

    if (!$user) {
        return response()->json(['message' => 'User not found.'], 404);
    }

    return response()->json($user->hostels);
}

}
