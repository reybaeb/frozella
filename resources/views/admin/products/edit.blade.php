@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-lg">
    <h1 class="text-2xl font-bold mb-6 text-primary">Edit Produk</h1>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-lg shadow">
        @csrf
        @method('PUT')
        <div>
            <label class="block mb-1">Nama Produk</label>
            <input type="text" name="nama" class="w-full px-4 py-2 border rounded-lg" required value="{{ $product->nama }}">
        </div>
        <div>
            <label class="block mb-1">Deskripsi</label>
            <textarea name="deskripsi" class="w-full px-4 py-2 border rounded-lg" rows="3">{{ $product->deskripsi }}</textarea>
        </div>
        <div>
            <label class="block mb-1">Harga</label>
            <input type="number" name="harga" class="w-full px-4 py-2 border rounded-lg" required min="0" value="{{ $product->harga }}">
        </div>
        <div>
            <label class="block mb-1">Stok</label>
            <input type="number" name="stok" class="w-full px-4 py-2 border rounded-lg" required min="0" value="{{ $product->stok }}">
        </div>
        <div>
            <label class="block mb-1">Kategori</label>
            <input type="text" name="kategori" class="w-full px-4 py-2 border rounded-lg" required value="{{ $product->kategori }}">
        </div>
        <div>
            <label class="block mb-1">Gambar Produk</label>
            @if($product->gambar)
                <img src="{{ Storage::url($product->gambar) }}" alt="{{ $product->nama }}" class="h-24 w-24 object-cover rounded mb-2">
            @endif
            <input type="file" name="gambar" class="w-full px-4 py-2 border rounded-lg" accept="image/*">
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary/90">Update</button>
            <a href="{{ route('products.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg font-semibold hover:bg-gray-300">Kembali</a>
        </div>
    </form>
</div>
@endsection