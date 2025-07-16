@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-blue-100 via-white to-blue-50 py-16 flex items-center">
    <div class="container mx-auto px-4 max-w-3xl">
        <div class="bg-white rounded-2xl shadow-xl p-10 text-center animate-fade-in-up">
            <img src="{{ asset('images/FROZELLA.png') }}" alt="Frozella" class="w-20 h-20 mx-auto mb-6 drop-shadow-lg animate-fade-in-up">
            <h1 class="text-4xl font-extrabold mb-4 text-primary animate-fade-in-up">Tentang Frozella</h1>
            <p class="text-lg text-gray-700 mb-6 animate-fade-in-up animation-delay-200">
                <span class="font-semibold text-primary">Frozella</span> adalah brand frozen food yang menghadirkan produk berkualitas, praktis, dan lezat untuk keluarga Indonesia. Kami berkomitmen menyediakan pilihan makanan beku terbaik yang mudah disajikan, sehat, dan cocok untuk berbagai kebutuhan keluarga modern.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
                <div class="bg-blue-50 rounded-xl p-6 shadow text-center animate-fade-in-up">
                    <div class="flex justify-center mb-2">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 1.343-3 3 0 1.657 1.343 3 3 3s3-1.343 3-3c0-1.657-1.343-3-3-3zm0 10c-4.418 0-8-1.79-8-4V6a2 2 0 012-2h12a2 2 0 012 2v8c0 2.21-3.582 4-8 4z"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-1">Kualitas Terbaik</h3>
                    <p class="text-gray-600 text-sm">Menggunakan bahan pilihan dan proses produksi higienis.</p>
                            </div>
                <div class="bg-blue-50 rounded-xl p-6 shadow text-center animate-fade-in-up animation-delay-200">
                    <div class="flex justify-center mb-2">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-1">Praktis & Variatif</h3>
                    <p class="text-gray-600 text-sm">Banyak pilihan produk, mudah disajikan kapan saja.</p>
                </div>
                <div class="bg-blue-50 rounded-xl p-6 shadow text-center animate-fade-in-up animation-delay-400">
                    <div class="flex justify-center mb-2">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <h3 class="font-bold text-lg text-primary mb-1">Aman & Sehat</h3>
                    <p class="text-gray-600 text-sm">Produk terjamin keamanannya dan cocok untuk keluarga.</p>
                </div>
            </div>
            <h2 class="text-2xl font-bold mb-4 text-primary mt-10 animate-fade-in-up">Tim Kami</h2>
            <div class="flex flex-col items-center justify-center">
                <div class="bg-white border border-blue-100 rounded-xl shadow-lg p-6 w-full max-w-xs animate-fade-in-up">
                    <img src="https://ui-avatars.com/api/?name=Muchammad+Farras+Abid+Ardaffa&background=2563eb&color=fff&size=128" alt="Muchammad Farras Abid Ardaffa" class="w-24 h-24 rounded-full mx-auto mb-3 shadow">
                    <h3 class="font-bold text-lg text-primary mb-1">Muchammad Farras Abid Ardaffa</h3>
                    <p class="text-gray-600 text-sm">Founder & Owner</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 