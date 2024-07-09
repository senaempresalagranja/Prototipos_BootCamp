<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mercacenro</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="Vista/css/style.css">
   
</head>
    <body>

        <div class="content">
            <div class="container">
                <nav class="nav justify-content-end">
                    <div class="row" style="margin:10px;">
                        <button type="button" class="btn btn-danger rounded-circle login" data-toggle="modal" data-target="#login"><i class="material-icons align-middle">account_circle</i></button>
                        <!-- Modal -->
                        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header ">
                                <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <?php 
                                        if (isset($_GET["error"])) {
                                        $mensaje = "Error";
                                        if($_GET["error"]==1){
                                            $mensaje = "¡La contraseña ingresada es incorrecta!";
                                        }
                                        if($_GET["error"]==2){
                                            $mensaje = "¡El usuario ingresado no corresponde a ningun usuario!";
                                        }
                                    ?>
                                        <div class="loginError">
                                    <?php echo $mensaje; ?>
                                        </div>
                                    <?php } ?> 
                                    <form action="index.php?accion=login" role="form" method="post">
                                        <div class="form-group">                                            
                                            <input type="text" class="form-control" name="usu_identificacion"  placeholder="Usuario">                                           
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="usu_clave" placeholder="Contraseña">
                                        </div>
                                    
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>                   
                </nav>
                <div class="pqrs ">    
                    <div class="row justify-content-center">            
                        <div class="card rounded-circle text-center"  data-toggle="tooltip" data-placement="top" title="Es una actuación por medio de la cual el usuario, de manera respetuosa, solicita a la empresa cualquier información relacionada con la prestación del servicio.">
                            <div class="card-body"> 
                                <a  data-toggle="modal" data-target="#pqrsf" id="peticion">
                                    <h4 class="card-text text-white">Peticion</h4>
                                </a>    
                            </div>            
                        </div>            
                        <div class="card rounded-circle text-center" data-toggle="tooltip" data-placement="bottom" 
                        title="Es la expresión o manifestación que le hace el usuario a la empresa por la inconformidad que le generó la prestación de nuestros servicios.">
                            <div class="card-body">                        
                                <a  data-toggle="modal" data-target="#pqrsf" id="queja">
                                    <h4 class="card-text text-white">Queja</h4>
                                </a>
                            </div>
                        </div>
                        <div class="card rounded-circle text-center" data-toggle="tooltip" data-placement="bottom" 
                        title="Es la oposición o contrariedad presentada por el usuario, con el objeto de que la empresa revise y evalúe una actuación relacionada con la prestación del servicio.">
                            <div class="card-body">
                                <a  data-toggle="modal" data-target="#pqrsf" id="reclamo">
                                    <h4 class="card-text text-white">Reclamo</h4>
                                </a>
                            </div>
                        </div>            
                        <div class="card rounded-circle text-center" data-toggle="tooltip" data-placement="bottom" 
                            title="Es una propuesta presentada por un usuario para incidir en el mejoramiento de un proceso de la empresa cuyo objeto está relacionado con la prestación del servicio. 
                            ">
                            <div class="card-body">
                                <a  data-toggle="modal" data-target="#pqrsf" id="sugerencia">
                                    <h4 class="card-text text-white">Sugerencia</h4>
                                </a> 
                            </div>
                        </div>
                        <div class="card rounded-circle text-center align-items-center" data-toggle="tooltip" data-placement="top" 
                        title="Es una actuación por medio de la cual el usuario, nos da a conocer su buena experiencia por la prestación de un servicio.">
                            <div class="card-body "> 
                                <a  data-toggle="modal" data-target="#pqrsf" id="felicitacion">
                                    <h4 class="card-text text-white">Felicitacion</h4>
                                </a>                  
                            </div>
                        </div> 
                    </div>    
                </div>
            </div>
        </div> 
        <div class="modal fade" id="pqrsf" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="index.php?accion=registrarPQRS" id="registrarPQRS" method="post" enctype="multipart/form-data">  
                            <div class="form-group">
                                <input type="text" class="form-control" id="tipo_pqrs" name="tipo_pqrs">
                            </div>                       
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Cedula" name="id_cliente">
                            </div>                       
                            <div class="form-group">
                                <select  class="form-control" name="sucursal_cod">
                                    <option value="">Seleccione su Opcion</option>
                                    <option value="5">Mercacentro 1</option>
                                    <option value="6">Mercacentro 2</option>
                                    <option value="7">Mercacentro 3</option>
                                </select>
                            </div>                       
                            <div class="form-group">
                                <textarea cols="30" rows="10" class="form-control"  name="texto"></textarea>
                            </div>                       
                            <div class="form-group">                                      
                                <input type="file" name="pqrs_evidencia" id="file-3" class="inputfile inputfile-3" accept=".pdf,.jpg,.png"/>
                                <label for="file-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="newinputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                <span class="newinputfile">Seleccionar Archivo</span> 
                                </label>
                            </div>                      
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="Vista/js/myscript.js"></script>
    </body>
</html>