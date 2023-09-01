<x-layout :title="'Overview Task Tracker'">


    @if (!empty($tasks))

        <ul class="border border-gray-300 rounded">

            @foreach ($tasks as $task)
                <li class="py-3 px-6 border-b border-gray-200 flex justify-between gap-2">

                    <div>
                        {{ $task['title'] }}

                        @if (isset($task['completed']))
                            <span class="ml-2 rounded border border-gray-500 rounded-full text-gray-500 text-xs p-2">
                                completed</span>
                        @endif
                    </div>

                    <div class="flex gap-2">
                        @if (!isset($task['completed']))
                            <form action="{{ route('tasks.complete', $task['id']) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-green-500 text-white rounded p-2">Complete
                                    task</button>
                            </form>
                        @endif

                        <form action="{{ route('tasks.destroy', $task['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-white bg-red-500 p-2 rounded hover:text-red-800 text-sm">Delete</button>
                        </form>
                    </div>


                </li>
            @endforeach
        </ul>
    @endif

</x-layout>
