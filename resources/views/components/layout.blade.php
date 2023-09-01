@props(['title'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Could have installed through npm, but since this is not required for this assignment, used the quickest way to add tailwind for some styling -->

</head>

<body>
    <div class="bg-white">
        <x-navigation>
            <a href="{{ URL::route('tasks.index') }}" class="text-sm font-semibold leading-6 text-gray-900">View
                tasks</a>
            <a href="{{ URL::route('tasks.create') }}" class="text-sm font-semibold leading-6 text-gray-900">Add new
                task</a>
        </x-navigation>

        <div class="mx-auto max-w-2xl space-y-16 sm:py-48 lg:py-56">

            <div class="text-center">
                <x-intro :title="$title">
                </x-intro>
            </div>


            <div class="text-center">
                {{ $slot }}
            </div>

        </div>

    </div>

</body>

</html>
