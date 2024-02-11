<x-app-layout>
    <header class="w-full h-40 flex justify-center text-center">
        <div class="mt-8 ">
            <a href="">BPL-2024 / </a>
            <a class="{{Request::is('/home/most-wicket')?'text-green-600':''}}" href="">Most Wicket</a>
            <div>
                <h1 class="text-2xl font-semibold my-2 text-red-600 font-josefin">Bangladesh Premier League 2024</h1>
                <h3 class="text-md font-semibold text-green-600">19 Jan 2024 - 1 Mar 2024</h3>
            </div>
        </div>
    </header>
    <div class="bg-gray-200">
        <div class="px-24 py-10">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full  text-sm text-left rtl:text-right text-black">
                    <thead class="text-sm text-black uppercase bg-gray-300 text-center">
                        <tr>
                            <th scope="col" class="pl-3 py-3">
                                Pos
                            </th>
                            <th scope="col" class="py-3">
                                Player Name
                            </th>
                            <th scope="col" class="py-3">
                                Team_name
                            </th>
                            <th scope="col" class="py-3">
                                Match NO
                            </th>
                            {{-- <th scope="col" class="py-3">
                                Image
                            </th> --}}
                            <th scope="col" class="py-3">
                                Inns
                            </th>
                            <th scope="col" class="py-3">
                                over
                            </th>
                            <th scope="col" class="py-3">
                                wicket
                            </th>
                           
                            <th scope="col" class="py-3">
                                Avg
                            </th>
            
                            <th scope="col" class="py-3">
                                Eco
                            </th>
            
                            <th scope="col" class="py-3">
                                Four w
                            </th>
            
                            <th scope="col" class="py-3">
                                Five w
                            </th>
            
                            <th scope="col" class="py-3">
                                BBI
                            </th>
            
                            <th scope="col" class="py-3">
                                runs
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mostPlayers as $mostPlayer)
                        <tr class="border border-gray-100 font-semibold text-center">
                            <th scope="row" class="py-3 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                {{$mostPlayer->pos}}
                            </th>
                            <td class="">
                                {{$mostPlayer->player_name}}
                            </td>
                            <td class="">
                                {{$mostPlayer->team_name}}
                            </td>
                            <td class="">
                                {{$mostPlayer->match_no}}
                            </td>
                            {{-- <td class="">
                                <img src="{{asset('/player/image/'.$mostPlayer->image)}}" alt="" width="20" height="20">
                            </td> --}}
                            <td class="">
                                {{$mostPlayer->inns}}
                            </td>
                            <td class="">
                                {{$mostPlayer->over}}
                            </td>
                            <td class="">
                                {{$mostPlayer->wicket}}
                            </td>
                            <td class="">
                                {{$mostPlayer->avg}}
                            </td>
                            <td class="">
                                {{$mostPlayer->eco}}
                            </td>
                            <td class="">
                                {{$mostPlayer->four_w}}
                            </td>
                            <td class="">
                                {{$mostPlayer->five_w}}
                            </td>
                            <td class="">
                                {{$mostPlayer->bbi}}
                            </td>
                            <td class="pr-6">
                                {{$mostPlayer->runs}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
         </div>
    </div>
</x-app-layout>