@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <!-- <div class="card-header">{{ __('Dashboard') }}</div>-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="content">

                   
                <div style="background-color: #92a8d1" class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">¡Bienvenidos!</h1>
                    </div>
                </div>

                    <div class="links">
                                            <a href="{{action('PofController@vista') }}">Actualización de datos personal vinculado y transferido</a>
                    </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                      

                   
