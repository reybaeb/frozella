<?php

namespace App\Http\Controllers;

use App\Models\FrozenFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrozenFoodController extends Controller
{
    /**
     * Menampilkan form custom bike
     */
    public function create()
    {
        return view('custom-bike');
    }

    /**
     * Menyimpan data custom bike
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'frame' => 'required',
            'warna_frame' => 'required',
            'handlebar' => 'required',
            'sadel' => 'required',
            'ban' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'catatan' => 'nullable'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/custom-bikes', $namaGambar);
            $data['gambar'] = 'custom-bikes/' . $namaGambar;
        }

        FrozenFood::create($data);

        return redirect()->route('custom-bike.create')
            ->with('success', 'Pesanan custom bike berhasil dikirim! Tim kami akan menghubungi Anda segera.');
    }

    /**
     * Menampilkan daftar custom bike untuk admin
     */
    public function index()
    {
        $customBikes = FrozenFood::latest()->paginate(10);
        return view('admin.custom-bikes.index', compact('customBikes'));
    }

    /**
     * Menampilkan detail custom bike untuk admin
     */
    public function show(FrozenFood $customBike)
    {
        return view('admin.custom-bikes.show', compact('customBike'));
    }

    /**
     * Mengupdate status custom bike
     */
    public function updateStatus(Request $request, FrozenFood $customBike)
    {
        $request->validate([
            'status' => 'required|in:pending,diproses,selesai,ditolak'
        ]);

        $customBike->update([
            'status' => $request->status
        ]);

        return redirect()->back()
            ->with('success', 'Status pesanan berhasil diperbarui');
    }
}
