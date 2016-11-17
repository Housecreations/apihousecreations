@extends('layouts.admin')


@section('title', 'Tiendas registradas')


@section('content')

<div class="container">

    <div class='admin-container'>
 
        <div class="col-md-12 col-xs-12">
    
            <div class="admin-breadcrumb">
                <h2>Tiendas</h2>
                <p>Cree, edite o elimine una tienda</p>
            </div>

    
            <div class="admin-slider">
    
  
       <a href="{{ url('/')}}" class="button button-sm">Atrás</a>
      
   <a  class="button button-sm" role="button" data-toggle="collapse" href="#collapseStore" aria-expanded="false" aria-controls="collapseStore">Nueva tienda</a>
    <hr>
     


<div class="collapse" id="collapseStore">

{!! Form::open(['route' => 'sites.store', 'method' => 'POST']) !!}

    <div class="form-group">
        
        
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la tienda', 'required']) !!}
        
    </div>
    
    <div class="form-group">
        
       
        {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'URL de la tienda', 'required']) !!}
        
    </div>
    
    <div class="form-group">
        
       
        {!! Form::text('country', null, ['class' => 'form-control', 'placeholder' => 'País de la tienda', 'required']) !!}
        
    </div>
    
    <div class="form-group">
        
       
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo de la tienda', 'required']) !!}
        
    </div>
    
    <div class="form-group">
        
       
        {!! Form::number('phone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono de la tienda', 'required']) !!}
        
    </div>
    
    
 
    
    

    <div class="form-group text-center">
    
    {!! Form::submit('Registrar', ['class' => 'button'])!!}
    
</div>


{!! Form::close() !!}
               <hr>
                </div>


<h2>Buscar tienda</h2>

<!-- Buscador de tiendas -->

{!! Form::open(['route' => 'sites.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
<div class="input-group">
    
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tienda...', 'aria-describedby' => 'searchSites']) !!}

   
    <span class="input-group-addon" id="searchSites"><span class="glyphicon glyphicon-search"  aria-hidden="true"></span></span>
    </div>
{!! Form::close() !!}
<!-- Fin buscador de tiendas -->


<hr>
<table class='table table-hover'>
    
    <thead>
        <th>Nombre</th>
        <th>URL</th>
        <th>País</th>
        <th>Status</th>
        <th>Acción</th>
    </thead>
    <tbody>
       @foreach($sites as $site)
           <tr>
                <td>{{$site->name}}</td>
                <td>{{$site->url}}</td>
                <td style="text-transform: capitalize;">{{$site->country}}</td>
                <td>{{$site->status}}</td>
               
           
           
               <td>
           
            <a href="{{ route('sites.show', $site->id)}}" class='td-admin'><span class='fa-stack fa-lg' aria-hidden='true'>
                     <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                    </span></a>  
                       
          <a id="{{$site->id}}" class='td-admin api-secret-show'><span class='fa-stack fa-lg' aria-hidden='true'>
                     <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-user-secret fa-stack-1x fa-inverse"></i>
                    </span></a>
               
               
                <a href="{{ route('sites.edit', $site->id)}}" class='td-admin'><span class='fa-stack fa-lg' aria-hidden='true'>
                     <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                    </span></a>
               <a href="{{ route('sites.destroy', $site->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class='td-admin'><span class='fa-stack fa-lg ' aria-hidden='true'>
                     <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-times fa-stack-1x fa-inverse"></i>
                    </span></a></td>
           
           
           
           
           
           
           
           
           </tr>
        
            
       @endforeach 
    </tbody>
    
</table>

<input id="api-secret-input" class="form-control" type="text"  readonly value="Api-Secret">


<div class="text-center">
  {!! $sites->render() !!} 
</div>

     </div>
</div>
     </div>
      </div>
@endsection