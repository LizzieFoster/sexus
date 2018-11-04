@extends('layout.layout')

@section('container')
	 <div class="container-fluid">
	 	 <div class="row">
                	<div class="well well-lg"><p class="font-weight-light h2">Glosario de terminos</p></div>
		</div>
                <div class="row col-lg-offset-2">
                
					          <object type="application/x-shockwave-flash" data="{{asset('/videos/glosario.swf')}}" width="800" height="359">
					            <!--<![endif]-->
					            <param name="quality" value="high">
					            <param name="wmode" value="transparent">
					            <param name="swfversion" value="6.0.65.0">
					            <param name="expressinstall" value="Scripts/expressInstall.swf">
					            <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
					            <div>
					              <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
					              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
					            </div>
					            <!--[if !IE]>-->
					          </object>
					
				</div>
	</div>

@endsection