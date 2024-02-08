<x-app-layout>
    <div class="">

        <header class="w-full h-40 flex justify-center text-center">
            <div class="mt-8 ">
                <a href="">BPL-2024 / </a>
                <a class="{{Request::is('home/schedule')?'text-green-600':''}}" href="">Schedule</a>
                <div>
                    <h1 class="text-2xl font-semibold my-2 text-red-600 font-josefin">Bangladesh Premier League 2024 Schedule</h1>
                    <h3 class="text-md font-semibold text-green-600">19 Jan 2024 - 1 Mar 2024</h3>
                </div>
            </div>
        </header>

        <div class="px-8 p-4 lg:grid lg:grid-cols-2 gap-4 space-y-4 lg:space-y-0 bg-gray-200 mt-5 lg:mt-0">
            @foreach ($schedules as $schedule)
            <div class="p-4 bg-gray-100 rounded-md">
                <div class="lg:flex justify-between mx-5 text-center">
                    <div class="lg:flex lg:text-sm">
                       <div class="lg:flex">
                        <h6>{{$schedule->match_no}}<span> T20 </span></h6>
                        <i class="lg:mt-2 lg:ml-1 hidden lg:block fa-solid fa-circle text-[5px] text-red-600"></i>
                       </div>
                        <p class="lg:ml-1">  {{$schedule->stadium}} 
                            <i class="fa-solid fa-circle text-[5px] lg:text-red-600 text-black lg:pl-0 lg:absolute lg:mt-[.55rem]"></i>
                            <span class="lg:pl-2">{{$schedule->division}}</span></p>
                    </div>
                    <div class="text-sm hidden lg:block">
                        <p>Time</p>
                    </div>
                </div>
    
                <div class="flex justify-between mx-5">
                   <div class="space-y-2 lg:mt-2 mt-5">
                    <div class="flex space-x-2">
                        <img src="{{asset($schedule->image1)}}" alt="" width="20" height="20">
                        <h4>{{$schedule->team1}}</h4>
                    </div>
                    <div class="flex space-x-2">
                        <img src="{{asset($schedule->images->image)}}" alt="" width="20" height="20">
                        <h4>{{$schedule->team2}}</h4>
                    </div>
                   </div>
                   <div class="text-center lg:mt-7 mt-7">
                    <p class="text-sm text-gray-400">{{$schedule->date}}</p>
                    <h6>{{$schedule->time}}</h6>
                   </div>
                </div>
               </div>
            @endforeach
            {{ $schedules->links('vendor.pagination.tailwind_white') }}
        </div>
    </div>
</x-app-layout>