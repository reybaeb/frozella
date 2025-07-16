@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[70vh] flex items-center justify-center bg-gradient-to-br from-blue-200 via-blue-100 to-blue-50 text-primary overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="/images/hero-frozenfood.jpg" alt="Frozella Frozen Food" class="w-full h-full object-cover opacity-30">
        </div>
        <div class="container mx-auto px-4 text-center z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 animate-fade-in-up drop-shadow-lg">
                <span class="block">Frozella</span>
                <span class="block text-accent mt-2">Frozen Food Lezat & Praktis</span>
                </h1>
            <p class="text-xl md:text-2xl mb-8 text-primary/80 animate-fade-in-up animation-delay-200 max-w-2xl mx-auto">Pilihan frozen food berkualitas, sehat, dan siap saji untuk keluarga modern Indonesia.</p>
            <a href="/frozen-food" class="inline-block bg-primary text-white px-10 py-4 rounded-full text-lg font-semibold shadow-lg hover:bg-accent hover:text-primary transition-all duration-300 animate-fade-in-up animation-delay-400">Lihat Katalog</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 hover:bg-gray-50 rounded-xl transition-all duration-300 interactive-card">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 interactive-icon">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 animate-slide-in-right">High Performance</h3>
                    <p class="text-gray-600">Engineered for maximum speed and efficiency</p>
                </div>
                <div class="text-center p-6 hover:bg-gray-50 rounded-xl transition-all duration-300 interactive-card">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 interactive-icon">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 animate-slide-in-right animation-delay-200">Premium Quality</h3>
                    <p class="text-gray-600">Built with the finest materials and craftsmanship</p>
                </div>
                <div class="text-center p-6 hover:bg-gray-50 rounded-xl transition-all duration-300 interactive-card">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 interactive-icon">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 animate-slide-in-right animation-delay-400">Stylish Design</h3>
                    <p class="text-gray-600">Modern aesthetics that turn heads</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Section -->
    <section class="py-12 bg-accent/10">
        <div class="container mx-auto px-4 text-center">
            <div class="inline-block bg-white rounded-2xl shadow-xl px-8 py-6 mb-6 animate-fade-in-up">
                <h2 class="text-2xl font-bold mb-2 text-primary">Promo Spesial!</h2>
                <p class="text-lg text-gray-700 mb-4">Dapatkan diskon <span class="font-bold text-accent">10%</span> untuk pembelian pertama Anda di Frozella.<br>Gunakan kode: <span class="font-bold text-primary">FROZELLA10</span></p>
                <a href="/frozen-food" class="inline-block bg-accent text-primary px-8 py-3 rounded-full font-semibold shadow hover:bg-primary hover:text-white transition-all duration-300">Belanja Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Katalog Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 via-white to-blue-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6 text-primary animate-fade-in-up">Katalog Frozen Food</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto animate-fade-in-up animation-delay-200">Lihat semua produk frozen food berkualitas dari Frozella di halaman katalog kami.</p>
            <a href="/frozen-food" class="inline-block bg-primary text-white px-8 py-4 rounded-full text-lg font-semibold shadow-lg hover:bg-accent hover:text-primary transition-all duration-300 animate-fade-in-up animation-delay-400">Lihat Katalog</a>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8 text-primary animate-fade-in-up">Testimoni Pelanggan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-blue-50 p-6 rounded-2xl shadow-lg text-center animate-fade-in-up">
                    <p class="text-gray-700 mb-4 italic">"Frozen food Frozella enak dan praktis! Anak-anak saya suka sekali."</p>
                    <span class="font-semibold text-primary">- Ibu Rina, Surabaya</span>
                    </div>
                <div class="bg-blue-50 p-6 rounded-2xl shadow-lg text-center animate-fade-in-up animation-delay-200">
                    <p class="text-gray-700 mb-4 italic">"Pesanan cepat sampai dan kualitasnya terjaga. Recommended!"</p>
                    <span class="font-semibold text-primary">- Bapak Andi, Jakarta</span>
                </div>
                <div class="bg-blue-50 p-6 rounded-2xl shadow-lg text-center animate-fade-in-up animation-delay-400">
                    <p class="text-gray-700 mb-4 italic">"Pilihan produknya banyak, harga terjangkau, dan rasanya lezat."</p>
                    <span class="font-semibold text-primary">- Siti, Bandung</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-gradient-to-br from-blue-100 via-white to-blue-50">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center animate-fade-in-up">
                <h2 class="text-3xl font-bold mb-4 text-primary">Tentang Frozella</h2>
                <p class="text-lg text-gray-700 mb-4">Frozella adalah brand frozen food yang menghadirkan produk berkualitas, praktis, dan lezat untuk keluarga Indonesia. Kami berkomitmen menyediakan pilihan makanan beku terbaik yang mudah disajikan, sehat, dan cocok untuk berbagai kebutuhan keluarga modern.</p>
                <a href="/about" class="inline-block mt-4 bg-accent text-primary px-8 py-3 rounded-full font-semibold shadow hover:bg-primary hover:text-white transition-all duration-300">Selengkapnya</a>
            </div>
        </div>
    </section>
@endsection 