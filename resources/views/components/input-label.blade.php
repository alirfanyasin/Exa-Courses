@props(['value', 'for'])

<label {{ $attributes->merge(['class' => 'form-label fw-medium', 'for' => $for]) }}>
  {{ $value ?? $slot }}
</label>
