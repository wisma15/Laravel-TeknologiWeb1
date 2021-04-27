@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-5xl">
                {{$post->title}}
            </h1>
            
        </div>
    </div>

    <div class="w-4/5 m-auto pt-1">
        <span class="text-gray-500">
            Oleh <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>,
            diposting pada {{date('jS M Y', strtotime($post->updated_at))}}
        </span>
        <div class="pt-2">
            <img src="{{asset('images/' . $post->image_path)}}" width="700px" alt="">
        </div>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{$post->description}}
        </p>
        <p class="text-xl text-gray-700 pt-8 leading-8 font-light">
            Harga : <b>Rp.{{$post->harga}},-</b>
        </p>
        <p class="text-xl text-gray-700 leading-8 font-light">
            Hubungi Penjual : <b>{{$post->kontak}}</b>
        </p>
        
    </div>
   

  
@endsection
