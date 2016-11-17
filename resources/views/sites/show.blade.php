@extends('layouts.admin')


@section('title', 'Tienda '.$site->name)


@section('content')

<div class="container">

    <div class='admin-container'>
 
        <div class="col-md-12 col-xs-12">
    
            <div class="admin-breadcrumb">
                <h2>Tienda {{$site->name}}</h2>
                <p>Datos de la tienda</p>
            </div>

    
            <div class="admin-slider">
    
  
       <a href="{{ route('sites.index')}}" class="button button-sm">Atrás</a>
      

    <hr>
     








     </div>
</div>
     </div>
      </div>
@endsection