<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>        
                App Laravel 7.22        
        </title>        
     
    </head>
    <body>        
    <h1>Menu Api en Laravel 7.22.4</h1>
        <nav>
            <div>
                <ul>                
                    <li>
                        <a class="nav-link" href="{{action('TbCuotasController@create')}}">Formulario Post</a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="{{action('TbCuotasController@show_colletion')}}">Mostrar Json desde el navegador</a>                        
                    </li>
                    
                    {{-- 
                    <li>
                        <a class="nav-link" href="{{action('TbCuotasController@show_colletion_1')}}">Mostrar Json dentro de la App</a>
                    </li>
                    --}}                    
                                                            
                </ul>                
            </div>
        </nav>                
    </body>
</html>
