<?php

namespace App\Http\Controllers;

// use PDO;
use Illuminate\Support\Facades\DB;
use App\Models\OrderModel;

class OrderController extends Controller
{
    public function index()
    {
        
        $orderModel = new OrderModel();
        
        $orders = $orderModel->getAll();
        
        return view('home', [
            'orders' => $orders
        ]);
    }
    
    public function show(int $id)
    {
        
        $orderModel = new OrderModel();
        
        $customer = $orderModel->getCustomer($id);
        
        if ($customer === null) {
            abort(404);
        }
        
        $orderDetails = $orderModel->getDetails($id);
        $totalOrder = $orderModel->getTotal($id);
        
        return view('orders.show', [
            'customer' => $customer,
            'details' => $orderDetails,
            'totalOrder' => $totalOrder
        ]);
    }
}
