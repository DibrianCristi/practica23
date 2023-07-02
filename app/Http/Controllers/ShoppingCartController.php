<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCartItem;
use Illuminate\Http\Request;
use App\Models\electrica;
use App\Models\instrumente;
use App\Models\Order;
use App\Models\suruburi;
use App\Models\santehnica;
use App\Models\uzcasnic;


class ShoppingCartController extends Controller
{
    public function addToCartElectrica(Request $request)
    {

        $userid = auth()->id();
        $productid = $request->input('product_id');
        $can = $request->input('cart-cantitate');
        ShoppingCartItem::create([
            'user_id' => $userid,
            'product_type' => 'electrica',
            'product_id' => $productid,
            'cantitate' => $can,
        ]);
        return redirect('/electrica');
    }

    public function addToCartInstrumente(Request $request)
    {

        $userid = auth()->id();
        $productid = $request->input('product_id');
        $can = $request->input('cart-cantitate');
        ShoppingCartItem::create([
            'user_id' => $userid,
            'product_type' => 'instrumente',
            'product_id' => $productid,
            'cantitate' => $can,
        ]);
        return redirect('/instrumente');
    }

    public function addToCartSuruburi(Request $request)
    {

        $userid = auth()->id();
        $productid = $request->input('product_id');
        $can = $request->input('cart-cantitate');
        ShoppingCartItem::create([
            'user_id' => $userid,
            'product_type' => 'suruburi',
            'product_id' => $productid,
            'cantitate' => $can,
        ]);
        return redirect('/suruburi');
    }

    public function addToCartSantehnica(Request $request)
    {

        $userid = auth()->id();
        $productid = $request->input('product_id');
        $can = $request->input('cart-cantitate');
        ShoppingCartItem::create([
            'user_id' => $userid,
            'product_type' => 'santehnica',
            'product_id' => $productid,
            'cantitate' => $can,
        ]);
        return redirect('/santehnica');
    }

    public function addToCartUzcasnic(Request $request)
    {

        $userid = auth()->id();
        $productid = $request->input('product_id');
        $can = $request->input('cart-cantitate');
        ShoppingCartItem::create([
            'user_id' => $userid,
            'product_type' => 'uzcasnic',
            'product_id' => $productid,
            'cantitate' => $can,
        ]);
        return redirect('/uzcasnic');
    }


    public function showCart()
    {
        $userid = auth()->id();

        $electricaItems = ShoppingCartItem::where('user_id', $userid)
            ->where('product_type', 'electrica')
            ->with('electrica')
            ->get();

        $instrumenteItems = ShoppingCartItem::where('user_id', $userid)
            ->where('product_type', 'instrumente')
            ->with('instrumente')
            ->get();

        $suruburiItems = ShoppingCartItem::where('user_id', $userid)
            ->where('product_type', 'suruburi')
            ->with('suruburi')
            ->get();

        $santehnicaItems = ShoppingCartItem::where('user_id', $userid)
            ->where('product_type', 'santehnica')
            ->with('santehnica')
            ->get();

        $uzcasnicItems = ShoppingCartItem::where('user_id', $userid)
            ->where('product_type', 'uzcasnic')
            ->with('uzcasnic')
            ->get();

        return view('shopping-cart', [
            'electricaItems' => $electricaItems,
            'instrumenteItems' => $instrumenteItems,
            'suruburiItems' => $suruburiItems,
            'santehnicaItems' => $santehnicaItems,
            'uzcasnicItems' => $uzcasnicItems,
        ]);
    }

    public function removeItem(ShoppingCartItem $item)
    {
        $item->delete();
        return redirect('/shopping-cart');
    }

    public function submitCart()
    {
        $user = auth()->user();
        $cartitems = ShoppingCartItem::where('user_id', $user->id)->get();

        foreach ($cartitems as $cartitem) {
            Order::create([
                'user_id' => $cartitem->user_id,
                'product_type' => $cartitem->product_type,
                'product_id' => $cartitem->product_id,
                'cantitate' => $cartitem->cantitate,
            ]);
        }

        $cartitems->each->delete();

        return redirect('/shopping-cart');
    }
}
