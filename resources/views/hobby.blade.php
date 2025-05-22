@extends('master')

@section('titlePage', 'skills')

@section('content')

<!-- Section Skills -->
<section class="bg-gray-50 flex flex-col items-center px-8 py-12">
    <div class="text-center mb-8">
        <h1 class="mb-12 text-4xl font-extrabold leading-none tracking-tight text-green-500 md:text-5xl lg:text-6xl dark:text-white">
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

@endsection
