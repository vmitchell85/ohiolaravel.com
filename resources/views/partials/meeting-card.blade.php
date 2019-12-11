<div class="flex flex-col w-full bg-white rounded shadow-lg">
    <div class="w-full h-64 bg-center bg-cover rounded-t" style="background-image: url({{$meeting->image_url}})"></div>
    <div class="flex flex-col w-full md:flex-row">
        <div class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
            <div class="md:text-3xl">{{ $meeting->start_at->format('M') }}</div>
            <div class="md:text-6xl">{{ $meeting->start_at->format('d') }}</div>
            <div class="md:text-xl">{{ $meeting->start_at->format('g') }}-{{ str_replace('m', '', $meeting->end_at->format('ga')) }}</div>
        </div>
        <div class="p-4 font-normal text-gray-800 md:w-3/4">
            <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">{{$meeting->title}}</h1>
            <p>{!! $meeting->description !!}</p>
            <div class="flex flex-row mt-4 text-gray-700">
                <div class="w-1/2">
                    {{$meeting->location->name}}
                </div>
                <div class="w-1/2">
                    <div class="italic text-right">
                        Food & Drink provided.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>