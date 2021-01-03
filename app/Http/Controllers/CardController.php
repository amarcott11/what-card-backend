<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Resources\CardResource;

class CardController extends Controller
{
    public function index()
    {
      return CardResource::collection(Card::all());
    }

    public function show(Card $card)
    {
        return new CardResource($card);
    }
}
