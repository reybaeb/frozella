@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-primary">Dashboard Admin</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-blue-50 p-6 rounded-xl shadow text-center">
            <h2 class="text-2xl font-bold text-primary mb-2">Total Produk</h2>
            <p class="text-3xl font-extrabold">{{ \App\Models\Product::count() }}</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-xl shadow text-center">
            <h2 class="text-2xl font-bold text-primary mb-2">Total User</h2>
            <p class="text-3xl font-extrabold">{{ \App\Models\User::count() }}</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-xl shadow text-center">
            <h2 class="text-2xl font-bold text-primary mb-2">Total Order</h2>
            <p class="text-3xl font-extrabold">{{ \App\Models\Order::count() }}</p>
        </div>
    </div>
</div>
@endsection 