<x-layout :title="'Overview Task Tracker'">

    <ul class="list-group">

        @foreach ($tasks as $task)
            <li class="">{{ $task['title'] }}</li>
        @endforeach
    </ul>

</x-layout>
