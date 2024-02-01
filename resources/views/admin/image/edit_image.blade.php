@extends('admin.admin')
<div class="bg-sobuj p-7 h-[100vh] w-[71%] absolute lg:left-[27%] lg:top-20 top-12">
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl">Create / <span class="{{Request::is('admin/image/create') ? 'text-green-600':'';}}">Image</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('admin.image')}}">Back</a>
    </div>

    <div class="mt-10">
        <form action="/image/{{$imgedit->id}}/update" method="POST" class="text-white space-y-2" enctype="multipart/form-data">
            @csrf

            <div class="grid space-y-6 ">
                <div class="grid">
                    <label>Name</label>
                    <input class="mt-2 outline-none bg-black py-1.5 rounded-md pl-3" type="text" name="name" value="{{$imgedit->name}}">
                </div>
                <input type="file" name="image">
            </div>
            <div class="pt-2">
                <input class="text-white bg-black py-2 px-5 cursor-pointer rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" type="submit">
            </div>
        </form>
    </div>
</div>