@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-100 via-white to-blue-50 py-12">
    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-xl p-8">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <img src="{{ asset('storage/' . ($frozenFood->image ?? 'images/default-frozenfood.png')) }}" alt="{{ $frozenFood->name }}" class="w-48 h-48 object-cover rounded-xl shadow mb-4 md:mb-0">
            <div class="flex-1">
                <h1 class="text-3xl font-bold text-primary mb-2">{{ $frozenFood->name }}</h1>
                <p class="text-gray-700 mb-4">{{ $frozenFood->description }}</p>
                <div class="flex items-center gap-4 mb-4">
                    <span class="text-2xl font-bold text-accent">Rp {{ number_format($frozenFood->price,0,',','.') }}</span>
                    <span class="text-sm px-3 py-1 rounded-full bg-blue-100 text-primary">Stok: {{ $frozenFood->stock }}</span>
                </div>
                <a href="/frozen-food" class="inline-block mt-4 bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-accent hover:text-primary transition-all duration-300">Kembali ke Katalog</a>
            </div>
        </div>
    </div>
</div>
@endsection 