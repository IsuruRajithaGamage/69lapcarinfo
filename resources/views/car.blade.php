@extends('layouts.default')

@section('page-content')


<section class="py-20">
    <div class="max-w-screen-md mx-auto">
        
        <h4 class="text-xl mb-3 text-gray-200">Toyota</h4>
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-4 bg-gray-500 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">StarletGT</h3>
                    <img src="/images/sratletGT.jpg" alt="">
                    
                
                </div>
        
            </div>

           <div class="w-full sm:w-1/2 nb-3 px-1">
                <div class="p-4 bg-gray-500 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">GlanzaGT</h3>
                    <img src="/images/GlanzaGT.jpg" alt="">

                </div>

            </div>


        </div>
        
    </div>

    
    <div class="max-w-screen-md mx-auto py-1">
        <h4 class="text-xl mb-3 text-gray-200">Mitsubishi</h4>
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-4 bg-gray-500 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Evolution x</h3>
                    <img src="/images/evox.jpg" alt="">

                </div>

            </div>
            <div class="w-full sm:w-1/2 nb-3 px-1">
                <div class="p-4 bg-gray-500 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Evolution viii</h3>
                    <img src="/images/evo8.jpg" alt="">

                </div>

            </div>

        </div>
        
    </div>

    <div class="max-w-screen-md mx-auto">
        <h4 class="text-xl mb-3 text-gray-200">Subaru</h4>
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-4 bg-gray-500 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Impreza WRX sti</h3>
                    <img src="/images/2006-Subaru-Impreza-WRX-STI.jpg" alt="">

                </div>

            </div>
        </div>
        
    </div>
    <div class="max-w-screen-md mx-auto">
        <h4 class="text-xl mb-3 text-gray-200">Honda</h4>
        <div class="flex flex-wrap mx-2">
            {{-- <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-4 bg-gray-500 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Isuzu Trooper</h3>
                    <img src="/images/Trooper.jpg" alt="">

                </div>

            </div> --}}
        </div>
        
    </div>



</section>

@endsection