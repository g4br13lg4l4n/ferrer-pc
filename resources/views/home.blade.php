@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tipo de vendedor:  {{ Auth::user()->typeUser }}</div>
                <div class="panel-body">
                   todo nuestro contenido 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
