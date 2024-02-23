@props(['messages'])

@if ($messages)
  {{-- <div {{ $attributes->merge(['class' => 'invalid-feedback']) }}>
    @foreach ((array) $messages as $message)
      <span>{{ $message }}</span>
    @endforeach
  </div> --}}
  <div {{ $attributes->merge(['class' => 'text-danger']) }}>
    @foreach ((array) $messages as $message)
      <small>{{ $message }}</small>
    @endforeach
  </div>
@endif
