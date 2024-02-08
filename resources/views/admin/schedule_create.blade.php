@extends('admin.admin')
<div class="bg-sobuj p-7 h-[100vh] w-[71%] absolute lg:left-[27%] lg:top-20 top-12">
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl">Match Schedule / <span class="{{Request::is('admin/schedule/create') ? 'text-green-600':'';}}">Create</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('admin.schedule')}}">Back</a>
    </div>

    <div class="mt-10">
        <form action="{{route('schedule.store')}}" method="POST" class="text-white space-y-2" enctype="multipart/form-data">
            @csrf

           <div class="grid grid-cols-2 space-x-5">
               <div class="space-y-2">
                <label for="">Match No</label>
               <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="match_no" value="{{old('match_no')}}">
               @if($errors->has('match_no'))
               <div class="text-red-600 text-sm">{{ $errors->first('match_no') }}</div>
               @endif
            </div>
            <div class="space-y-2">
                <label for="">Stadium Name</label>
                <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="stadium" value="{{old('stadium')}}">
                @if($errors->has('stadium'))
               <div class="text-red-600 text-sm">{{ $errors->first('stadium') }}</div>
               @endif
            </div>
           </div>

            <div class="grid grid-cols-2 space-x-5">
                <div class="space-y-2">
                    <label for="">Division Name</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="division" value="{{old('division')}}">
                    @if($errors->has('division'))
                    <div class="text-red-600 text-sm">{{ $errors->first('division') }}</div>
                    @endif
                </div>
                <div class="space-y-2">
                    <label for="">Team Name 1</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="team1" value="{{old('team1')}}">
                    @if($errors->has('team1'))
                    <div class="text-red-600 text-sm">{{ $errors->first('team1') }}</div>
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                <div class="space-y-2">
                    <label for="">Team Name 2</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="team2" value="{{old('team2')}}">
                    @if($errors->has('team2'))
                    <div class="text-red-600 text-sm">{{ $errors->first('team2') }}</div>
                    @endif
                </div>
                <div class="space-y-2">
                    <label for="">Date</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="date" value="{{old('date')}}">
                    @if($errors->has('date'))
                    <div class="text-red-600 text-sm">{{ $errors->first('date') }}</div>
                    @endif
                </div>
            </div>

            <div class="space-x-5">
                <div class="space-y-2">
                    <label for="">Time</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="time" value="{{old('time')}}">
                    @if($errors->has('time'))
                    <div class="text-red-600 text-sm">{{ $errors->first('time') }}</div>
                    @endif
                </div>
            </div>

            <input type="file" name="image1">
            <div class="pt-3">
                <button type="submit" name="submit" class="text-white bg-black py-2 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold">Submit</button>
            </div>
        </form>
    </div>
</div>