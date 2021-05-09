@extends('layouts.default')

@section('page-content')

    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Explore <span class="text-pink-500">Cars</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">69LapCarInfo.com</h3>

        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to explore</p>

        </div>

    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
                This website is for who want to find a someone to done the assignment and want to do others assignments.
                easy to find just uploading your assignment file to the website workers can bid their price for the work.
                and uploader can find someone by best price and rated by others! 
            </p>
            <a href="{{route('about')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn more </a>
        </div>
    </section>
    
@endsection