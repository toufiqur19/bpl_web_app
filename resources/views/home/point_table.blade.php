<x-app-layout>
    <header class="w-full h-40 flex justify-center text-center">
        <div class="mt-8 ">
            <a href="">BPL-2024 / </a>
            <a class="{{Request::is('home/point-table')?'text-green-600':''}}" href="">Point Table</a>
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
                            <th scope="col" class="pl-3 py-4 w-20">
                                POS
                            </th>
                            <th scope="col" class="text-start">
                                Team
                            </th>
                            <th scope="col" class="w-16">
                                match
                            </th>
                            <th scope="col" class="w-16">
                                win
                            </th>
                            <th scope="col" class="w-16">
                                los
                            </th>
                            <th scope="col" class="w-16">
                                point
                            </th>
                            <th scope="col" class="w-20">
                               nrr
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pointTables as $pointTable)
                        <tr class="border border-gray-100 font-semibold text-center">
                            <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                {{$pointTable->team_no}}
                            </th>
                            <td class="flex mt-2.5">
                                <img class="" src="{{ asset('team_logo/'.$pointTable->team_logo) }}" alt="" width="25" height="25">
                                <h6 class="pl-1.5">{{$pointTable->team_name}}</h6>
                            </td>
                            <td class="">
                                {{$pointTable->match}}
                            </td>
                            <td class="">
                                {{$pointTable->win}}
                            </td>
                            <td class="">
                                {{$pointTable->los}}
                            </td>
                            <td class="">
                                {{$pointTable->nrr}}
                            </td>
                            <td class="">
                                {{$pointTable->point}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
         </div>
    </div>
</x-app-layout>