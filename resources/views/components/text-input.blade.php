@props(['disabled' => false, 'type', 'id', 'isInvalid'])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'form-control {{ $isInvalid }}',
    'type' => $type ?? 'text',
    'id' => $id,
]) !!}>
