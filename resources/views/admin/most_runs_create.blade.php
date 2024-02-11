@extends('admin.admin')
<div class="bg-sobuj p-7 h-[150vh] w-[71%] absolute lg:left-[27%] lg:top-20 top-12">
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl">Most Runs / <span class="{{Request::is('admin/most/runs/create') ? 'text-green-600':'';}}">Create</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('most.runs')}}">Back</a>
    </div>

    <div class="mt-10">
        <form action="{{route('most.runs.store')}}" method="POST" class="text-white space-y-2" enctype="multipart/form-data">
            @csrf

           <div class="grid grid-cols-2 space-x-5">
               <div class="space-y-2">
                <label for="">Pos</label>
               <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="pos" value="{{old('pos')}}">
               @if($errors->has('pos'))
               <div class="text-red-600 text-sm">{{ $errors->first('pos') }}</div>
               @endif
            </div>
            <div class="space-y-2">
                <label for="">Player Name</label>
                <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="player_name" value="{{old('player_name')}}">
                @if($errors->has('player_name'))
               <div class="text-red-600 text-sm">{{ $errors->first('player_name') }}</div>
               @endif
            </div>
           </div>

            <div class="grid grid-cols-2 space-x-5">
                <div class="space-y-2">
                    <label for="">Team</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="team" value="{{old('team')}}">
                    @if($errors->has('team'))
                    <div class="text-red-600 text-sm">{{ $errors->first('team') }}</div>
                    @endif
                </div>
                <div class="space-y-2">
                    <label for="">Match</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="match" value="{{old('match')}}">
                    @if($errors->has('match'))
                    <div class="text-red-600 text-sm">{{ $errors->first('match') }}</div>
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                <div class="space-y-2">
                    <label for="">Inns</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="inns" value="{{old('inns')}}">
                    @if($errors->has('inns'))
                    <div class="text-red-600 text-sm">{{ $errors->first('inns') }}</div>
                    @endif
                </div>
                <div class="space-y-2">
                    <label for="">Runs</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="runs" value="{{old('runs')}}">
                    @if($errors->has('runs'))
                    <div class="text-red-600 text-sm">{{ $errors->first('runs') }}</div>
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                    <div class="space-y-2">
                        <label for="">Sr</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="sr" value="{{old('sr')}}">
                        @if($errors->has('sr'))
                        <div class="text-red-600 text-sm">{{ $errors->first('sr') }}</div>
                        @endif
                    </div>
                    <div class="space-y-2">
                        <label for="">Avg</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="avg" value="{{old('avg')}}">
                        @if($errors->has('avg'))
                        <div class="text-red-600 text-sm">{{ $errors->first('avg') }}</div>
                        @endif
                    </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                    <div class="space-y-2">
                        <label for="">Height</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="hight" value="{{old('hight')}}">
                        @if($errors->has('hight'))
                        <div class="text-red-600 text-sm">{{ $errors->first('hight') }}</div>
                        @endif
                    </div>
                    <div class="space-y-2">
                        <label for="">Fifty</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="fifty" value="{{old('fifty')}}">
                        @if($errors->has('fifty'))
                        <div class="text-red-600 text-sm">{{ $errors->first('fifty') }}</div>
                        @endif
                    </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                    <div class="space-y-2">
                        <label for="">Hundred</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="hundred" value="{{old('hundred')}}">
                        @if($errors->has('hundred'))
                        <div class="text-red-600 text-sm">{{ $errors->first('hundred') }}</div>
                        @endif
                    </div>
                    <div class="space-y-2">
                        <label for="">Four</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="four" value="{{old('four')}}">
                        @if($errors->has('four'))
                        <div class="text-red-600 text-sm">{{ $errors->first('four') }}</div>
                        @endif
                    </div>
            </div>

            <div class="space-x-5">
                <div class="space-y-2 pb-5">
                    <label for="">Six</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="six" value="{{old('six')}}">
                    @if($errors->has('six'))
                    <div class="text-red-600 text-sm">{{ $errors->first('six') }}</div>
                    @endif
                </div>
            </div>

            <input type="file" name="image">
            <div class="pt-3">
                <button type="submit" name="submit" class="text-white bg-black py-2 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold">Submit</button>
            </div>
        </form>
    </div>
</div>