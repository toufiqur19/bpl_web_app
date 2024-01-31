<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-black">
            <header class="lg:px-10 px-5 py-1.5 bg-sobuj lg:fixed w-full">
                <div id="header-left" class=" flex justify-between">
                    <div class="text-white font-semibold flex lg:space-x-24 space-x-4">
                        <a class="mt-1" href="{{route('admin')}}"><span class="lg:text-2xl text-xl text-red-600 font-bold">BPL <span class="text-green-600">2024</span></span></a>
                        <div id="menu_bar"><i class="fa-solid fa-bars bg-black lg:p-2.5 p-2 mt-1 rounded-full cursor-pointer"></i></div>
                    </div>

                   {{-- dropdown --}}
                    <div class="flex lg:space-x-10 space-x-3 mt-1 lg:pr-0">
                        <div>
                            <input class="py-1 pl-2 text-white outline-none bg-black w-full lg:block hidden rounded-md" type="text" name="search" placeholder="search">
                        </div>
                        {{-- Notification --}}
                    <div class="">
                        <ul>
                            <div>
                                <button type="button" class="inline-flex w-full justify-center gap-x-1.5 text-white text-md font-semibold" id="Notification_btn" >
                                    <i class="fa-solid fa-bell bg-black lg:p-2.5 p-2 rounded-full"></i><span class="mt-1 lg:block hidden">Notification</span>
                                  <svg class="-mr-1 h-5 w-5 mt-2" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                  </svg>
                                </button>
                              </div>
                            <ul id="Notification_item" class="text-white hidden absolute grid bg-sobuj w-40 mt-1.5 rounded-b-md">
                                <a class="mx-3 mt-2 hover:bg-black p-2" href="">link 1</a>
                                <a class="mx-3  hover:bg-black p-2" href="">link 1</a>
                                <a class="mx-3 mb-5 hover:bg-black p-2" href="">link 1</a>
                            </ul>
                        </ul>
                    </div>

                    {{-- profile --}}
                    <div>
                        <ul>
                            <div>
                                <button type="button" class="inline-flex w-full justify-center mr-4 lg:mr-0 gap-x-1.5 text-white text-md font-semibold" id="profile_btn" >
                                  <span class="mt-1">{{ Auth::user()->name }}</span>
                                  <svg class="-mr-1 h-5 w-5 mt-2" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                  </svg>
                                </button>
                              </div>
                              <ul id="profile_item" class="text-white absolute grid bg-sobuj hidden w-[6.5rem] mt-3 rounded-b-md">
                                <a class="mx-3 mt-4 hover:bg-black p-2" href="">Profile</a>
                                <a class="mx-3 mb-4 hover:bg-black p-2" href="">Log Out</a>
                            </ul>
                        </ul>
                    </div>
                    </div>
                </div>
            </header>

            <aside id="side_item" class="text-white lg:fixed lg:mt-[3.1rem] bg-sobuj lg:w-1/4 w-1/1 h-[100vh] font-semibold hidden lg:block">
                <nav>
                    <ul class="pt-5 space-y-2">
                        <li class="hover:bg-gray-800 pl-8 py-1 cursor-pointer {{Request::is('admin/dashboard') ? 'bg-gray-800':'';}}"><a href="{{ route('adminDashboard')}}"><i class="fa-solid fa-gauge bg-black lg:p-2.5 p-2 mt-1 rounded-full cursor-pointer mr-2"></i><span>Dashboard</span></a></li>
                        <li class="hover:bg-gray-800 pl-8 py-1 cursor-pointer {{Request::is('admin/schedule') ? 'active:bg-green-400':'';}}"><a href="#"><i class="fa-solid fa-calendar-days bg-black lg:p-2.5 p-2 mt-1 rounded-full cursor-pointer mr-2"></i><span>Schedule</span></a></li>
                        <li class="hover:bg-gray-800 pl-8 py-1 cursor-pointer {{Request::is('admin/point/table') ? 'active:bg-green-400':'';}}"><a href="#"><i class="fa-solid fa-table bg-black lg:p-2.5 p-2 mt-1 rounded-full cursor-pointer mr-2"></i><span>Points Table</span></a></li>
                        {{-- dropdown --}}
                        <ul>
                            <div class="hover:bg-gray-800 pl-8 py-1 cursor-pointer hover:border-l-3 {{Request::is('admin/most/runs') ? 'active:bg-green-400':'';}}">
                                <button type="button" class="inline-flex text-white text-md font-semibold" id="dropdown_btn" >
                                  <a class="mt-1 flex" href=""><img class="w-9 h-9 bg-black mt-1 rounded-full cursor-pointer mr-2" src="{{asset('assets/img/ccc.png')}}" alt=""><span class="mt-2 mr-2">Most Runs</span></a>
                                  <svg class="-mr-1 h-5 w-5 mt-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                  </svg>
                                </button>
                              </div>
                            {{-- <ul id="dropdown_item" class="text-white hidden absolute grid bg-sobuj w-40 mt-3 rounded-b-md">
                                <a class="mx-3 mt-2 hover:bg-black p-2" href="">link 1</a>
                                <a class="mx-3  hover:bg-black p-2" href="">link 1</a>
                                <a class="mx-3 mb-5 hover:bg-black p-2" href="">link 1</a>
                            </ul> --}}
                        </ul>
                        <li class="hover:bg-gray-800 pl-8 py-1 cursor-pointer hover:border-l-3 {{Request::is('admin/most/wicket') ? 'active:bg-green-400':'';}}"><a class="flex" href="#">
                            <img class="w-9 h-9 bg-black mt-1 rounded-full cursor-pointer mr-2" src="{{asset('assets/img/cc.png')}}" alt="">
                            <span class="mt-2">Most Wickets</span></a>
                        </li>
                        <li class="hover:bg-gray-800 pl-8 py-1 cursor-pointer hover:border-l-3 {{Request::is('admin/news') ? 'active:bg-green-400':'';}}"><a href="#"><i class="fa-solid fa-newspaper bg-black lg:p-2.5 p-2 mt-1 rounded-full cursor-pointer mr-2"></i><span>News</span></a></li>
                    </ul>
                </nav>
            </aside>
            
        </div>
        <script src="{{asset('./admin.js')}}"></script>
    </body>
</html>

