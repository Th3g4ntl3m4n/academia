@extends('layouts.web')

@section('content')
<div class="grid grid-cols-3 gap-4">
    <div class="p-8 bg-gray-200 col-span-1">
        <ul class="flex flex-col">
            <li class="font-medim text-sm text-gray-400 uppercase mb-4">
                contenido                
            </li>
           @foreach ($course->posts as $post)
               <li class="flex items-center text-gray-600 mt-2">
                    {{ $post->name}}
                    @if( $post->free)
                        <span class="text-xs ">Gratis</span>
                    @endif
               </li>
           @endforeach
        </ul>
    </div>
</div>

<div class="text-gray-700 col-span-2">
    <img src="{{ $course->image}}" alt="">
    <h2>{{ $course->name}}</h2>
    <p>{{ $course->description}}</p>
</div>


<div class="flex mt-3">
    <img src="{{ $course->user->avatar}}"
    class="h-10 w-10 rounded-full mr-2"
>
<p class="text-gray-500">
       {{$course->user->name}}</p>

       <p class="text-gray-500">
        {{$course->created_at->diffForHumans()}}</p>
        </div>
    </div>
       <!-- Cursos Similares -->
       <div class="grid grid-cols-2">
                @foreach ($course->similar() as $course)
        
                <x-course-card :course="$course"/>   
                @endforeach
       </div>

    <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Ultimos Cursos</h1>
        <h2 class="text-xl text-gray-600"> Formate onmline como profesional</h2>
    </div>

    <livewire:course-list>
@endsection