@extends('admin.admin')


<div class="bg-sobuj p-7 h-[100vh] lg:w-[71%] w-[100%] absolute lg:left-[27%] lg:top-20 top-12">
    @if(session()->has('message'))
    <div class="text-white text-md">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl">BPL / <span class="{{Request::is('admin/point/table') ? 'text-green-600':'';}}">Point Table</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('point.table.create')}}">Create Point</a>
    </div>

    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5 border border-black">
    <table class="w-full text-sm text-left rtl:text-right text-white">
        <thead class="text-xs text-white uppercase bg-black">
            <tr>
                <th scope="col" class="pl-3 py-3>
                    POS
                </th>
                <th scope="col" class="py-3">
                    Team
                </th>
                <th scope="col" class="py-3">
                    match
                </th>
                <th scope="col" class="py-3">
                    win
                </th>
                <th scope="col" class="py-3">
                    los
                </th>
                <th scope="col" class="py-3">
                    point
                </th>
                <th scope="col" class="py-3">
                   nrr
                </th>
                <th scope="col" class="py-3">
                    Image
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
            @foreach ($pointTables as $pointTable)
            <tr class="odd:bg-sobuj even:bg-black">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$pointTable->team_no}}
                </th>
                <td class="">
                    {{$pointTable->team_name}}
                </td>
                <td class="">
                    <img src="{{asset('team_logo/'.$pointTable->team_logo)}}" alt="" width="50" height="50">
                </td>
                <td class="">
                    {{$pointTable->match}}
                </td>
                <td class="">
                    {{$pointTable->win}}
                </td>
                <td class="">
                    {{$pointTable->los}}
                </td>
                <td class="">
                    {{$pointTable->nrr}}
                </td>
                <td class="">
                    {{$pointTable->point}}
                </td>
                
                <td class="">
                    <a href="{{url('pointedit/'.$pointTable->id)}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                <td class="">
                    <a href="{{url('point/delete/'.$pointTable->id)}}" class="font-medium text-red-600 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>