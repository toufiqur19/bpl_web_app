@extends('admin.admin')
<div class="bg-sobuj p-7 h-[100vh] w-[71%] absolute lg:left-[27%] lg:top-20 top-12">
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl">Point Table / <span class="{{Request::is('admin/point/table/create') ? 'text-green-600':'';}}">Create</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('point.table')}}">Back</a>
    </div>

    <div class="mt-10">
        <form action="{{route('point.table.store')}}" method="POST" class="text-white space-y-2" enctype="multipart/form-data">
            @csrf

           <div class="grid grid-cols-2 space-x-5">
               <div class="space-y-2">
                <label for="">Team No</label>
               <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="team_no" value="{{old('team_no')}}">
               @if($errors->has('team_no'))
               <div class="text-red-600 text-sm">{{ $errors->first('team_no') }}</div>
               @endif
            </div>
            <div class="space-y-2">
                <label for="">Team Name</label>
                <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="team_name" value="{{old('team_name')}}">
                @if($errors->has('team_name'))
               <div class="text-red-600 text-sm">{{ $errors->first('team_name') }}</div>
               @endif
            </div>
           </div>

            <div class="grid grid-cols-2 space-x-5">
                <div class="space-y-2">
                    <label for="">Match</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="match" value="{{old('match')}}">
                    @if($errors->has('match'))
                    <div class="text-red-600 text-sm">{{ $errors->first('match') }}</div>
                    @endif
                </div>
                <div class="space-y-2">
                    <label for="">Win</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="win" value="{{old('win')}}">
                    @if($errors->has('win'))
                    <div class="text-red-600 text-sm">{{ $errors->first('win') }}</div>
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                <div class="space-y-2">
                    <label for="">Los</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="los" value="{{old('los')}}">
                    @if($errors->has('los'))
                    <div class="text-red-600 text-sm">{{ $errors->first('los') }}</div>
                    @endif
                </div>
                <div class="space-y-2">
                    <label for="">Nrr</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="nrr" value="{{old('nrr')}}">
                    @if($errors->has('nrr'))
                    <div class="text-red-600 text-sm">{{ $errors->first('nrr') }}</div>
                    @endif
                </div>
            </div>

            <div class="space-x-5">
                <div class="space-y-2">
                    <label for="">Point</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="point" value="{{old('point')}}">
                    @if($errors->has('point'))
                    <div class="text-red-600 text-sm">{{ $errors->first('point') }}</div>
                    @endif
                </div>
            </div>

            <input type="file" name="team_logo">
            <div class="pt-3">
                <button type="submit" name="submit" class="text-white bg-black py-2 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold">Submit</button>
            </div>
        </form>
    </div>
</div>