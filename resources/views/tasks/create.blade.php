<x-layout :title="'Create task'">

    <form method="POST" action="/tasks/create" enctype="multipart/form-data">
        @csrf

        <x-form.input name="task description" />


        <div class="mt-10 flex items-center justify-center gap-x-6">

        </div>
        <x-form.button>Add task</x-form.button>
    </form>

</x-layout>
