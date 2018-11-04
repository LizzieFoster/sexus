@extends('layout.layout')

@section('container')
<div class="container-fluid">
         <div class="row">
         	<p class="font-weight-light h2">Galeria</p>
			          <div class="card col-lg-3 ">
        				    
        				    <div class="card-body">
        				    		<img class="card-img-top" src="{{asset('images/embarazo/5.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
        					      <h5 class="card-title">Embarazo Precoz</h5>

        					      
        					     

        					      <form action="{{url('/imagenes/embarazo_precoz')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                           {{ csrf_field() }}
                                           {{ method_field('GET') }}
                                        
                                           <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver imagenes  </button>
                                           
                                           
                                   </form>

                                   
        	                      <p class="card-text"><small class="text-muted"></small></p>
        				    </div>
        					
        				</div>
        				<div class="card col-lg-3 col-lg-offset-1 ">
        				    
        				    <div class="card-body">
        				    		<img class="card-img-top" src="{{asset('images/abuso/3.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
        					      <h5 class="card-title">Abuso fisico y psicologico</h5>

        					     
        					     

        					      <form action="{{url('/imagenes/abuso')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                           {{ csrf_field() }}
                                           {{ method_field('GET') }}
                                        
                                           <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver imagenes  </button>
                                           
                                           
                                   </form>

                                   
        	                      <p class="card-text"><small class="text-muted"></small></p>
        				    </div>
        					
        				</div>
        				<div class="card col-lg-3 col-lg-offset-1">
        				    
        				    <div class="card-body">
        				    		<img class="card-img-top" src="{{asset('images/abuso/1.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
        					      <h5 class="card-title">Ets e its</h5>

        					   
        					     

        					      <form action="{{url('/imagenes/enfermedades')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                           {{ csrf_field() }}
                                           {{ method_field('GET') }}
                                        
                                           <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver imagenes  </button>
                                           
                                           
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

        					     
        					     

        					      <form action="{{url('/imagenes/nuestro_cuerpo')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                           {{ csrf_field() }}
                                           {{ method_field('GET') }}
                                        
                                           <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver imagenes  </button>
                                           
                                           
                                   </form>

                                   
        	                      <p class="card-text"><small class="text-muted"></small></p>
        				    </div>
        					
        				</div>
        				<div class="card col-lg-3 col-lg-offset-5 ">
        				    
        				    <div class="card-body">
        				    		<img class="card-img-top" src="{{asset('images/noviazgo/2.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
        					      <h5 class="card-title">noviazgo</h5>

        					      
        					     

        					      <form action="{{url('/imagenes/noviazgo')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                           {{ csrf_field() }}
                                           {{ method_field('GET') }}
                                        
                                           <button type="submit" class="btn btn-warning btn-block" id="modulo">Ver imagenes </button>
                                           
                                           
                                   </form>

                                   
        	                      <p class="card-text"><small class="text-muted"></small></p>
        				    </div>
        					
        				</div>
     
		</div>
	</div>
@endsection