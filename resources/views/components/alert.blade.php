<div class="alert alert-{{ $validType }}" role="alert">
    @isset($title)
        <h4 class="alert-heading">{{ $title }}</h4>
        <hr>
    @endisset
    @if ($slot->isEmpty())
        <p>No Message</p>
    @else
        {{ $slot }}
    @endif

</div>
