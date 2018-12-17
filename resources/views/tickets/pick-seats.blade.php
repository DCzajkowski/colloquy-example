@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pick seats for the event</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('postPickSeats') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="seats" class="col-md-4 col-form-label text-md-right">Input seat numbers</label>

                            <div class="col-md-6">
                                <input id="seats" type="text" class="form-control{{ $errors->has('seats') ? ' is-invalid' : '' }}" name="seats" value="{{ old('seats') }}" required autofocus>

                                @if ($errors->has('seats'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('seats') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Next →
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
