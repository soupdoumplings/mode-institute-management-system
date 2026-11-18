@props(['name', 'label', 'type' => 'text', 'value' => ''])
<div class="form-group"><label for="{{ $name }}" class="field-label">{{ $label }}</label><input class="field-input" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" {{ $attributes }}>@error($name)<p class="mt-2 text-sm text-[#9d1d56]">{{ $message }}</p>@enderror</div>
