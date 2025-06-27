@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-lg">
    <h1 class="text-2xl font-bold mb-6 text-primary">Detail Order</h1>
    <div class="bg-white rounded-lg shadow p-6">
        <div class="mb-4">
            <span class="font-semibold text-gray-700">User:</span>
            <span>{{ $order->user->name ?? '-' }} ({{ $order->user->email ?? '-' }})</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Total:</span>
            <span>Rp {{ number_format($order->total,0,',','.') }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Status:</span>
            <span>{{ ucfirst($order->status) }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Tanggal Order:</span>
            <span>{{ $order->created_at->format('d M Y H:i') }}</span>
        </div>
        <a href="{{ route('admin.orders.index') }}" class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary/90">Kembali</a>
    </div>
</div>
@endsection 