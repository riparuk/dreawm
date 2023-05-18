@extends('layouts.app2')

@section('content')
    @include('dream.create')
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="mt-3 flex flex-col " id="main">

        @include('components2.dreamIndex')

    </div>
@endsection
