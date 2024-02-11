@extends('admin.admin')
<div class="bg-sobuj p-7 h-[150vh] w-[71%] absolute lg:left-[27%] lg:top-20 top-12">
    <div class="flex justify-between">
        <h1 class="text-red-600 font-semibold text-xl">Most Wicket / <span class="text-green-600">Edit</span></h1>
        <a class="text-white bg-black py-1 px-3 rounded-md text-md hover:bg-green-400 duration-200 ease-in hover:text-sobuj font-semibold" href="{{route('most.wicket')}}">Back</a>
    </div>

    <div class="mt-10">
        <form action="{{url('update/'.$playerEdits->id)}}" method="POST" class="text-white space-y-2" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="grid grid-cols-2 space-x-5">
               <div class="space-y-2">
                <label for="">Pos</label>
               <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="pos" value="{{old('pos',$playerEdits->pos)}}">
               @if($errors->has('pos'))
               <div class="text-red-600 text-sm">{{ $errors->first('pos') }}</div>
               @endif
            </div>
            <div class="space-y-2">
                <label for="">Player Name</label>
                <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="player_name" value="{{old('player_name',$playerEdits->player_name)}}">
                @if($errors->has('player_name'))
               <div class="text-red-600 text-sm">{{ $errors->first('player_name') }}</div>
               @endif
            </div>
           </div>

            <div class="grid grid-cols-2 space-x-5">
                <div class="space-y-2">
                    <label for="">Team Name</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="team_name" value="{{old('team_name',$playerEdits->team_name)}}">
                    @if($errors->has('team_name'))
                    <div class="text-red-600 text-sm">{{ $errors->first('team_name') }}</div>
                    @endif
                </div>
                <div class="space-y-2">
                    <label for="">Match No</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="match_no" value="{{old('match_no',$playerEdits->match_no)}}">
                    @if($errors->has('match_no'))
                    <div class="text-red-600 text-sm">{{ $errors->first('match_no') }}</div>
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                <div class="space-y-2">
                    <label for="">Inns</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="inns" value="{{old('inns',$playerEdits->inns)}}">
                    @if($errors->has('inns'))
                    <div class="text-red-600 text-sm">{{ $errors->first('inns') }}</div>
                    @endif
                </div>
                <div class="space-y-2">
                    <label for="">Over</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="over" value="{{old('over',$playerEdits->over)}}">
                    @if($errors->has('over'))
                    <div class="text-red-600 text-sm">{{ $errors->first('over') }}</div>
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                    <div class="space-y-2">
                        <label for="">Sr</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="wicket" value="{{old('wicket',$playerEdits->wicket)}}">
                        @if($errors->has('wicket'))
                        <div class="text-red-600 text-sm">{{ $errors->first('wicket') }}</div>
                        @endif
                    </div>
                    <div class="space-y-2">
                        <label for="">Avg</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="avg" value="{{old('avg',$playerEdits->avg)}}">
                        @if($errors->has('avg'))
                        <div class="text-red-600 text-sm">{{ $errors->first('avg') }}</div>
                        @endif
                    </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                    <div class="space-y-2">
                        <label for="">Eco</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="eco" value="{{old('eco',$playerEdits->eco)}}">
                        @if($errors->has('eco'))
                        <div class="text-red-600 text-sm">{{ $errors->first('eco') }}</div>
                        @endif
                    </div>
                    <div class="space-y-2">
                        <label for="">Four_w</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="four_w" value="{{old('four_w',$playerEdits->four_w)}}">
                        @if($errors->has('four_w'))
                        <div class="text-red-600 text-sm">{{ $errors->first('four_w') }}</div>
                        @endif
                    </div>
            </div>

            <div class="grid grid-cols-2 space-x-5">
                    <div class="space-y-2">
                        <label for="">Five_w</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="five_w" value="{{old('five_w',$playerEdits->five_w)}}">
                        @if($errors->has('five_w'))
                        <div class="text-red-600 text-sm">{{ $errors->first('five_w') }}</div>
                        @endif
                    </div>
                    <div class="space-y-2">
                        <label for="">BBI</label>
                        <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="bbi" value="{{old('bbi',$playerEdits->bbi)}}">
                        @if($errors->has('bbi'))
                        <div class="text-red-600 text-sm">{{ $errors->first('bbi') }}</div>
                        @endif
                    </div>
            </div>

            <div class="space-x-5">
                <div class="space-y-2 pb-5">
                    <label for="">Runs</label>
                    <input class="outline-none rounded-md py-1.5 pl-2 bg-black w-full" type="text" name="runs" value="{{old('runs',$playerEdits->runs)}}">
                    @if($errors->has('runs'))
                    <div class="text-red-600 text-sm">{{ $errors->first('runs') }}</div>
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