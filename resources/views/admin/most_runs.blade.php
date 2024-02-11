@extends('admin.admin')


<div class="bg-sobuj p-7 h-[100vh] lg:w-[71%] w-[100%] absolute lg:left-[27%] lg:top-20 top-12">
    @if(session()->has('message'))
    <div class="text-white text-md">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl">BPL / <span class="{{Request::is('admin/most/runs') ? 'text-green-600':'';}}">Most Runs</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('admin.create')}}">Create Runs</a>
    </div>

    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5 border border-black">
    <table class="w-full text-sm text-left rtl:text-right text-white">
        <thead class="text-xs text-white uppercase bg-black">
            <tr>
                <th scope="col" class="pl-3 py-3">
                    Pos
                </th>
                <th scope="col" class="py-3">
                    Player Name
                </th>
                <th scope="col" class="py-3">
                    Team
                </th>
                <th scope="col" class="py-3">
                    Match
                </th>
                <th scope="col" class="py-3">
                    Image
                </th>
                <th scope="col" class="py-3">
                    Inns
                </th>
                <th scope="col" class="py-3">
                    Run
                </th>
                <th scope="col" class="py-3">
                    St
                </th>
               
                <th scope="col" class="py-3">
                    Avg
                </th>

                <th scope="col" class="py-3">
                    Height
                </th>

                <th scope="col" class="py-3">
                    Fifty
                </th>

                <th scope="col" class="py-3">
                    Hundred
                </th>

                <th scope="col" class="py-3">
                    Four
                </th>

                <th scope="col" class="py-3">
                    Six
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
            @foreach ($mostRuns as $mostRun)
            <tr class="odd:bg-sobuj even:bg-black">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$mostRun->pos}}
                </th>
                <td class="">
                    {{$mostRun->player_name}}
                </td>
                <td class="">
                    {{$mostRun->team}}
                </td>
                <td class="">
                    {{$mostRun->match}}
                </td>
                <td class="">
                    <img src="{{asset('/player/image/'.$mostRun->image)}}" alt="" width="20" height="20">
                </td>
                <td class="">
                    {{$mostRun->inns}}
                </td>
                <td class="">
                    {{$mostRun->runs}}
                </td>
                <td class="">
                    {{$mostRun->sr}}
                </td>
                <td class="">
                    {{$mostRun->avg}}
                </td>
                <td class="">
                    {{$mostRun->hight}}
                </td>
                <td class="">
                    {{$mostRun->fifty}}
                </td>
                <td class="">
                    {{$mostRun->hundred}}
                </td>
                <td class="">
                    {{$mostRun->four}}
                </td>
                <td class="">
                    {{$mostRun->six}}
                </td>

                <td class="">
                    <a href="{{url('most/run/edit/'.$mostRun->id)}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                <td class="">
                    <a href="{{url('most/run/delete/'.$mostRun->id)}}" class="font-medium text-red-600 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>