<x-app-layout>
    <div class="px-10">

        @foreach ($scheduls as $schedul)
            <h1>{{$schedul->team2}}</h1>
            <h1>{{$schedul->images->name}}</h1>
            <img src="{{asset($schedul->images->image)}}" alt="">
        @endforeach
    </div>
</x-app-layout>