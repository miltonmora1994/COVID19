@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Reportes en excel</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif


          <table class="table table-hover">
            <thead>
              <tr>
                <th>Reportes en Excel</th>
                <th>Consultas por Fecha</th>
              </tr>
            </thead>
            <tbody>

{{--               <tr>
                <td>
                  


                             <li class="list-group-item"><a href="{{ url('faltanReportar/export/')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel Faltan por reportar</a></li>


                </td>
                <td>
          {!! Form::open(['route' => 'faltanReportarfecha', 'method'=>'GET', 'Class'=>'form-inline']) !!}
            {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class' => 'form-control','name'=>'fecha','required']) !!}
        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Consultar</button>
        {!! Form::close() !!}
                </td>
              </tr> --}}
              <tr>
                <td> <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('/encuestas/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel Total de Encuestas</a></li></td>
            <td>
              
               {!! Form::open(['route' => 'consultaencuesta', 'method'=>'GET', 'Class'=>'form-inline']) !!}
            {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class' => 'form-control','name'=>'fecha','required']) !!}
        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Consultar</button>
        {!! Form::close() !!}

           </td>
              </tr>

              <tr>
                
                <td>  <li class="list-group-item"><a href="{{ url('/sinsintomas/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel Total de Encuestas sin Sintomas</a></li></td>
                <td>
                         {!! Form::open(['route' => 'sinsintomasFecha', 'method'=>'GET', 'Class'=>'form-inline']) !!}
            {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class' => 'form-control','name'=>'fecha','required']) !!}
        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Consultar</button>
        {!! Form::close() !!}

                </td>

              </tr>

              <tr>
                
                <td>
                                             <li class="list-group-item"><a href="{{ url('/concovid/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel Total de Encuestas con Covid Confirmado</a></li>

                </td>
                <td>
                  
                                  {!! Form::open(['route' => 'concovidFecha', 'method'=>'GET', 'Class'=>'form-inline']) !!}
            {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class' => 'form-control','name'=>'fecha','required']) !!}
        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Consultar</button>
        {!! Form::close() !!}


                </td>
              </tr>

              <tr>
                <td>
                  
              
                 <li class="list-group-item"><a href="{{ url('/consintomas/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel Total de Encuestas Con Sintomas</a></li>

                </td>
                <td>
                  
                                     {!! Form::open(['route' => 'consintomasFecha', 'method'=>'GET', 'Class'=>'form-inline']) !!}
            {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class' => 'form-control','name'=>'fecha','required']) !!}
        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Consultar</button>
        {!! Form::close() !!}
                </td>
              </tr>

  

{{-- Excel con Factores de Riesgos --}}
            <tr>
              <td>
                
                     <li class="list-group-item"><a href="{{ url('factoresriesgos/export/')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel Total Factores de Riesgos</a></li>
              </td>
              <td>
                
            {!! Form::open(['route' => 'factoresriesgosFecha', 'method'=>'GET', 'Class'=>'form-inline']) !!}
            {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class' => 'form-control','name'=>'fecha','required']) !!}
        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Consultar</button>
        {!! Form::close() !!}
              </td>
            </tr>

            
            <tr>
              <td>
                
                     <li class="list-group-item"><a href="{{ url('/trabajadores/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel Total de usuarios ingresados</a></li>
              </td>

                          <tr>
              <td>
                
           {{--      
                                                       {!! Form::open(['route' => 'consultaencuesta', 'method'=>'GET', 'Class'=>'form-inline']) !!}
            {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class' => 'form-control','name'=>'fecha','required']) !!}
        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Consultar</button>
        {!! Form::close() !!} --}}
              </td>
            </tr>


            </tbody>
          </table>

         

             




       
            <li class="list-group-item"><a href="{{ url('/')}}"><svg class="bi bi-building" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M15.285.089A.5.5 0 0115.5.5v15a.5.5 0 01-.5.5h-3a.5.5 0 01-.5-.5V14h-1v1.5a.5.5 0 01-.5.5H1a.5.5 0 01-.5-.5v-6a.5.5 0 01.418-.493l5.582-.93V3.5a.5.5 0 01.324-.468l8-3a.5.5 0 01.46.057zM7.5 3.846V8.5a.5.5 0 01-.418.493l-5.582.93V15h8v-1.5a.5.5 0 01.5-.5h2a.5.5 0 01.5.5V15h2V1.222l-7 2.624z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M6.5 15.5v-7h1v7h-1z" clip-rule="evenodd"/>
              <path d="M2.5 11h1v1h-1v-1zm2 0h1v1h-1v-1zm-2 2h1v1h-1v-1zm2 0h1v1h-1v-1zm6-10h1v1h-1V3zm2 0h1v1h-1V3zm-4 2h1v1h-1V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm-2 2h1v1h-1V7zm2 0h1v1h-1V7zm-4 0h1v1h-1V7zm0 2h1v1h-1V9zm2 0h1v1h-1V9zm2 0h1v1h-1V9zm-4 2h1v1h-1v-1zm2 0h1v1h-1v-1zm2 0h1v1h-1v-1z"/>
            </svg> Registrar por cédula</a></li>



          </ul>

<p>
  <p>


  <hr>




              
              
        </div>





      </div>  
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">Datos importantes</div>

        <div class="card-body">


          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>@php
                 $hoy=\Carbon\Carbon::now()->format('Y-m-d'); 
                 $sintomas = \App\encuesta::where('Covid19','Si' )->where('encuesta.created_at','LIKE','%'.$hoy.'%')->count(); echo $sintomas; @endphp</h3>

                <p>¿Sintomas de Covid19 hoy {{$hoy}}?</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
          </div>
          <p>
          <!-- ./col -->
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>@php $sintomas = \App\encuesta::where('created_at','LIKE','%'.$hoy.'%')->get(); echo $sintomas->count(); @endphp<sup style="font-size: 20px"></sup></h3>

                <p>Total Encuestas HOY</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>

          <p>
          <!-- ./col -->

          <p>
          <!-- ./col -->
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>@php $sintomas = \App\encuesta::where('pregunta14','1')->get(); echo $sintomas->count(); @endphp</h3>

                <p>¿Cuenta con prueba para COVID-19? </p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>


    </div>

    <p>

    <div class="card">
        <div class="card-header">Listado de usuarios con Sintomas Covid ({{$hoy}})</div>

        <div class="card-body">

        @php  

        $index = \DB::table('encuesta')
            ->join('empleados', 'empleados.id', '=', 'encuesta.empleados_id')
                ->where('Covid19','Si' )
                ->where('encuesta.created_at','LIKE','%'.$hoy.'%')
                ->select('empleados.CEDULA', 'empleados.NOMBRE', 'empleados.APELLIDO','empleados.EMPRESA','empleados.CARGO','empleados.DIRECCION','empleados.TELEFONO','empleados.CODCC','empleados.NOMBRECOSTOS','empleados.FECNAC','empleados.SEXO')
            ->get();

        @endphp

        @foreach ($index as $row)
        
        <lu>
          <li>{{$row->CEDULA}} || {{$row->NOMBRE}} || {{$row->APELLIDO}} || {{$row->CARGO}}</li>
        </lu>
        

        @endforeach
      
    

          <!-- ./col -->
        </div>


    </div>

    <p/>
       <div class="card">
        <div class="card-header">Listado de usuarios con Factores de Riesgo ({{$hoy}})</div>

        <div class="card-body">

        @php  

        $index = \DB::table('encuesta')
            ->join('empleados', 'empleados.id', '=', 'encuesta.empleados_id')
                ->where('encuesta.created_at','LIKE','%'.$hoy.'%')
                ->Where('pregunta1','1' )
                
                ->select('empleados.CEDULA', 'empleados.NOMBRE', 'empleados.APELLIDO','empleados.EMPRESA','empleados.CARGO','empleados.DIRECCION','empleados.TELEFONO','empleados.CODCC','empleados.NOMBRECOSTOS','empleados.FECNAC','empleados.SEXO')
            ->get();

        @endphp

        @foreach ($index as $row)
        
        <lu>
          <li>{{$row->CEDULA}} || {{$row->NOMBRE}} || {{$row->APELLIDO}} || {{$row->CARGO}}</li>
        </lu>
        

        @endforeach
      
    

          <!-- ./col -->
        </div>


    </div>

    <p/>
       <div class="card">
        <div class="card-header">Listado de usuarios con Sintomas Covid <code>Acumulado</code></div>

        <div class="card-body">

        @php  

  $index = \DB::table('encuesta')
            ->join('empleados', 'empleados.id', '=', 'encuesta.empleados_id')
                ->where('Covid19','Si' )
                ->select('empleados.CEDULA', 'empleados.NOMBRE', 'empleados.APELLIDO', \DB::raw('count(*) as Acumulado'))
                  ->groupBy('empleados.CEDULA', 'empleados.NOMBRE', 'empleados.APELLIDO')
            ->get();

        @endphp

        @foreach ($index as $row)
        
        <lu>
          <li>{{$row->CEDULA}} || {{$row->NOMBRE}}  {{$row->APELLIDO}} || 

<button class="btn btn-warning" type="button">
  Reportado: <span class="badge">({{$row->Acumulado}})</span>
</button></li>
        </lu>
        

        @endforeach
      
    

          <!-- ./col -->
        </div>


    </div>



    </div><!-- Finaliza el card -->





    </div>

 

    

</div>



@endsection
