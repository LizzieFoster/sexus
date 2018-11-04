@extends('layout.layout')

@section('container')<div class="container-fluid">
         <div class="row">
            <p class="font-weight-light h2">Imagenes conociendo nuestro cuerpo</p>
                      <div class="card col-lg-3 ">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/cuerpo/1.gif')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                                 
                            </div>
                            
                        </div>
                        <div class="card col-lg-3 col-lg-offset-1 ">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/cuerpo/2.gif')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                                
                            </div>
                            
                        </div>
                        <div class="card col-lg-3 col-lg-offset-1">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/cuerpo/3.gif')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                               
                            </div>
                            
                        </div>
        </div>
         <div class="row">
                      <div class="card col-lg-3 ">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/cuerpo/4.gif')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                             
                            </div>
                            
                        </div>
                        <div class="card col-lg-3 col-lg-offset-1 ">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/cuerpo/5.jpg')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                               
                            </div>
                            
                        </div>
                        <div class="card col-lg-3 col-lg-offset-1 ">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/cuerpo/6.jpg')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                               
                            </div>
                            
                        </div>

     
        </div>
        
    </div>
@endsection