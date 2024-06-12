<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class ProductsControllerApi extends Controller
{
    public function index()
    {
        $productList = Product::all();
        return response()->json([
            "success" => true,
            "message" => "Lista de produtos",
            "data" => $productList
        ]);
    }

    public function loginapi(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check(
            $request->password,
            $user->password
        )) {
            throw ValidationValidationException::withMessages([
                'email' => ['The provided credentials are
incorrect.'],
            ]);
        }
        return $user->createToken('token')->plainTextToken;
    }
}
