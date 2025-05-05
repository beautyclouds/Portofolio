@extends('master')

@section('titlePage', 'Semua Post')

@section('content')

<div class="wrapper items-center">
    <h1 class=" text-center mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400">Data</span> Posts</h1>

    <a href="{{ route('posts.create') }}">
        <button  type="botton" class="text-blue-500 bg-white border border-blue-500 hover:bg-blue-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-lg font-medium rounded-lg text-sm px-5 py-2.5 ml-2">Tambah Posts</button>
    </a>
    @if (session('success'))
        <div class="alert-success items-center px-4 py-2 border border-gray-200 rounded-lg text-blue-400">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <table style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-gray-700">
                <th scope="row"class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $post->title}}
                </th>
                <td class="px-6 py-4">
                    {{ $post->body }}
                </td>
                <td class="px-6 py-4 flex items-center">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-3"><a href="{{ route('posts.edit', $post->id) }}">Edit</a></button>
                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection