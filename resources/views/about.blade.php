@extends('layouts.default')

@section('page-content')
<section class="py-20 min-h-screen flex items-center">
    <div class="max-w-screen-lg mx-auto">
        <h2 class="text-6xl text-center mb-6">About</h2>
        <p class="mb-3">
            Quantum mechanics is a fundamental theory in physics that provides a description of the physical properties of nature
            at the scale of atoms and subatomic particles. It is the foundation of all quantum physics including quantum chemistry, 
            quantum field theory, quantum technology, and quantum information science
        </p>

        <div class="text-center">
            <a href="{{ route('home')}}" class="inline-block bg-pink-500 text-center py-2 px-4
             rounded hover:bg-purple-500 transition">Go Home</a>
        </div>
        
    </div>
    

</section>
    
@endsection