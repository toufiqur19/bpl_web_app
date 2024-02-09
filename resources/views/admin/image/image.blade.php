@extends('admin.admin')


<div class="bg-sobuj p-7 h-[100vh] lg:w-[71%] w-[100%] absolute lg:left-[27%] lg:top-20 top-12">
    @if(session()->has('message'))
    <div class="text-white text-md">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl">BPL / <span class="{{Request::is('admin/image') ? 'text-green-600':'';}}">Image</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('image.create')}}">Create Image</a>
    </div>

    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5 border border-black">
    <table class="w-full text-sm text-left rtl:text-right text-white">
        <thead class="text-xs text-white uppercase bg-black">
            <tr>
                <th scope="col" class="pl-3 py-3">
                    Schedule Id
                </th>
                <th scope="col" class="pl-3 py-3">
                    Name
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
            @foreach ($images as $image)
            <tr class="odd:bg-sobuj even:bg-black">
                <th scope="row" class="pl-4 py-4 font-medium text-white whitespace-nowrap">
                    {{$image->schedule_id}}
                </th>
                <th scope="row" class="py-4 font-medium text-white whitespace-nowrap">
                    {{$image->name}}
                </th>
                <td class="">
                    <img src="{{asset($image->image)}}" alt="" width="40" height="40">
                </td>
                <td class="text-blue-600">
                    <a href="{{url('imgedit/'.$image->id)}}">Edit</a>
                </td>
                <td class="text-red-600">
                    <a href="{{url('destroy/'.$image->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mt-5">
    {{$images->links('vendor.pagination.tailwind_dark')}}
</div>
</div>