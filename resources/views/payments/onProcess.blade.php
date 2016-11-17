@extends('layouts.admin')

@section('title', 'Pagos por procesar')

@section('content')
 
<div class="container">

    <div class='admin-container'>
 
        <div class="col-md-12 col-xs-12">
    
            <div class="admin-breadcrumb">
                <h2>Pagos en proceso</h2>
                <p>Verifique los códigos de depósito o transferencia</p>
            </div>

    
            <div class="admin-slider">
        
        <a href="{{ url('/')}}" class="button button-sm">Atrás</a>

  <div class="col-md-12">
            <h2>Pagos <p></p></h2>
            
             @foreach($sites as $site)
            <div class="col-md-12 site-container">
               
               <p>Nombre: {{$site->name}}</p>
               <p>Correo: {{$site->email}}</p>
                  <hr>
                  @foreach($site->payments as $payment)
                  {{$payment->code}}
                  @endforeach
            </div>
               @endforeach
         </div>
         
         
    
     


    </div>
</div>
    </div>
</div>
   
@endsection