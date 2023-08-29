<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple Task Tracker</title>

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
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">View tasks</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Add new task</a>
        </x-navigation>

        <x-tasklist>
        </x-tasklist>
    </div>

</body>

</html>
