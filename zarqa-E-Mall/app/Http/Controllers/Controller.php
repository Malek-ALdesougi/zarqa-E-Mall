<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function main(Request $request)
    {
        $currentUser = User::find(auth()->user());
        // dd($currentUser);
        // we must get the ordersDetails using order where user_id == auth()->user()->id
        // 1- get all orders for the current user
        // 2- get all orderDetail depend on the order id 

        // dd($currentUser[0]->orders);
        // $userOrders = Order::where('user_id', auth()->user()->id)->get();
        $userOrders = $currentUser[0]->orders;
        $Orders = [];
        // dd($userOrders[4]->id);
        foreach ($userOrders as $userOrder) {
            // array_push($Orders, );
        }
        // dd($Orders);
        // $test = OrderDetail::all()->where('order_id', $userOrders[1]->id);
        // dd($test);
        // dd($userOrders);
        // dd();
        // dd(OrderDetail::where('user_id', $currentUser[0]->id)->get());

        return view('profile', ['currentUser' => $currentUser, 'orders' => OrderDetail::where('user_id', $currentUser[0]->id)->get()]);
    }

    public function deleteOrder($id)
    {
        $deletedOrder = Order::where('id', $id);
        $deletedOrder->delete();

        return back();
    }
}
