@php
    $label ??=null;
    $type ??='text';
    $class ??=null;
    $name ??=null;
    $value ??=null;
@endphp

<div class="form-group">
    <label for="{{$name}}"> {{$label}} </label>
    <input type="{{$type}}" class="{{$class}}" id="{{$name}}" name="{{$name}}" value="{{old($name)}}">
    @error($name)
       {{$message}}
    @enderror
</div>