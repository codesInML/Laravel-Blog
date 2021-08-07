@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">{{ $post->title }}</h1>
    </div>
</div>


<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">
            {{ $post->user->name }}
        </span>, Created at {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user->id)
    <span class="float-right">
        <a href="/blog/{{ $post->slug }}/edit" class="bg-white-rounded-lg shadow-lg p-4 uppercase border border-blue cursor-pointer">Edit</a>
    </span>
    <span class="float-left">
        <form action="/blog/{{ $post->slug }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="bg-white-rounded-lg text-red-500 shadow-lg p-4 uppercase border border-blue cursor-pointer" type="submit">Delete</button>
        </form>
    </span>
    @endif
</div>

@endsection