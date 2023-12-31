@extends('partials.form.base')
@section('element-' . $field)
        <div class="custom-file">
            <input {{ isset($required) && $required ? 'required' : '' }} type="file"
                   accept="{{ isset($accept) && $accept ? $accept : '.jpg, .jpeg, .png, .gif, .webp' }}"
                   class="form-control custom-file-input @error($field) is-invalid @enderror {{ (isset($disabled) && $disabled) || (isset($clear) && $clear) ? 'col-sm-8' : 'col-sm-10' }}"
                   name="{{ $field }}" id="{{ $field }}" placeholder="{{ $label }}"
                   value="@yield($field)" {{ isset($disabled) && $disabled ? 'disabled' : '' }}>
            <label class="custom-file-label" for="{{ $field }}">@yield('choose-file')</label>
        </div>
@endsection
