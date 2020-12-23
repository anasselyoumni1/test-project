<div class="form-group row">
    <label for="merk" class="col-md-4 col-form-label text-md-right">{{ __('merk') }}</label>

    <div class="col-md-6">
        <input id="merk" type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{ old('merk') }}" required autocomplete="merk" autofocus>

        @error('merk')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>
{{--                    tot hier--}}
{{--        Hier overal waar domain staat moet type--}}
<div class="form-group row">
    <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('type') }}</label>

    <div class="col-md-6">
        <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>

        @error('type')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>
{{--                    tot hier--}}
