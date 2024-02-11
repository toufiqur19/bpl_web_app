@extends('admin.admin')


<div class="bg-sobuj p-7 lg:w-[71%] h-[100vh] w-[100%] absolute lg:left-[27%] lg:top-20 top-12">
    @if(session()->has('message'))
    <div class="text-white text-md">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl">BPL / <span class="{{Request::is('admin/most/wicket') ? 'text-green-600':'';}}">Most Wicket</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('admin.wicket.create')}}">Create Wicket</a>
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
                    Team Name
                </th>
                <th scope="col" class="py-3">
                    Match No
                </th>
                <th scope="col" class="py-3">
                    Image
                </th>
                <th scope="col" class="py-3">
                    Inns
                </th>
                <th scope="col" class="py-3">
                    Over
                </th>
               
                <th scope="col" class="py-3">
                    Wicket
                </th>

                <th scope="col" class="py-3">
                    Avg
                </th>

                <th scope="col" class="py-3">
                    Eco
                </th>

                <th scope="col" class="py-3">
                    Four W
                </th>

                <th scope="col" class="py-3">
                    Five W
                </th>
                <th scope="col" class="py-3">
                    BBI
                </th>
                <th scope="col" class="py-3">
                    Runs
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
            @foreach ($mostWickets as $mostWicket)
            <tr class="odd:bg-sobuj even:bg-black">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$mostWicket->pos}}
                </th>
                <td class="">
                    {{$mostWicket->player_name}}
                </td>
                <td class="">
                    {{$mostWicket->team_name}}
                </td>
                <td class="">
                    {{$mostWicket->match_no}}
                </td>
                <td class="">
                    <img src="{{asset('/wicket/image/'.$mostWicket->image)}}" alt="" width="20" height="20">
                </td>
                <td class="">
                    {{$mostWicket->inns}}
                </td>
                <td class="">
                    {{$mostWicket->over}}
                </td>
                <td class="">
                    {{$mostWicket->wicket}}
                </td>
                <td class="">
                    {{$mostWicket->avg}}
                </td>
                <td class="">
                    {{$mostWicket->eco}}
                </td>
                <td class="">
                    {{$mostWicket->four_w}}
                </td>
                <td class="">
                    {{$mostWicket->five_w}}
                </td>
                <td class="">
                    {{$mostWicket->bbi}}
                </td>
                <td class="">
                    {{$mostWicket->runs}}
                </td>

                <td class="">
                    <a href="{{url('most/wicket/edit/'.$mostWicket->id)}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                <td class="">
                    <a href="{{url('most/wicket/delete/'.$mostWicket->id)}}" class="font-medium text-red-600 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>