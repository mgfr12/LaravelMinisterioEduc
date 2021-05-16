@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Completar datos') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('CreatePof') }}">
                        @csrf
                        <div class="form-group row">
                            @if($usuario->rol=='Directivo')
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Seleccione la Escuela:') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="institution" name="institution">
                                        @foreach($instituciones as $escuela)
                                            <option value="{{$escuela->id}}">{{$escuela->nombre}} (CUE: {{$escuela->cue}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Indique zona de la institución:') }}</label>
                                <div class="col-md-6">
                                    <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" required autocomplete="area" autofocus>

                                    @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                </div>
                       


                                </div>
                            @endif
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar modificaciones') }}
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

