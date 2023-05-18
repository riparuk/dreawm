@foreach ($dreams as $dream)
    @if (isset($dream->image))
        <div class="bg-white mt-3 rounded-lg shadow">
            <a href="{{ route('dream.show', ['id' => $dream->id]) }}">
                <img class="border shadow-lg object-contain w-3/5 mx-auto"
                    src="{{ asset('storage/dream_images/' . $dream->image) }}">
            </a>
            <div class="bg-white border shadow p-5 text-xl text-gray-700 font-semibold">
                {{ $dream->title }}
            </div>
            <div class="bg-white p-1 rounded-b-lg border shadow flex flex-row flex-wrap">
                <a href="/dream/{{ $dream->id }}#progress"
                    class="w-1/3 hover:bg-gray-200 text-center text-xl text-gray-700 font-semibold">Progress</a>
                {{-- <div
                    class="w-1/3 hover:bg-gray-200 border-l-4 border-r- text-center text-xl text-gray-700 font-semibold">
                    Comment</div>
                <div class="w-1/3 hover:bg-gray-200 border-l-4 text-center text-xl text-gray-700 font-semibold">
                    Like</div> --}}
            </div>
        </div>
    @else
        <div class="bg-gray-50 dark:bg-gray-900 mt-3 rounded-lg">
            <a href="{{ route('dream.show', ['id' => $dream->id]) }}" class="hover:underline">
                <div
                    class="rounded-t-lg bg-gray-50 dark:bg-gray-300 dark:text-gray-900 border shadow p-5 text-xl text-gray-900 font-semibold">
                    {{ $dream->title }}
                </div>
            </a>
            <div class="bg-gray-50 p-1 border shadow flex flex-row flex-wrap ">
                <a href="/dream/{{ $dream->id }}#progress"
                    class="w-1/3 hover:bg-gray-200 hover:text-gray-900 text-center text-xl text-gray-900 font-semibold">
                    Progress
                </a>
                {{-- <div
                    class="w-1/3 hover:bg-gray-200 hover:text-gray-900 border-l-4 border-r- text-center text-xl text-gray-900 font-semibold">
                    Comment</div>
                <div
                    class="w-1/3 hover:bg-gray-200 hover:text-gray-900 border-l-4 text-center text-xl text-gray-900 font-semibold">
                    Like</div> --}}
            </div>

            <div
                class="bg-white border-4 bg-gray-300 dark:bg-gray-900 border-white rounded-b-lg shadow p-5 text-xl text-gray-400 content-center font-semibold flex flex-row flex-wrap">
                <div class="w-full">
                    <div class="w-full text-left text-xl text-gray-600">
                        {{ $dream->user->name }}
                    </div>
                    {{ $dream->description }}
                </div>
            </div>
        </div>
    @endif
@endforeach
