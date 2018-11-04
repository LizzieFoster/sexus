@extends('layout.layout')

@section('container')
<div class="container-fluid">
         <div class="row">
            <p class="font-weight-light h2">Imagenes noviazgos</p>
                      <div class="card col-lg-3 ">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/noviazgo/1.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                               
                            </div>
                            
                        </div>
                        <div class="card col-lg-3 col-lg-offset-1 ">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/noviazgo/2.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                               
                            </div>
                            
                        </div>
                        <div class="card col-lg-3 col-lg-offset-1">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/noviazgo/3.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                            
                            </div>
                            
                        </div>
        </div>
         <div class="row">
                      <div class="card col-lg-3 ">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/noviazgo/4.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                            
                            </div>
                            
                        </div>
                        <div class="card col-lg-3 col-lg-offset-5 ">
                            
                            <div class="card-body">
                                    <img class="card-img-top" src="{{asset('images/noviazgo/5.png')}}" width="280" style="margin-top: 5px;" height="200" alt="Card image cap">
                               
                            </div>
                            
                        </div>
     
        </div>
    </div>
@endsection