<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add()
    {
        return response()->json(
            [
                "data" => $wishlist->cards
            ]
        );
    
    }
    public function remove($id)
    {
        
    }

}
