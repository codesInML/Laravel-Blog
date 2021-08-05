@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bole text-xl uppercase" href="/blog">Read More</a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ URL::to('/images/image.jpg') }}" width="700" alt="">
        </div>
        <div class="m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold-text-gray-600">
                Struggling to be a better web developer?
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint necessitatibus magnam consequatur qui delectus voluptatibus amet saepe atque consequuntur. Perferendis.
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque possimus nemo totam esse repellendus molestias delectus ullam fugiat. Facere, doloribus.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">find out more</a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in ...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Data Analysis
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Data Visualization
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Mobile Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">Blog</span>
        <h2 class="text-4xl font-bold py-10">Recent Post</h2>
        <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eius animi ipsam illum laudantium consequatur, alias asperiores quis ducimus ipsa?</p>
    </div>

    <div class="sm:grid w-4/5 grid-cols-2 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto block w-4/5">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quas, quibusdam laudantium iure id, vel quia accusamus voluptatem, adipisci rem nemo ex nostrum laborum illum quidem ullam at ipsam quae?
                </h3>
                
                <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find out more</a>
            </div>
        </div>
        <div>
            <img src="{{ URL::to('/images/img.jpg') }}" width="700" alt="">
        </div>
    </div>
@endsection