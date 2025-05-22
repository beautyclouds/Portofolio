@extends('master')

@section('titlePage', 'contact')

@section('content')

<!-- Section Project -->
<section class="bg-white flex flex-col items-center px-8 py-12">
    <div class="text-center mb-8">
        <h1 class="mb-12 text-4xl font-extrabold leading-none tracking-tight text-yellow-500 md:text-5xl lg:text-6xl">
            Project
        </h1>
    </div>
    <div class="grid grid-cols-3 items-center gap-16">
      <!-- projek 1 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/images/couture_vista.png" alt="" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Couture Vista</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Website untuk butik dengan fitur katalog produk, halaman detail produk, dan desain yang elegan.</p>
          <a href="https://github.com/beautyclouds/Couture_Vista" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-Yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            See more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
          </a>
        </div>
      </div>

      <!-- projek 2 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/images/lha_iki_crud.png" alt="" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lha Iki Cafe</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Website untuk café dengan sistem pemesanan online, menu digital, dan desain responsif untuk pengalaman pengguna optimal.</p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-Yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            See more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
          </a>
        </div>
      </div>

      <!-- projek 3 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/images/perpus.png" alt="" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Desain Perpustakaan</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Desain perpustakaan digital yang simpel, informatif, mudah digunakan, dengan fitur rekomendasi dan pelacakan buku</p>
          <a href="https://www.figma.com/design/K2jDISScsv2XNOK6IvUUch/Perpustakaan?node-id=39-2&t=IRgQ7uftgCIEgA6p-1" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-Yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            See more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
          </a>
        </div>
      </div>

    </div>
</section>
<!-- <div class="header">
<h1 class="flex justify-center mb-10 pt-5 text-5xl font-extrabold dark:text-white">Contact<small class="text-5xl font-semibold text-blue-500 dark:text-blue-400">Me</small></h1>
</div>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<form action="/" method="post">
  @csrf
<div class="max-w-sm mx-auto"> 
  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
  <input type="email" name="email" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" class=
  "form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
  @error('email')
  <div class="flex items-center" style="color: red;">
  <div class="invalid-feedback">{{ $message }}</div>
  </div>
  @enderror

  <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">We’ll never share your details. Read our <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Privacy Policy</a>.</p>
</div>

<div class="max-w-sm mx-auto">
  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
  <div class="flex">
    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
      </svg>
    </span>
    <input type="text" name="name" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Name" class=
    "form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
  </div>
  @error('name')
    <div class="flex items-center" style="color: red;">
      <div class="invalid-feedback">{{ $message }}</div>
    </div>
  @enderror
</div>

<div class="max-w-sm mx-auto">
    <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number:</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
            </svg>
        </div>
        <input type="number" name="number" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="0812-3456-7890" required class="form-control @error('number') is-invalid @enderror" id="number" value="{{ old('number') }}">
    </div>
    @error('number')
      <div class="flex items-center" style="color: red;">
      <div class="invalid-feedback">{{ $message }}</div>
      </div>
    @enderror
    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Select a phone number that matches the format.</p>
    
</div>

<div class="max-w-sm mx-auto">
  <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Your Province</label>
  <select name="provinsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>Choose Your Province</option>
    <option value="JW">Jawa</option>
    <option value="KL">Kalimantan</option>
    <option value="SM">Sumatera</option>
    <option value="SL">Sulawesi</option>
    <option value="PA">Papua</option>
    <option value="BL">Bali</option>
  </select>
  
</div>

<div class="max-w-sm mx-auto">
  <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Your Gender</label>
  <select name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  
    <option selected>Choose Your Gender</option>
    <option value="ML">Male</option>
    <option value="KFM">Female</option>
    <option value="OT">Others</option>
  </select>
</div>

<div class="max-w-sm mx-auto">
  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
  <textarea name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..." class=
  "form-control @error('message') is-invalid @enderror" id="message" value="{{ old('message') }}"></textarea>
  @error('message')
  <div class="flex items-center" style="color: red;">
  <div class="invalid-feedback">{{ $message }}</div>
  </div>
  @enderror
  
</div><br>


<div class="max-w-sm mx-auto">
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit Your Massage</button>
</div>
</form> -->


@endsection