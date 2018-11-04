@extends('layout.layout')

@section('container')
	 <div class="container-fluid">
                <div class="row">
                	<div class="well well-lg"><p class="font-weight-light h2">Administracion sexus</p>
					</div>
					
				</div>
	</div>



<div class="row">
                	<div class="well well-lg "><p class="font-weight-light h4">Crear Noticia</p>

                		<div class="row">
                			<div class="col-lg-8 col-lg-offset-2">
                      
                				<form enctype="multipart/form-data" action="{{url('/administracion/crear_noticia/crear')}}" method="POST">  <!-- Redireccionar a otra pagina -->
                                       {{ csrf_field() }}
                                       {{ method_field('POST') }}

                                           <div class="form-group row">

                                              <label for="titulo" class="col-sm-3 form-control-label">Titulo</label>

                                              <div class="col-sm-9">
                                                <input type="text" name="titulo" class="form-control">
                                              </div>

                                            </div>

                                         

                                            <div class="form-group row">

                                              <label for="topico" class="col-sm-3 form-control-label">topico</label>

                                              <div class="col-sm-9">
                                                 <textarea class="form-control" name="topico" rows="3"></textarea>
                                              </div>

                                            </div>
                                             
                                         

                                            <div class="form-group row">

                                              <label for="contenido" class="col-sm-3 form-control-label">Contenido</label>

                                              <div class="col-sm-9">
                                                 <textarea class="form-control" name="contenido" rows="3"></textarea>
                                              </div>

                                            </div>

                                           
                                            <div class="form-group row">

                                              <label for="fuente" class="col-sm-3 form-control-label">fuente</label>

                                              <div class="col-sm-9">
                                                <input type="text" name="fuente" class="form-control">
                                              </div>

                                            </div>


                                             <div class="form-group row">

                                              <label for="categoria" class="col-sm-3 form-control-label">categoria</label>

                                              <div class="col-sm-9">
                                                 <textarea class="form-control" name="categoria" rows="3"></textarea>
                                              </div>

                                            </div>
                                          <!--  <div class="form-group row">

                                              <label for="foto" class="col-sm-3 form-control-label">foto</label>

                                              <div class="col-sm-9">
                                                  <input type="file" name="foto" class="form-control">
                                              </div>

                                            </div> -->
                                    
                                       <button type="submit" class="btn btn-primary btn-fill btn-block" id="modulo">crear </button>
                                       
                                       
    						 	
                                       
    						    	</form>       

                			</div>
                			         			


                		</div>

					</div>
					
</div>

@endsection