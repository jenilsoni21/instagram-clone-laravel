<div class="form-group mt-3">
    {{-- <label class="text-light pt-2 pb-1">{{$label}}</label> --}}
    <input type="{{$type}}" class="form-control py-2" placeholder="{{$placeholder}}" name="{{$name}}"/>
    <span class="text-danger">
        @error('{{$name}}')
            {{ $message }}
        @enderror
    </span>
</div>