@extends('master')

@section('titlePage', 'skills')

@section('content')

<!-- Section Skills -->
<section class="bg-gray-50 flex flex-col items-center px-8 py-12">
    <div class="text-center mb-8">
        <h1 class="mb-12 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Skills
        </h1>
    </div>

    <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-12 w-full max-w-6xl">
        <!-- Skill Item -->
        <div class="flex flex-col items-center">
            <img src="images/html.jpg" alt="HTML" class="foto">
            <p class="mt-2 text-lg font-semibold text-gray-800">HTML</p>
        </div>

        <div class="flex flex-col items-center">
            <img src="images/css.jpg" alt="CSS" class="foto">
            <p class="mt-2 text-lg font-semibold text-gray-800">CSS</p>
        </div>

        <div class="flex flex-col items-center">
            <img src="images/js.jpg" alt="JavaScript" class="foto">
            <p class="mt-2 text-lg font-semibold text-gray-800">JavaScript</p>
        </div>

        <div class="flex flex-col items-center">
            <img src="images/laravel.jpg" alt="Laravel" class="foto">
            <p class="mt-2 text-lg font-semibold text-gray-800">Laravel</p>
        </div>

        <!-- Tambah skill lain disini -->
        <div class="flex flex-col items-center">
            <img src="images/vue.jpg" alt="vue" class="foto">
            <p class="mt-2 text-lg font-semibold text-gray-800">Vue</p>
        </div>

        <div class="flex flex-col items-center">
            <img src="images/php.jpg" alt="PHP" class="foto">
            <p class="mt-2 text-lg font-semibold text-gray-800">PHP</p>
        </div>

        <div class="flex flex-col items-center">
            <img src="images/mysql.jpg" alt="mysql" class="foto">
            <p class="mt-2 text-lg font-semibold text-gray-800">MySQL</p>
        </div>

        <div class="flex flex-col items-center">
            <img src="images/figma.jpg" alt="Figma" class="foto">
            <p class="mt-2 text-lg font-semibold text-gray-800">Figma</p>
        </div>
    </div>
</section>

<!-- Section Project -->
<section class="bg-white flex flex-col items-center px-8 py-12">
    <div class="text-center mb-8">
        <h1 class="mb-12 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
            Project
        </h1>
    </div>

    <div class="flex flex-col gap-16 w-full max-w-4xl">

        <!-- Project 1 - Butik -->
        <div class="bg-green-50 rounded-lg shadow-lg overflow-hidden p-6">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Couture Vista</h2>
                <p class="text-gray-700">Website e-commerce butik yang menawarkan koleksi pakaian terbaru dengan desain modern dan user-friendly.</p>
            </div>
            <div class="flex flex-col items-center gap-4">
                <img src="{{ asset('images/home.png') }}" alt="Butik Project Gambar 1" class="w-full h-full object-cover rounded-lg">
                <img src="{{ asset('images/produk.png') }}" alt="Butik Project Gambar 2" class="w-full h-full object-cover rounded-lg">
            </div>
        </div>

        <!-- Project 2 - Café -->
        <div class="bg-green-50 rounded-lg shadow-lg overflow-hidden p-6">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Lha Iki Café</h2>
                <p class="text-gray-700">Website promosi café yang menampilkan menu makanan dan minuman, sistem pemesanan online, dan desain user-friendly.</p>
            </div>
            <div class="flex flex-col items-center gap-4">
                <img src="{{ asset('images/homecafe.png') }}" alt="Cafe Project Gambar 1" class="w-full h-full object-cover rounded-lg">
                <img src="{{ asset('images/menu (3).png') }}" alt="Cafe Project Gambar 2" class="w-full h-full object-cover rounded-lg">
            </div>
        </div>

    </div>
</section>

@endsection
