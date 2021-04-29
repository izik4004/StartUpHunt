@extends('layouts.app')

@section('content')

<style>
     .card-notify-year {
        position: absolute;
        left: 580px;
        top: 215px;
        background: white;
        border-radius: 5%;
        text-align: center;
        color: red;      
        font-size: 14px;      
        width: 100px;
        height: 30px;    
        padding: 5px;
        border: 1px solid red;
}
</style>


<div class="px-6 pt-28 py-8">
    <div class="flex justify-between container mx-auto">
        <div class="w-full lg:w-8/12">
            <div class="flex items-center justify-between">
                <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Today</h1>
                <div>
                    <select class="p-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option>Latest</option>
                        <option>This Past Week</option>
                        <option>This Past Month</option>
                        <option>This Past Year</option>
                        <option>All Time</option>
                    </select>
                </div>
            </div>
           
               @if (session()->has('message')) 
                    <div class="w-full m-auto mt-18 pl-2">
                        <p class="w-1/2 mb-4 text-gray-50 pl-4 mt-4 bg-green-500 rounded-lg py-4">
                        {{ session()->get('message') }}
                        </p>
                    </div>
               @endif
           
               
               <!-- component -->
<div class="min-w-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-7xl w-full mx-auto py-6 ">
        <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
            @foreach ($posts as $post)
            <div class="w-full lg:w-1/2 h-24">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
                    <div class="flex items-center">
                        <div class="icon w-20 p-1.5  rounded-full mr-3">
                            <img src="{{ asset('images/' . $post->image_path) }}" class="rounded-md md:w-28 md:max-h-20"/>
                        </div>
                        <div class="flex flex-col justify-center">
                            <span class="card-notify-year "> {{ $post->category }}</span>
                            <div class="text-lg mt-0"> <a href="/startup/{{ $post->slug }}">{{$post->title}} </a></div>
                            <div class="text-sm text-gray-400">{{$post->description}}</div>
                        </div>
                    </div>
                    <div class="flex flex-row ml-16">
                        @if (isset(Auth::user()->id) && Auth::user()->id ==
                        $post->user_id)
                            <span class="float-right">
                                <a href="/startup/{{ $post->slug }}/edit"
                                    class="text-gray-700 ml-8 italic hover:text-gray-900
                                    pb-1 border-b-2"
                                    >Edit
                                
                                </a>
                            </span>
        
                            <span class="ml-2">
                                <form action="/startup/{{ $post->slug }}" method="post">
                                @csrf
                                @method('delete')
        
                                <button
                                    class="text-red-500 pr-3" type="submit">
                                    Delete
                                </button>
                                </form>
                            </span>
                        @endif
                    </div>
                    
                </div>
                
            </div>
            @endforeach
            

           

        </div>
    </div>
</div>
         
                            

                   
               
             

                                    
                    

                           
                     
                        
    
            
        
            
            <div class="mt-8">
                <div class="flex">
                    <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-500 font-medium rounded-md cursor-not-allowed">
                        previous
                    </a>
                
                    <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                        1
                    </a>
                
                    <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                        2
                    </a>
                
                    <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                        3
                    </a>
                
                    <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                        Next
                    </a>
                </div>
            </div>
        </div>
        <div class="-mx-8 w-4/12 hidden lg:block">
            <div class="px-8">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Hiring Now</h1>
                <div class="flex flex-col bg-white max-w-sm px-6 py-4 mx-auto rounded-lg shadow-md">
                    <p>No Data available at the Moment</p>
                </div>
            </div>
            <div class="mt-10 px-8">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                <div class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md">
                    @foreach ($posts as $post )
                    <ul>
                        <li class="mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                            {{ $post->category }}</a></li>
                       
                    </ul>    
                        @endforeach
                        
                        
                </div>
            </div>
            <div class="mt-10 px-8">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Recent Post</h1>
                <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-md">
                    <div class="flex justify-center items-center"><a href="#"
                            class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded hover:bg-gray-500">Laravel</a>
                    </div>
                    <div class="mt-4"><a href="#" class="text-lg text-gray-700 font-medium hover:underline">Build
                            Your New Idea with Laravel Freamwork.</a></div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center"><img
                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                alt="avatar" class="w-8 h-8 object-cover rounded-full"><a href="#"
                                class="text-gray-700 text-sm mx-3 hover:underline">Alex John</a></div><span
                            class="font-light text-sm text-gray-600">Jun 1, 2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection