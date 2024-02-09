<header class="bg-gray-200 w-full">
    <nav class=" flex items-center justify-between px-10 h-14 lg:gap-6">
        <a class="font-bold text-2xl whitespace-nowrap text-red-600" href="{{route('home')}}">BPL <span class="text-green-600">2024</span></a>
        <div id="nav_item" class="text-white lg:text-black absolute lg:mt-0 mt-[25rem] hidden lg:block left-0 w-full text-center flex flex-col 
        max-lg:bg-gray-700 lg:text-[17px] text-xl lg:static lg:flex-row lg:justify-between">
            <div class="lg:flex lg:justify-between">
                <ul class="lg:flex-row flex flex-col lg:space-x-4 space-y-3 lg:space-y-0 font-semibold text-[1rem] mt-5 lg:mt-1">
                    <li class="lg:hover:text-gray-700 hover:text-gray-300 {{Request::is('/') ? 'text-green-600':''}}"><a href="{{route('home')}}">Home</a></li>
                    <li class="lg:hover:text-gray-700 hover:text-gray-300 hover:ml-4 duration-300 ease-in-out {{Request::is('home/point-table') ? 'text-green-600':''}}"><a href="{{route('point_table')}}">Points Table</a></li>
                    <li class="lg:hover:text-gray-700 hover:text-gray-300 hover:ml-4 duration-300 ease-in-out {{Request::is('home/schedule') ? 'text-green-600':''}}"><a href="{{route('schedule')}}">Schedule</a></li>
                    <li class="lg:hover:text-gray-700 hover:text-gray-300 hover:ml-4 duration-300 ease-in-out"><a href="">Most Runs</a></li>
                    <li class="lg:hover:text-gray-700 hover:text-gray-300 hover:ml-4 duration-300 ease-in-out"><a href="">Most Wickets</a></li>
                    <li class="lg:hover:text-gray-700 hover:text-gray-300 hover:ml-4 duration-300 ease-in-out"><a href="">News</a></li>
                </ul>
                <div id="header-right" class="">
                    @guest
                    <ul class="lg:flex-row flex flex-col lg:space-x-4 space-y-3 mt-3 lg:mt-0 lg:space-y-0 font-semibold text-[1rem] mb-5 lg:mb-0">
                        <li class="lg:hover:text-gray-700 hover:text-gray-300 hover:ml-4 duration-300 ease-in-out"><a href="{{route('login')}}">Login</a></li>
                        <li class="lg:hover:text-gray-700 hover:text-gray-300 hover:ml-4 duration-300 ease-in-out"><a href="{{route('register')}}">Register</a></li>
                    </ul>
                    @endguest
                </div>
            
        
            @auth
                 <!-- Settings Dropdown -->
                 <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-[1rem] leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-red-600 hover:text-white focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
        
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
        
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
        
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
        
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth
        </div>
        </div>
        <div id="hamberger" class="text-xl lg:hidden">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
   </header>




<script>
    const nav_item = document.getElementById("nav_item");
    const nav_bar = document.getElementById("hamberger");

    nav_bar.addEventListener("click",()=>{
        nav_item.classList.toggle('hidden');
    });
</script>