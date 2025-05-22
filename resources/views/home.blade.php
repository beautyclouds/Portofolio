@extends('master')

@section('titlePage', 'home')

@section('content')

<section class="flex items-center justify-center min-h-screen px-16" style="padding-top: 100px; padding-bottom: 100px;">
    <div class="flex flex-row items-center gap-16 w-full max-w-6xl">
        <!-- Div Kiri: Teks -->
        <div class="flex flex-col items-start w-1/2">
            <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Hi, I'm <span class="text-green-500">Indah Nur Maulidia</span>
            </h1>
            <p class="mb-3 text-xl font-normal text-xl text-gray-500 xl:text-x\xl dark:text-gray-400">
                Saya seorang <span class="text-green-500">Web Developer</span> dan <span class="text-green-500">UI/UX Enthusiast</span>.
            </p>
            <a href="{{ route('about') }}" class=" my-6 inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>

        <!-- Div Kanan: Foto -->
        <div class="flex justify-center items-center w-1/2">
            <img src="images/akuu.png" alt="Foto Indah" class=" object-cover" style="height: 500px; width: 500px;">
        </div>
    </div>
</section>

@endsection