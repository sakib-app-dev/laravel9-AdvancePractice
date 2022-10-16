@props([
    'name' => 'name',
    'list' => [],
    'selected'=>'',
    'label'=>''
])
{{-- @dd($attributes); --}}
@if($label)
<label for="{{ $name }}Input" class="form-label">{{ $label }}</label>
@endif
<select {{ $attributes->merge(['class' => 'form-control']) }} name={{ $name }}>

    <option value="">Please select</option>
    @foreach($list as $key => $value)
    <option value="{{ $value->id }}">{{ $value->color_name }}</option>
    @endforeach
</select>