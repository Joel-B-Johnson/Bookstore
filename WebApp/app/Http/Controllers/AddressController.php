<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller {

    public function getaddress($id) {

        return Address::find($id);
    
    }

    public function storeaddress(Request $request)
    {
        return Address::create($request -> all());
    }

    public function getalladdressesrelated($userquery)
    {
        return Address::where('user_email', 'like', '%'.$userquery.'%')->get();
    }
}

