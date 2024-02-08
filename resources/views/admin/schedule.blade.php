@extends('admin.admin')


<div class="bg-sobuj p-7 h-[100vh] lg:w-[71%] w-[100%] absolute lg:left-[27%] lg:top-20 top-12">
    @if(session()->has('message'))
    <div class="text-white text-md">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl"><span class="{{Request::is('admin/schedule') ? 'text-green-600':'';}}">Match Schedule</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('schedule.create')}}">Create Schedule</a>
    </div>

    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5 border border-black">
    <table class="w-full text-sm text-left rtl:text-right text-white">
        <thead class="text-xs text-white uppercase bg-black">
            <tr>
                <th scope="col" class="pl-3 py-3">
                    Match No
                </th>
                <th scope="col" class="py-3">
                    Stadium
                </th>
                <th scope="col" class="py-3">
                    Image
                </th>
                <th scope="col" class="py-3">
                    Division
                </th>
                <th scope="col" class="py-3">
                    Team 1
                </th>
                <th scope="col" class="py-3">
                    Team 2
                </th>
                <th scope="col" class="py-3">
                    Date
                </th>
                <th scope="col" class="py-3">
                    Time
                </th>
               
                <th scope="col" class="py-3">
                    Edit
                </th>
                <th scope="col" class="py-3">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
            <tr class="odd:bg-sobuj even:bg-black">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$schedule->match_no}}
                </th>
                <td class="">
                    {{$schedule->stadium}}
                </td>
                <td class="">
                    <img src="{{asset($schedule->image1)}}" alt="" width="50" height="50">
                </td>
                <td class="">
                    {{$schedule->division}}
                </td>
                <td class="">
                    {{$schedule->team1}}
                </td>
                <td class="">
                    {{$schedule->team2}}
                </td>
                <td class="">
                    {{$schedule->date}}
                </td>
                <td class="">
                    {{$schedule->time}}
                </td>
                
                <td class="">
                    <a href="{{url('edit/'.$schedule->id)}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                <td class="">
                    <a href="{{url('delete/'.$schedule->id)}}" class="font-medium text-red-600 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mt-5">
    {{$schedules->links('vendor.pagination.tailwind_dark')}}
</div>
</div>