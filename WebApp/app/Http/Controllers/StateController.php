<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function store(Request $request)
    {
        return State::create($request->all());
    }

    public function show($id)
    {
        return State::find($id);
    }
}
