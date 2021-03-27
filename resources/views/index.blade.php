@extends('layouts.app')

@section('content')
    <div class="">
            <div class="bg-gray-50  flex flex-row ">
                <div class="lg:2/6 xl:w-2/4 lg:ml-16 text-left mb-8 px-24 py-12">
                  <div class="text-6xl font-semibold text-gray-900 leading-none">Looking for <span class="text-indigo-500">startups</span> to invest in?</div>
                  <div class="mt-14 text-xl font-light text-true-gray-500 antialiased">Our goal is to create a seamless connection between StartUps and Investors, by showcasing your startup ideas to a large audience of investors</div>
                   <!---- <p class="mt-4 text-4xl font-semibold text-true-gray-500 antialiased">Do you have a start-up to showcase?</p> ----->
                  <button class="mt-12  px-8 py-4 rounded-lg tracking-wide border border-indigo-500 bg-indigo-500 hover:bg-white hover:text-indigo-700 text-white text-base font-semibold outline-none focus:outline-none hover:shadow-sm">
                    Showcase your Startup
                  </button>
                  <button class="mt-12 ml-8 px-8 py-3.5 rounded-lg tracking-wide bg-white border border-indigo-700 hover:bg-indigo-700 hover:text-white text-indigo-700 text-lg font-bold outline-none focus:outline-none hover:shadow-sm">
                      Investors
                  </button>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                  <img class="object-cover object-center rounded" alt="hero" src="./svg/example-scene-2.svg">
                </div>
            </div>
            <!----------
            <div class="px-6 pt-28 py-8">
                <div class="flex justify-between container mx-auto">
                    <div class="w-full lg:w-8/12">
                        <div class="flex items-center justify-between">
                            <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Today</h1>
                            <div>
                                <select class="p-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option>Latest</option>
                                    <option>Last Week</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-6 grid grid-cols-3 gap-4">
                            <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                                <div class="flex justify-between items-center"><span class="font-light text-gray-600">Jun 1,
                                        2020</span><a href="#"
                                        class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                                </div>
                                <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">Build
                                        Your New Idea with Laravel Freamwork.</a>
                                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                        reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                                </div>
                                <div class="flex justify-between items-center mt-4"><a href="#"
                                        class="text-indigo-500 hover:underline">Read more</a>
                                    <div><a href="#" class="flex items-center"><img
                                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                                alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                            <h1 class="text-gray-700 font-bold hover:underline"></h1>
                                        </a></div>
                                </div>
                            </div>
                        
                        <div class="">
                            <div class="h-full bg-white bg-opacity-75 px-8 pt-4 pb-24 rounded-lg overflow-hidden text-center relative">
                                <div class="flex justify-between items-center"><span class="font-light text-gray-600">
                                    </span><a href="#"
                                    class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                            </div>
                                <h2 class="mt-8 tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Ennui Snackwave Thundercats</h1>
                                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                <a class="text-indigo-500 inline-flex items-center">Learn More
                                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                  </svg>
                                </a>
                                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                      </svg>1.2K
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                      </svg>6
                                    </span>
                                  </div>
                                </div>
                         </div>
                        
                         <div class="">
                            <div class="h-full bg-white bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Ennui Snackwave Thundercats</h1>
                                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                <a class="text-indigo-500 inline-flex items-center">Learn More
                                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                  </svg>
                                </a>
                                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                      </svg>1.2K
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                      </svg>6
                                    </span>
                                  </div>
                                </div>
                         </div>
                         </div>
                        
                        <div class="mt-8">
                            <div class="flex">
                                <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-500 font-medium rounded-md cursor-not-allowed">
                                    previous
                                </a>
                            
                                <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-indigo-500 hover:text-white rounded-md">
                                    1
                                </a>
                            
                                <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-indigo-500 hover:text-white rounded-md">
                                    2
                                </a>
                            
                                <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-indigo-500 hover:text-white rounded-md">
                                    3
                                </a>
                            
                                <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-indigo-500 hover:text-white rounded-md">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="-mx-8 w-4/12 hidden lg:block">
                        <div class="px-8">
                            <h1 class="mb-4 text-xl font-bold text-gray-700">Authors</h1>
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
                                <ul>

                                    <li><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                            AWS</a></li>
                                    <li class="mt-2"><a href="#"
                                            class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                            Laravel</a></li>
                                    <li class="mt-2"><a href="#"
                                            class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">- Vue</a>
                                    </li>
                                    <li class="mt-2"><a href="#"
                                            class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                            Design</a></li>
                                    <li class="flex items-center mt-2"><a href="#"
                                            class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                            Django</a></li>
                                    <li class="flex items-center mt-2"><a href="#"
                                            class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">- PHP</a>
                                    </li>
                                </ul>
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


            ------>
            

            <div class="bg-white dark:bg-gray-800 ">
                <div class="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                    <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl mt-24">
                        <span class="block">
                            Ready to showcase your Startup?
                        </span>
                        <span class="block text-indigo-500">
                            It&#x27;s today or never.
                        </span>
                    </h2>
                    <p class="text-xl mt-4 max-w-md mx-auto text-gray-400">
                        It can be really hard and stressful getting people to invest in your Ideas, <br>that why we are here to help you get started
                    </p>
                    <div class="lg:mt-0 lg:flex-shrink-0">
                        <div class="mt-12 inline-flex rounded-md shadow">
                            <a href="{{ route('register') }}"> <button type="button" class="py-4 px-6  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Get started
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
            


            

@endsection