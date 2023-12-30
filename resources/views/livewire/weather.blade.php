@php use App\Models\Weather; @endphp
<div
    class="flex flex-col gap-10 items-center justify-center w-screen min-h-screen text-gray-700 p-10 bg-gradient-to-br from-pink-200 via-purple-200 to-indigo-200 ">
    @foreach($weatherList as $weather)
        <div class="w-full max-w-screen-sm bg-white p-4 rounded-xl ring-8 ring-white ring-opacity-40">
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <span class="text-5xl font-bold">{{$weather->temperature}}°C</span>
                    <span class="font-semibold mt-1 text-gray-500">{{ $weather->city }}</span>
                </div>
                @if($weather->condition === Weather::CONDITION_SUNNY)
                    <svg class="h-24 w-24 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" height="24"
                         viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path
                            d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79zM1 10.5h3v2H1zM11 .55h2V3.5h-2zm8.04 2.495l1.408 1.407-1.79 1.79-1.407-1.408zm-1.8 15.115l1.79 1.8 1.41-1.41-1.8-1.79zM20 10.5h3v2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm-1 4h2v2.95h-2zm-7.45-.96l1.41 1.41 1.79-1.8-1.41-1.41z"/>
                    </svg>
                @elseif($weather->condition === Weather::CONDITION_CLOUDY)
                    <svg class="h-24 w-24 fill-current text-gray-400 mt-3" xmlns="http://www.w3.org/2000/svg"
                         height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path
                            d="M12.01 6c2.61 0 4.89 1.86 5.4 4.43l.3 1.5 1.52.11c1.56.11 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3h-13c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.95 6 12.01 6m0-2C9.12 4 6.6 5.64 5.35 8.04 2.35 8.36.01 10.91.01 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.64-4.96C18.68 6.59 15.65 4 12.01 4z"/>
                    </svg>
                @endif
            </div>
        </div>
    @endforeach
</div>
