@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Detail Produk Frozen Food</h1>
        <a href="{{ route('admin.frozen-foods.index') }}" class="text-blue-600 hover:text-blue-900">
            &larr; Kembali ke Daftar
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Data Pribadi -->
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Data Pribadi</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Nama</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $frozenFood->nama }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Email</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $frozenFood->email }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Telepon</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $frozenFood->telepon }}</p>
                        </div>
                    </div>
                </div>

                <!-- Spesifikasi Sepeda -->
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Detail Produk</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Frame</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $frozenFood->frame }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Warna Frame</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $frozenFood->warna_frame }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Handlebar</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $frozenFood->handlebar }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Sadel</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $frozenFood->sadel }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Ban</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $frozenFood->ban }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gambar Referensi -->
            @if($frozenFood->gambar)
            <div class="mt-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Gambar Referensi</h2>
                <img src="{{ Storage::url($frozenFood->gambar) }}" alt="Gambar Referensi" 
                    class="max-w-lg rounded-lg shadow-md">
            </div>
            @endif

            <!-- Catatan -->
            @if($frozenFood->catatan)
            <div class="mt-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Catatan Tambahan</h2>
                <p class="text-sm text-gray-900">{{ $frozenFood->catatan }}</p>
            </div>
            @endif

            <!-- Update Status -->
            <div class="mt-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Update Status</h2>
                <form action="{{ route('admin.frozen-foods.update-status', $frozenFood) }}" method="POST" class="flex items-center space-x-4">
                    @csrf
                    <select name="status" class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="pending" {{ $frozenFood->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="diproses" {{ $frozenFood->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                        <option value="selesai" {{ $frozenFood->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="ditolak" {{ $frozenFood->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        Update Status
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection