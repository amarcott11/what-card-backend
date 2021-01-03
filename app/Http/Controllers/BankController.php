<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function all(Request $request)
    {
        $bank = Bank::all();

        return response($bank, 200);
    }

    public function cards(Request $request)
    {
        $cards = Bank::all();

        return response($cards, 200);
    }
}
