@props(['name', 'label', 'value' => ''])
<div class="form-group"><label for="{{ $name }}" class="field-label">{{ $label }}</label><textarea class="field-input" id="{{ $name }}" name="{{ $name }}" {{ $attributes }}>{{ old($name, $value) }}</textarea>@error($name)<p class="mt-2 text-sm text-[#9d1d56]">{{ $message }}</p>@enderror</div>
