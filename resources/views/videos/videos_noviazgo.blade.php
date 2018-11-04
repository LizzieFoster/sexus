@extends('layout.layout')

@section('container')
<div class="container-fluid">
         <div class="row">
            <p class="font-weight-light h2">Videos noviazgo</p>
                      <div class=" col-lg-3 col-lg-offset-3 ">
                           <video width="600"  controls>
                              <source src="{{asset('videos/noviazgo1.webm')}}" type="video/mp4">
                             
                            </video>
                            
                        </div>
        </div>
         <div class="row"> <br>
                        <div class=" col-lg-3 col-lg-offset-3 ">
                           <video width="600"  controls>
                              <source src="{{asset('videos/noviazgo2.webm')}}" type="video/mp4">
                             
                            </video>
                            
                        </div>
     
        </div>
        
    </div>
@endsection