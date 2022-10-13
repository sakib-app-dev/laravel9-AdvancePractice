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
    <option value="">Select One</option>
    @foreach($color as $key => $option)
        <option value="{{ $key }}" @if($selected == $key) selected @endif >{{ $option }}</option>
    @endforeach
    @forelse ($list as $key => $value)
        <option value="{{$key}}" 
        @if($selected == $key) 
        selected 
        @endif
        >
            {{$value}}
        </option>
    @empty

    @endforelse
</select>