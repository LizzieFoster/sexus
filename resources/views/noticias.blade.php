@extends('layout.layout')

@section('container')
	 <div class="container-fluid">
                <div class="row">
					<p class="font-weight-light h1">Noticias.</p>
					<div class="well well">
					@foreach($noticias as $noticia)
						<div class="well well-sm">

						<p class="font-weight-light h3">{{$noticia->titulo}}</p>
					
						<p class="font-weight-light h4">{{$noticia->topico}}.</p>
						<p class="font-weight-light h6">{{$noticia->contenido}}.</p>
						<p class="font-weight-light h6">{{$noticia->fuente}}.</p>
						</div>
					@endforeach

					</div>
					
					
				</div>
	</div>

@endsection