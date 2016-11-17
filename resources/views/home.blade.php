@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
 
<div class="container">

    <div class='admin-container'>
 
        <div class="col-md-12 col-xs-12">
    
            <div class="admin-breadcrumb">
                <h2>Dashboard</h2>
                <p>Estadísticas de las tiendas</p>
            </div>

    
            <div class="admin-slider">


  <div class="col-md-12">
            <h2>Totales <p>Este mes</p></h2>
           
              
            
           
           <div class="col-md-6 sale-data">
               <span>{{$totalMonthVEF}} BS</span>
               Ingresos del mes
           </div>
           <div class="col-md-6 sale-data">
               <span>{{$totalMonthUSD}} USD</span>
               Ingresos del mes
           </div>
           
           <div class="col-md-6 sale-data">
               <span>{{$totalMonthCLP}} $ </span>
               Ingresos del mes
           </div>
           <div class="col-md-6 sale-data">
               <span>{{$sitesCount}}</span>
               Tiendas
           </div>
           
         </div>
         
          <div class="col-md-12">
            <h2>Pagos <p>Mes pasado</p></h2>
           
              
            
           
           <div class="col-md-6 sale-data">
               <span> <i class="total-paid">{{$paymentsLastMonthVEF}}</i> / {{$totalLastMonthVEF}} BS </span>
               Pagados
           </div>
           <div class="col-md-6 sale-data">
               <span><i class="total-paid">{{$paymentsLastMonthUSD}}</i> / {{$totalLastMonthUSD}} USD</span>
               Pagados
           </div>
           <div class="col-md-6 sale-data">
               <span><i class="total-paid">{{$paymentsLastMonthCLP}}</i> / {{$totalLastMonthCLP}} $ </span>
               Pagados
           </div>
           <div class="col-md-6 sale-data">
               <span><i class="total-paid">{{$totalPaySites}}</i> / {{$sitesCount}}</span>
               Tiendas que han pagado
           </div>
           
           <div class="col-md-6 sale-data">
              <a href="{{ url('admin/payments/on-process')}}" class="button button-lg">
              @if($paymentsOnProcessCount > 0)
              <i class="badge badge-color">{{$paymentsOnProcessCount}}</i>
              @else
              <i class="badge">{{$paymentsOnProcessCount}}</i>
              @endif
               Ver pagos por procesar</a>
           </div>
           
           <div class="col-md-6 sale-data">
              <a href="{{ url('/')}}" class="button button-lg">Ver tiendas por pagar</a>
           </div>
           
         </div>
         
         
    
     


    </div>
</div>
    </div>
</div>
   
@endsection
