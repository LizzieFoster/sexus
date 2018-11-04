@extends('layout.layout')

@section('container')
    <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">gestionar noticias</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Numero</th>
                                      <th>titulo</th>
                                      <th>accion</th>
                                     
                                      
                                    </thead>
                                    <tbody>
                                      @foreach($noticias as $noticia)
                                        <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$noticia->titulo}}</td>
                                          <td>
                          
                                            <button type="button" class="btn btn-secondary btn-fill" data-toggle="modal" data-target="#{{$noticia->id}}">Editar</button>

                                          <!-- Modal -->
                                          <div id="{{$noticia->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Editar noticia</h4>
                                                </div>
                                                <div class="modal-body">
                                              <form action="{{route('editar',[$noticia->id])}}" method="POST">  <!-- Redireccionar a otra pagina -->
                                               {{ csrf_field() }}
                                               {{ method_field('PUT') }}

                                           <div class="form-group row">

                                              <label for="titulo" class="col-sm-3 form-control-label">Titulo</label>

                                              <div class="col-sm-9">
                                                <input type="text" name="titulo" class="form-control" value="{{$noticia->titulo}}" >
                                              </div>

                                            </div>

                                         

                                            <div class="form-group row">

                                              <label for="topico" class="col-sm-3 form-control-label">topico</label>

                                              <div class="col-sm-9">
                                                 <textarea class="form-control" name="topico" rows="3">{{$noticia->topico}}</textarea>
                                              </div>

                                            </div>
                                             
                                         

                                            <div class="form-group row">

                                              <label for="contenido" class="col-sm-3 form-control-label">Contenido</label>

                                              <div class="col-sm-9">
                                                 <textarea class="form-control" name="contenido" rows="3">{{$noticia->contenido}}</textarea>
                                              </div>

                                            </div>

                                           
                                            <div class="form-group row">

                                              <label for="fuente" class="col-sm-3 form-control-label">fuente</label>

                                              <div class="col-sm-9">
                                                <input type="text" name="fuente" class="form-control" value="{{$noticia->fuente}}">
                                              </div>

                                            </div>


                                             <div class="form-group row">

                                              <label for="categoria" class="col-sm-3 form-control-label">categoria</label>

                                              <div class="col-sm-9">
                                                 <textarea class="form-control" name="categoria" rows="3">{{$noticia->categoria}}</textarea>
                                              </div>

                                            </div>
                                    
                                   
                                       
                                       
                  
                                               <div class="form-group row">
                                               <div class="col-sm-4 ">
                                                 
                                                 <button type="submit" class="btn btn-secondary btn-fill">Guardar</button>
                                               </div>
                                             </div>
                                              </form>  
                                                </div>
                                
                                                 
                                              </div>

                                            </div>

                                          </td>
                                          <td>   
                                            <form action="{{route('eliminar',[$noticia->id])}}" method="POST">  <!-- Redireccionar a otra pagina -->
                                             {{ csrf_field() }}
                                             {{ method_field('PUT') }}
                                          
                                            <div class="form-group row">
                                               <div class="col-sm-4 ">
                                                 
                                                 <button type="submit" class="btn btn-danger btn-fill">Eliminar</button>
                                               </div>
                                             </div>
                                             
                                             
                                            </form>    
                                          </td>
                                        
                                        
                                        </tr>
                                      @endforeach
                                        


                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                </div>
            </div>






@endsection