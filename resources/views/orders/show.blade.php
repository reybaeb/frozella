@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 py-12">
    <div class="max-w-lg mx-auto px-4">
        <h1 class="text-2xl font-bold mb-6 text-primary">Detail Pesanan</h1>
        <div class="bg-white rounded-lg shadow p-6">
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
            <a href="{{ route('orders.index') }}" class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary/90">Kembali ke Riwayat</a>
        </div>
    </div>
</div>
@endsection 