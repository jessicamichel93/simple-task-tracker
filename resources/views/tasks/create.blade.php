<x-layout :title="'Create task'">

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <x-form.input name="title" />

        <div class="mt-10 flex items-center justify-center gap-x-6">

        </div>
        <x-form.button>Add task</x-form.button>
    </form>

</x-layout>
