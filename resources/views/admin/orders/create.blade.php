@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-lg">
    <h1 class="text-2xl font-bold mb-6 text-primary">Tambah Order</h1>
    <form action="{{ route('admin.orders.store') }}" method="POST" class="space-y-6 bg-white p-6 rounded-lg shadow">
        @csrf
        <div>
            <label class="block mb-1">User</label>
            <select name="user_id" class="w-full px-4 py-2 border rounded-lg" required>
                <option value="">Pilih User</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block mb-1">Total</label>
            <input type="number" name="total" class="w-full px-4 py-2 border rounded-lg" required min="0">
        </div>
        <div>
            <label class="block mb-1">Status</label>
            <select name="status" class="w-full px-4 py-2 border rounded-lg" required>
                <option value="pending">Pending</option>
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
                <option value="batal">Batal</option>
            </select>
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary/90">Simpan</button>
            <a href="{{ route('admin.orders.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg font-semibold hover:bg-gray-300">Kembali</a>
        </div>
    </form>
</div>
@endsection 