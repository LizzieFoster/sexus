@extends('layout.layout')

@section('container')
<style>
  .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
  }
</style>
	 <div class="container-fluid">
         <div class="row">
          <div class=" col-md-3 ">
            <div class="card">
              <img class="card-img-top" src="{{asset('images/embarazo/5.png')}}" alt="Card image cap" style="">
              <div class="card-body">
                <h5 class="card-title">Embarazo Precoz</h5>
                <p class="card-text">Embarazo adolecente o embarazo en la adolecencia.</p>
                  <form action="{{url('/temas/embarazo_precoz')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                    {{ csrf_field() }}
                    {{ method_field('GET') }}
                    <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver </button>                   
                  </form>             
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
  				</div>
        				<div class="card col-lg-3 col-lg-offset-1 ">
        				    
        				    <div class="card-body">
        				    		<img class="card-img-top" src="{{asset('images/abuso/3.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
        					      <h5 class="card-title">Abuso fisico y psicologico</h5>

        					      <p class="card-text">¿Que y cuales son diferentes malos tratos?.</p>
        					     

        					      <form action="{{url('/temas/abuso')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                           {{ csrf_field() }}
                                           {{ method_field('GET') }}
                                        
                                           <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver </button>
                                           
                                           
                                   </form>

                                   
        	                      <p class="card-text"><small class="text-muted"></small></p>
        				    </div>
        					
        				</div>
        				<div class="card col-lg-3 col-lg-offset-1">
        				    
        				    <div class="card-body">
        				    		<img class="card-img-top" src="{{asset('images/abuso/1.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
        					      <h5 class="card-title">Ets e its</h5>

        					      <p class="card-text">Enfermedades e infecciones de transmision sexual.</p>
        					     

        					      <form action="{{url('/temas/enfermedades')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                           {{ csrf_field() }}
                                           {{ method_field('GET') }}
                                        
                                           <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver </button>
                                           
                                           
                                   </form>

                                   
        	                      <p class="card-text"><small class="text-muted"></small></p>
        				    </div>
        					
        				</div>
		</div>
		 <div class="row">
			          <div class="card col-lg-3 ">
        				    
        				    <div class="card-body">
        				    		<img class="card-img-top" src="{{asset('images/cuerpo/6.jpg')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
        					      <h5 class="card-title">Conociendo nuestro cuerpo</h5>

        					      <p class="card-text">Informacion de interes, sobre nuestro cuerpo.</p>
        					     

        					      <form action="{{url('/temas/nuestro_cuerpo')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                           {{ csrf_field() }}
                                           {{ method_field('GET') }}
                                        
                                           <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver </button>
                                           
                                           
                                   </form>

                                   
        	                      <p class="card-text"><small class="text-muted"></small></p>
        				    </div>
        					
        				</div>
        				<div class="card col-lg-3 col-lg-offset-1 ">
        				    
        				    <div class="card-body">
        				    		<img class="card-img-top" src="{{asset('images/noviazgo/2.PNG')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
        					      <h5 class="card-title">Noviazgo</h5>

        					      <p class="card-text">¿Que y cuales son diferentes malos tratos?.</p>
        					     

        					      <form action="{{url('/temas/noviazgo')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                           {{ csrf_field() }}
                                           {{ method_field('GET') }}
                                        
                                           <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver </button>
                                           
                                           
                                   </form>

                                   
        	                      <p class="card-text"><small class="text-muted"></small></p>
        				    </div>
        					
        				</div>
     
		</div>
	</div>

@endsection