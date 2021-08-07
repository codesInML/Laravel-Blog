@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">Update Post</h1>
    </div>
</div>

@if($errors->all())
<div class="m-auto w-4/5">
    <ul>
        @foreach($errors->all() as $error)
        <li class="mb-4 w-full text-gray-50 bg-red-700 rounded-2xl py-4">
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $post->title }}" class="bg-gray-0 block border-b-2 w-full h-20 px-4 text-3xl mb-5 outline-none">
        <textarea name="description" class="py-20 bg-gray-0 block border-b-2 w-full h-60 px-4 text-xl outline-none">
        {{ $post->description }}
        </textarea>
        <!-- <div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input type="file" name="image" class="hidden">
            </label>
        </div> -->

        <button type="submit" class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-bold px-8 py-4 rounded-3xl">Update Post</button>
    </form>
</div>

@endsection