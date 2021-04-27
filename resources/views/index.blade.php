@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-white pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <div>
                    <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-5">
                        Transaksi account Genshin Impact
                    </h1>
                    <h4 class="sm:text-white text-3xl uppercase font-bold text-shadow-md pb-14">
                        Hanya di <b>CUAN.ID!</b>
                    </h4>
                </div>
                <div>
                    @guest
                        <h4 class="sm:text-white text-1xl font-bold text-shadow-md pb-5">
                            Silahkan Login terlebih dahulu
                        </h4>
                        <a href="{{ route('login') }}"
                            class="text-center bg-gray-50 text-gray-800 mr-5 py-2 px-4 font-bold text-xl uppercase">
                            Login
                        </a>
                    @endguest
                </div>
                <div>
                    @if (Auth::check())
                        <h4 class="sm:text-white text-1xl font-bold text-shadow-md pb-5">
                            Mulai Transaksi
                        </h4>
                        <a href="{{ url('blog/create') }}"
                            class="text-center bg-blue-200 text-gray-800 mr-1 py-2 px-4 font-bold text-xl uppercase">
                            Jual Account
                        </a>
                        <a href="{{ url('/blog') }}"
                            class="text-center bg-blue-200 text-gray-800 ml-1 py-2 px-4 font-bold text-xl uppercase">
                            Beli Account
                        </a>
                    @endif
                </div>

            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="mb-4">
            <img src="https://images.alphacoders.com/110/thumb-1920-1109789.png" width="700px" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Apa itu Genshin Impact?
            </h2>

            <p class="py-8 text-gray-600 text-l text-justify tracking-wide leading-5">
                Genshin Impact adalah permainan free-to-play action RPG dunia terbuka yang dikembangkan oleh miHoYo. Genshin
                Impact juga merupakan IP kedua yang dibesut oleh miHoYo setelah Honkai Impact 3.

            </p>

            <p class=" text-gray-600 text-l pb-9 text-justify tracking-wide leading-5">
                Game ini dirilis pada tanggal 28 September 2020 di platform Android, iOS, Windows, dan PlayStation 4, serta
                28 April 2021 di platform PlayStation 5.

            </p>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Jelajahi
            </a>

        </div>
    </div>

    <div class="text-center p-15 bg-red-500 text-white">

        <h2 class="text-2xl pb-4 text-l">
            Cari akun genshin impact impianmu
        </h2>

        <span class="font-extrabold block text-3xl py-1 pb-3">
            TENTU HANYA DI CUAN.ID<b>!</b>
        </span>
        <div>
            @guest
            <span class="text-2xl pb-4 text-l">
                silahkan registrasi <a href="{{ route('register') }}" class="text-yellow-200"><b>disini</b></a>
            </span> 
            @endguest
            @if (Auth::check())
            <span class="text-2xl pb-4 text-l">
                Jelajahi lebih jauh <a href="{{ url('blog') }}" class="text-yellow-200"><b>disini</b></a>
            </span>
            @endif
        </div>

    </div>

    <div class="text-center py-15 ">
        <span class="uppercase text-s text-gray-400">
            CUAN.ID
        </span>

        <h2 class="text-4xl font-bold py-10">
            Account Terbaru
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Temukan account Genshin Impact menarik lainnya, dengan spesifikasi yang kamu inginkan. 
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-blue-400 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block ">
                <span class="uppercase text-xs">
                    Terbaru
                </span>

                <h3 class="text-xl font-bold py-10">
                    <p>Dijual Account Genshin Impact</p>
                    <p>Karakter :</p>
                    <p>Diluc C1, Jean C0, Childe C0, Venti C0, Albedo C1, Zhongli C0</p>
                    <p>Senjata :</p>
                    <p>Wolf Grave Stone, Primordial Jade Cutter, Skyward Harp</p>

                </h3>

                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Temukan Lebih Banyak
                </a>
            </div>
        </div>

        <div>
            <img src="{{asset('/images/Genshin.jpg')}}" width="700px" alt="">
        </div>
    </div>
@endsection
