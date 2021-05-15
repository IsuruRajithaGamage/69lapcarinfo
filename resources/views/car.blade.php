@extends('layouts.default')

@section('page-content')


<section class="py-20">
    <div class="max-w-screen-md mx-auto">
        
        <h4 class="text-xl mb-3 text-gray-200">SUVs</h4>
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-4 bg-gray-500 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Land Cruiser 76 GXL</h3>
                    <img src="/images/76GXL.jpg" alt="">

                </div>

            </div>

        </div>
        
    </div>

    <div class="max-w-screen-md mx-auto">
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-4 bg-gray-500 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Nissan Patrol y60</h3>
                    <img src="/images/y60.jpg" alt="">

                </div>

            </div>

        </div>
        
    </div>

    <div class="max-w-screen-md mx-auto">
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-4 bg-gray-500 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Defender Puma 110</h3>
                    <img src="/images/puma110.jpg" alt="">

                </div>

            </div>

        </div>
        
    </div>
</section>

@endsection