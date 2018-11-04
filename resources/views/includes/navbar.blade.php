<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                
               
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="{{url('/')}}">
                               <p>Inicio</p>
                            </a>
                        </li>

                        <li>
                           <a href="{{url('/temas')}}">
                               <p>Temas</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                Galeria
                                <b class="caret"></b>
                              </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="{{url('/imagenes')}}">Imagenes</a></li>
                                <li><a href="{{url('/videos_sexus')}}">Videos</a></li>

                              </ul>
                        </li>
                        
                        
                        <li>
                           <a href="{{url('/libros')}}">
                               <p>Libros</p>
                            </a>
                        </li>
                        <li>
                           <a href="{{url('/noticias')}}">
                               <p>Noticias</p>
                            </a>
                        </li>
                        


                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>