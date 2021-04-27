@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Etalase
            </h1>
        </div>
    </div>

    {{-- search bar --}}
    <div class="p-8 w-auto sm:w-2/5 ml-auto mr-auto">
            <form method="GET" action="{{url('/blog')}}">
                <div class="bg-white flex items-center rounded-full shadow-xl">
                    <input name="cari" class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search"
                        type="text" placeholder="Cari akun">
        
                    <div class="p-1 mr-2">
                        <button
                            class="bg-gray-700 text-white rounded-full p-1 hover:bg-blue-400 focus:outline-none w-10 h-10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd" />
                              </svg>
                        </button>
                    </div>
                </div>
            </form>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 text-center">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Jual Account
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">

            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" width="700px" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-4xl pb-4">
                    {{ $post->title }}
                </h2>

                <span class="text-gray-500 ">
                    Oleh <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>,
                    diposting pada {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <p class="text-xl text-gray-700 pt-8 leading-8 font-light ">
                    {{ $post->description }}
                </p>
                <p class="text-xl text-gray-700 pb-10 leading-8 font-light ">
                    <b>Rp.{{ $post->harga }},-</b>
                </p>

                <a href="/blog/{{ $post->slug }}"
                    class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Selengkapnya
                </a>

                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)

                    <span class="float-right">
                        <form action="/blog/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('delete')

                            <button class="text-red-500 pl-2" type="submit"><b>Hapus</b></button>
                        </form>
                    </span>
                    <span class="float-right">
                        <a href="/blog/{{ $post->slug }}/edit" class="bg-gray-600 hover:bg-purple-700 text-white font-bold py-1 px-4 rounded
                                    pb-1 ">
                            Edit
                        </a>
                    </span>
                @endif
            </div>
        </div>


    @endforeach
@endsection
