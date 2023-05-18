@extends('layouts.app2')

@section('content')
    <article>
        <div class="flex items-center mb-4 space-x-4">
            {{-- <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt=""> --}}
            <div class="space-y-1 font-medium dark:text-white">
                <p>Dream by {{ $dream->user->name }}<time datetime="2014-08-16 19:00"
                        class="block text-sm text-gray-500 dark:text-gray-400">Dream on
                        {{ $dream->created_at->format('d/m/Y') }}</time></p>
            </div>
        </div>
        <div class="flex">
            <h2 class="mb-2 text-2xl font-semibold text-gray-900 dark:text-white mx-auto">{{ $dream->title }}</h2>
        </div>
        @if (isset($dream->image))
            <img class="border shadow-lg rounded w-full sm:w-full md:w-3/5 mx-auto"
                src="{{ asset('storage/dream_images/' . $dream->image) }}">
        @endif
        <p class="mt-2 text-xl mb-2 text-gray-500 dark:text-gray-400">{{ $dream->description }}</p>

        <div id="progress">
            <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Progress : </h2>
            <ul class="max-w-full space-y-1 text-gray-500 list-inside dark:text-gray-400">
                @foreach ($dream->progress as $progress)
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{ $progress->created_at }} - {{ $progress->description }}
                    </li>
                @endforeach
            </ul>
        </div>
        @if (session('success'))
            <div class="p-4 mb-3 mt-2 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif
        @if (Auth::check() && $dream->user_id === Auth::user()->id)
            <form method="POST" action="{{ route('progress.store') }}">
                @csrf
                <input type="hidden" name="dream_id" value="{{ $dream->id }}">
                <div class="mb-2">
                    <label for="large-input" class="block mb-2 mt-1 text-sm font-medium text-gray-900 dark:text-white">Add
                        Progress</label>
                    <input type="text" id="large-input" name="description"
                        class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="w-2/3">
                    <button type="submit" class="bg-indigo-400 hover:bg-indigo-300 text-white p-2 rounded-lg">Add</button>
                </div>
            </form>

            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                class="mt-2 block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Delete Dream
            </button>

            <div id="popup-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-hide="popup-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                                delete this dream?</h3>
                            <form action="{{ route('dream.destroy', $dream->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button data-modal-hide="popup-modal" type="submit" 
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Yes, I'm sure
                                </button>
                            </form>
                            <button data-modal-hide="popup-modal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </article>
@endsection
