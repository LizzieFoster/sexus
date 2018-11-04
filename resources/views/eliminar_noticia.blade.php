@extends('layout.layout')

@section('container')
	 <div class="container-fluid">
                <div class="row">
                	<div class="well well-lg"><p class="font-weight-light h2">Administracion sexus</p>
					</div>
					
				</div>
	</div>



<div class="row">
                	<div class="well well-lg"><p class="font-weight-light h4">Gestion noticias</p>

                		<div class="row">
                			<div class="col-lg-3">
                				<form action="{{url('/imagenes/embarazo_precoz')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                       {{ csrf_field() }}
                                       {{ method_field('GET') }}
                                    
                                       <button type="submit" class="btn btn-primary btn-fill " id="modulo">Crear noticia  </button>
                                       
                                       
    						 	</form>       

                			</div>
                			<div class="col-lg-3">
                				<form action="{{url('/imagenes/embarazo_precoz')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                       {{ csrf_field() }}
                                       {{ method_field('GET') }}
                                    
                                       <button type="submit" class="btn btn-light btn-fill " id="modulo">Editar noticia  </button>
                                       
                                       
    						 	</form>       

                			</div>
                			<div class="col-lg-3">
                				<form action="{{url('/imagenes/embarazo_precoz')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                       {{ csrf_field() }}
                                       {{ method_field('GET') }}
                                    
                                       <button type="submit" class="btn btn-danger btn-fill " id="modulo">Eliminar noticia  </button>
                                       
                                       
    						 	</form>       

                			</div>
                			         			


                		</div>

					</div>
					
</div>

<div class="row">
                	<div class="well well-lg"><p class="font-weight-light h4">Gestion test</p>

                		<div class="row">
                			<div class="col-lg-3">
                				<form action="{{url('/imagenes/embarazo_precoz')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                       {{ csrf_field() }}
                                       {{ method_field('GET') }}
                                    
                                       <button type="submit" class="btn btn-primary btn-fill " id="modulo">Crear test  </button>
                                       
                                       
    						 	</form>       

                			</div>
                			<div class="col-lg-3">
                				<form action="{{url('/imagenes/embarazo_precoz')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                       {{ csrf_field() }}
                                       {{ method_field('GET') }}
                                    
                                       <button type="submit" class="btn btn-light btn-fill " id="modulo">Editar test  </button>
                                       
                                       
    						 	</form>       

                			</div>
                			<div class="col-lg-3">
                				<form action="{{url('/imagenes/embarazo_precoz')}}" method="GET">  <!-- Redireccionar a otra pagina -->
                                       {{ csrf_field() }}
                                       {{ method_field('GET') }}
                                    
                                       <button type="submit" class="btn btn-danger btn-fill " id="modulo">Eliminar test  </button>
                                       
                                       
    						 	</form>       

                			</div>
                			         			


                		</div>

					</div>
					
</div>
@endsection