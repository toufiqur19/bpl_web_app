@extends('admin.admin')


<div class="bg-sobuj p-7 h-[100vh] w-[71%] absolute lg:left-[27%] lg:top-20 top-12">
    @if(session()->has('message'))
    <div class="text-white text-md">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl"><span class="{{Request::is('admin/schedule') ? 'text-green-600':'';}}">Match Schedule</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('schedule.create')}}">Create Schedule</a>
    </div>
</div>