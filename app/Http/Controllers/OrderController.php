<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\FrozenFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $frozenFoodId)
    {
        $frozenFood = FrozenFood::findOrFail($frozenFoodId);
        $request->validate([
            'quantity' => 'required|integer|min=1|max:' . $frozenFood->stock,
        ]);
        $total = $frozenFood->price * $request->quantity;
        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'status' => 'pending',
        ]);
        // (Opsional) bisa buat tabel order_items jika ingin multi-produk
        // Kurangi stok produk
        $frozenFood->decrement('stock', $request->quantity);
        return redirect()->route('orders.index')->with('success', 'Pesanan berhasil dibuat!');
    }

    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->latest()->paginate(10);
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $this->authorize('view', $order); // pastikan user hanya bisa lihat order sendiri
        return view('orders.show', compact('order'));
    }
} 