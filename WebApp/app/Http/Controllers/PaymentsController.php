<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function store(Request $request)
    {
        return Payment::create($request -> all());
    }
}
