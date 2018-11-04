@extends('layout.layout')

@section('container')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Libros referentes a la sexualidad</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Numero</th>
                                    	<th>Nombre</th>
                                    	<th>Descarga</th>
                                    	<th>Tipo</th>
                                    	
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Sexualidad, educacion sexual y genero PARTE 1</td>
                                        	<td><a href="{{asset('/pdf/afecsex1.pdf')}}" download>
												  <p>Descargar</p>
											</a></td>
                                        	<td>PDF</td>
                                        
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Sexualidad, educacion sexual y genero PARTE 2</td>
                                        	<td><a href="{{asset('/pdf/afecsex2.pdf')}}" download>
												  <p>Descargar</p>
											</a></td>
                                        	<td>PDF</td>
                                        
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Jovenes, sexualidad y generos</td>
                                        	<td><a href="{{asset('/pdf/educasex.pdf')}}" download>
												  <p>Descargar</p>
											</a></td>
                                        	<td>PDF</td>
                                        
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Juventud en extasis</td>
                                        	<td><a href="{{asset('/pdf/juventud en extasis.pdf')}}" download>
												  <p>Descargar</p>
											</a></td>
                                        	<td>PDF</td>
                                        
                                        </tr>
                                         <tr>
                                        	<td>5</td>
                                        	<td>Juventud en extasis parte 2</td>
                                        	<td><a href="{{asset('/pdf/juventud en extasis2.pdf')}}" download>
												  <p>Descargar</p>
											</a></td>
                                        	<td>PDF</td>
                                        
                                        </tr>
                                         <tr>
                                        	<td>6</td>
                                        	<td>Libro blanco sobre educacion sexual</td>
                                        	<td><a href="{{asset('/pdf/LibroBlancoEducacionSexual.pdf')}}" download>
												  <p>Descargar</p>
											</a></td>
                                        	<td>PDF</td>
                                        
                                        </tr>
                                        <tr>
                                        	<td>7</td>
                                        	<td>y tu,¿que sabes de eso?</td>
                                        	<td><a href="{{asset('/pdf/QueSabesdeEso_Mar.pdf')}}" download>
												  <p>Descargar</p>
											</a></td>
                                        	<td>PDF</td>
                                        
                                        </tr>
                                        <tr>
                                        	<td>8</td>
                                        	<td>sexo para dummies</td>
                                        	<td><a href="{{asset('/pdf/sexo para dummies.pdf')}}" download>
												  <p>Descargar</p>
											</a></td>
                                        	<td>PDF</td>
                                        
                                        </tr>



                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                </div>
            </div>


@endsection

