<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Componetns</title>
</head>

<body>
    @php
        $message = 'this is just testing';
    @endphp
    {{-- <x-alert type="success" message="{{ $message }}"></x-alert>
    <x-alert type="success" :message="$message"></x-alert>
    <x-alert type="success" :$message></x-alert>
    <x-alert type="danger" message="Error"></x-alert>
    <x-alert type="info" message="Info"></x-alert>
    <x-alert type="warning" message="Info"></x-alert> --}}
    <x-alert type="danger">
        <x-slot name="title">
            Heading Goes Here
        </x-slot>
        <p class="mb-0">Lorem ipsum dolor sit amet.
            {{ $component->link('Just Testing', 'https://www.google.com/') }}
        </p>
    </x-alert>
</body>

</html>
