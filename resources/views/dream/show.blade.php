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
            <form method="POST"  action="{{ route('progress.store') }}">
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
        @endif
    </article>
@endsection
