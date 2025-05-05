@extends('master')

@section('titlePage', 'home')

@section('content')

<section class="flex items-center justify-center min-h-screen px-8 py-48">
    <div class="flex flex-row items-center gap-8 w-full max-w-6xl">
        <!-- Div Kiri: Teks -->
        <div class="flex flex-col items-start w-1/2">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Hi, I'm Indah Nur Maulidia
            </h1>
            <p class="mb-4 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                Saya seorang Web Developer dan UI/UX Enthusiast.
            </p>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                Membangun website yang interaktif, responsif, dan berfokus pada pengalaman pengguna.
            </p>
            <a href="{{ route('about') }}" class=" my-2 inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>

        <!-- Div Kanan: Foto -->
        <div class="flex justify-center items-center w-1/2">
            <img src="images/akuu.png" alt="Foto Indah" class="w-96 h-96 object-cover">
        </div>
    </div>
</section>

@endsection