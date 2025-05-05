@extends('master')

@section('titlePage', 'create')

@section('content')
<div class="wrapper">
<h1 class=" text-center mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400">Buat</span> Posts <span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400">Baru</span></h1>

<form class="max-w-sm mx-auto" method="POST" action="{{ url('posts') }}">
    @if (session('success'))
    <div class="px-4 py-2  border border-gray-200 rounded-lg text-blue-400 text-xs">
        <p>{{ session('success')}}</p>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert-danger">
        <p class="text-red-500 font-medium">Perhatian :</p>
        <ul>
            @foreach ($errors->all() as $error)
            <li class="text-xs text-red-500">{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


  <div class="mb-5">
    @csrf
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
    <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="whats your title?"/>
  </div>
  <div class="mb-5">
    <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
    <textarea name="body" id="body" class=
    "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim Data</button>
</form>

</div>
@endsection