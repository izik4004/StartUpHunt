@extends('layouts.app')

@section('content')

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
                        <p class="w-1/2 mb-4 text-gray-50 bg-green-500 rounded-sm py-4">
                        {{ session()->get('message') }}
                        </p>
                    </div>
               @endif
           
            <div class="mt-6 grid grid-cols-2  md:grid-cols-2 gap-4">
                @foreach ($posts as $post)
                  
                    
                <div class="p-4 bg-white shadow-xl max-w-xl rounded-xl flex justify-start dark:bg-gray-800 md:flex-row flex-col gap-4">
                    <div class="relative">
                        <img src="{{ asset('images/' . $post->image_path) }}" class="rounded-xl w-full md:w-28 md:max-h-40"/>
                        <span class="px-2 py-1 text-white bg-gray-700 text-xs rounded absolute right-2 bottom-2 bg-opacity-50">
                            7 min
                        </span>
                    </div>
                    <div class="flex flex-col justify-between">
                        <div class="flex items-start justify-between text-gray-700 dark:text-white my-2 md:m-0">
                            <p class="text-xl leading-5">
                                <a href="/startup/{{ $post->slug }}">{{$post->title}} </a>
                            </p><br>
                           
                                <svg width="25" height="25" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1664 596q0-81-21.5-143t-55-98.5-81.5-59.5-94-31-98-8-112 25.5-110.5 64-86.5 72-60 61.5q-18 22-49 22t-49-22q-24-28-60-61.5t-86.5-72-110.5-64-112-25.5-98 8-94 31-81.5 59.5-55 98.5-21.5 143q0 168 187 355l581 560 580-559q188-188 188-356zm128 0q0 221-229 450l-623 600q-18 18-44 18t-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344z">
                                    </path>
                                </svg>
                            </button>
                            
                        </div>
                        <p class="flex flex-col text-sm leading-5">
                            {{$post->description}}
                         </p><br>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-xs my-2 md:m-0">
                            
                            {{ $post->category }}
                            
                        </div>
                        @if (isset(Auth::user()->id) && Auth::user()->id ==
                        $post->user_id)
                            <span class="float-right">
                                <a href="/startup/{{ $post->slug }}/edit"
                                    class="text-gray-700 ml-8 italic hover:text-gray-900
                                    pb-1 border-b-2"
                                    >Edit
                                
                                </a>
                            </span>

                            <span class="float-right">
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

                                    
                    

                           
                     
                        
            @endforeach
            
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
                    <ul class="-mx-4">
                        <li class="flex items-center"><img
                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Alex John</a><span
                                    class="text-gray-700 text-sm font-light">Created 23 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img
                                src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Jane Doe</a><span
                                    class="text-gray-700 text-sm font-light">Created 52 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img
                                src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Lisa Way</a><span
                                    class="text-gray-700 text-sm font-light">Created 73 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img
                                src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Steve Matt</a><span
                                    class="text-gray-700 text-sm font-light">Created 245 Posts</span></p>
                        </li>
                        <li class="flex items-center mt-6"><img
                                src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                            <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Khatab
                                    Wedaa</a><span class="text-gray-700 text-sm font-light">Created 332 Posts</span>
                            </p>
                        </li>
                    </ul>
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