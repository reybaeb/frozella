@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6 text-primary">Katalog Produk</h1>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    <div class="mb-4">
        <a href="{{ route('products.create') }}" class="bg-primary text-white px-4 py-2 rounded-lg font-semibold hover:bg-primary/90 transition">Tambah Produk</a>
    </div>
    <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($product->gambar)
                            <img src="{{ Storage::url($product->gambar) }}" alt="{{ $product->nama }}" class="h-12 w-auto rounded shadow object-cover">
                        @else
                            <img src="{{ asset('images/default-frozenfood.png') }}" alt="Default" class="h-12 w-auto rounded shadow object-cover">
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->nama }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($product->harga,0,',','.') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->stok }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->kategori }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('products.show', $product) }}" class="text-blue-600 hover:text-blue-900 mr-2">Detail</a>
                        <a href="{{ route('products.edit', $product) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin hapus produk?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                    @empty
                    <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">Belum ada produk di katalog.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection 