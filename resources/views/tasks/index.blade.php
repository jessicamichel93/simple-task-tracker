<x-layout :title="'Overview Task Tracker'">

    <ul class="border border-gray-300 rounded">

        @foreach ($tasks as $task)
            <li class="py-3 px-6 border-b border-gray-200 flex justify-between gap-2">
                {{ $task['title'] }}

                <form action="{{ route('tasks.destroy', $task['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-800 uppercase text-sm">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

</x-layout>
