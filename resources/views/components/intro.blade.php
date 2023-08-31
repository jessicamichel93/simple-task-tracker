@props(['title'])

<div class="text-center">

    @if ($title)
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl"> {{ $title }}</h1>
    @endif

    <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt.
        Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>

</div>
