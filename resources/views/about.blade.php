@extends('master')

@section('titlePage', 'about')

@section('content')

<!-- Section About Me -->
<section class="flex items-center justify-center min-h-screen px-8" style="padding-top: 100px; padding-bottom: 100px;">
    <div class="flex flex-row items-center gap-8 w-full">
        <!-- Foto Profil -->
        <div class="w-1/2 flex justify-center items-center">
            <img src="images/mee.png" alt="Foto Indah" class=" object-cover" style="height: 500px; width: 500px;">
        </div>

        <!-- Deskripsi -->
        <div class="w-1/2 flex flex-col items-start">
            <h1 class="flex items-center text-5xl font-extrabold dark:text-white my-4">
                About
                <span class="bg-orange-100 text-orange-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-2">ME</span>
            </h1>

            <p class="mb-4 text-lg font-normal text-gray-900 lg:text-xl dark:text-gray-400">
                Saya adalah seorang pelajar di bidang Rekayasa Perangkat Lunak yang memiliki minat besar dalam pengembangan website dan desain UI/UX.
                Saya percaya bahwa teknologi dapat membuat pengalaman manusia menjadi lebih baik.
                Dengan kreativitas, saya berusaha menciptakan solusi digital yang fungsional dan estetis.
            </p>
        </div>
    </div>
</section>

<!-- Section Education -->
<section class="bg-white flex flex-col items-center px-8" style="padding-top: 100px; padding-bottom: 100px;">
    <div class="text-center mb-12">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-yellow-500 md:text-5xl lg:text-6xl dark:text-white">
            Education
        </h1>
    </div>

    <div class="flex flex-col gap-16 w-full max-w-6xl">

        <!-- SMK -->
        <div class="flex flex-row items-center gap-8 w-full">
            <!-- Foto SMK -->
            <div class="w-1/2 flex justify-center">
                <img src="images/ilsmk.jpg" alt="SMK" class="w-96 h-96 object-cover rounded-lg shadow-md">
            </div>
            <!-- Deskripsi SMK -->
            <div class="w-1/2 flex flex-col justify-center border-l-4 border-yellow-400 pl-6">
                <div class="inline-block bg-yellow-300 text-yellow-900 text-2xl font-semibold px-4 py-2 rounded-md shadow-sm mb-4">
                    SMK Negeri 1 Purwosari
                </div>
                <p class="text-gray-600 mt-2 pr-4">
                    Jurusan Rekayasa Perangkat Lunak (RPL). Belajar pemrograman, desain UI/UX, dan pengembangan web untuk membuat aplikasi dan antarmuka pengguna yang fungsional.
                </p>
                <p class="text-gray-500 mt-1 text-sm">2023 - Sekarang</p>
            </div>
        </div>

        <!-- SMP -->
        <div class="flex flex-row items-center gap-8 w-full">
            <!-- Foto SMP -->
            <div class="w-1/2 flex justify-center">
                <img src="images/ilsmp.jpg" alt="SMP" class="w-96 h-96 object-cover rounded-lg shadow-md">
            </div>
            <!-- Deskripsi SMP -->
            <div class="w-1/2 flex flex-col justify-center border-l-4 border-yellow-400 pl-6">
                <div class="inline-block bg-yellow-300 text-yellow-900 text-2xl font-semibold px-4 py-2 rounded-md shadow-sm mb-4">
                    SMP Negeri 1 Lawang
                </div>
                <p class="text-gray-600 mt-2 pr-4">
                    Mengembangkan pengetahuan dasar di bidang akademik, aktif dalam kegiatan ekstrakurikuler dan organisasi, dan mulai mengenal dasar-dasar teknologi dan komputer.
                </p>
                <p class="text-gray-500 mt-1 text-sm">2020 - 2023</p>
            </div>
        </div>

    </div>
</section>

@endsection