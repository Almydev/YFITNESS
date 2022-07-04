<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YFITNESS</title>
   
    <!-- CSS bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Animacion Flecha Inicio -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- JS bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>

</head>
<body>
    <header>
        <nav class="navbar bg-white">
            <form class="container-fluid justify-content-end">
                <a class="btn btn-light m-1" data-bs-toggle="modal" href="#exampleModalToggle" role="button" style="border: 1px solid #18A0FB; color: #18A0FB;">Login</a>
                <a class="btn btn-primary m-1" data-bs-toggle="modal" href="#exampleModalToggle2" role="button" style="background-color:#18A0FB ;">Registrar</a>
            </form>
        </nav>
        
        

    </header>
    <div id="imagenLogo">
        <img src="/images/logoYfitness/logoYF.png" class="img-fluid mh-100"  alt="Logo Yfitness" id="logo">
    </div>
    <div id="flechita">
        <a href="#"><img src="/images/animationScroll/flechita.png" style="width: 50px;" id="flecha" class="animate__animated animate__slideOutDown animate__infinite	infinite"></a>
    </div>


    <!--MODAL LOGIN-->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-around">
                <picture>
                    
                    <img src="/images/login/logoLogin.png" class="img-fluid" style="border-radius: 12px;">
                  </picture>
                <div id="form" class="flex-grow-2 ms-3">
                    <form>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-white" id="basic-addon1"> <img src="/images/login/user.png" alt="" style="width: 20px;"> </span>
                            <input type="text" class="form-control" id="txtNombreUsuarioL" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-white" id="basic-addon2"> <img src="/images/login/padlock.png" alt="" style="width: 20px;"> </span>
                            <input type="password" class="form-control" id="txtPasswordL" placeholder="Password">
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-light">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
            
          </div>
        </div>
    </div>

    <!--MODAL REGISTRO-->
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex justify-content-around align-items-center" style="margin:40px; padding: 10px;">
                    <div id="form" class="" style="width: 50%; padding: 5%;">
                        <form action="/php/registro.php" method="POST">
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nombre" id="txtNombre" name="nombre">
                                </div> 
                            </div>
                            
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Primer Apellido" id="txtPrimerApellido" name="primerApellido" >
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Segundo Apellido" id="txtSegundoApellido" name="segundoApellido">
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email" id="txtEmail" name="correo">
                                </div> 
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Teléfono" id="txtTelefono" name="telefono" >
                                </div>
                                <div class="col">
                                    <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id="fechaNacimiento" name="fechaNacimiento">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Username" id="txtNombreUsuarioR" name="usuarioRegistro">
                                </div> 
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Password" id="txtPasswordR" name="passR">
                                </div>
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Repeat Password" id="txtPasswordRR" name="passwordR">
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-light">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" name="btnRegistrar" id="btnRegistrar">Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <picture style="width: 50%;">
                        <img src="/images/registro/mancuernas.jpg" class="img-fluid" style="border-radius: 12px; padding:auto;">
                    </picture> 
                </div>
                        
            </div>
                    
        </div>
            
    </div>

    
    <div class="wrapper">
        <div class="player">
            <video id="video" autoplay poster="/images/videoPlayer/poster.jpg" src="/videos/video.mp4" width="400px" onloadstart="this.volume=0.02"></video> 
            
            <div class="player-overlay">
                <div class="player-actions">
                    <button class="button" id="backward" aria-label="Retroceder 10 segundos" title="Retroceder 10 segundos"></button>
                    <button class="button" id="play" aria-label="Reproducir" title="Reproducir"></button>
                    <button class="button" id="pause" hidden aria-label="Pausar" title="Pausar"></button>
                    <button class="button" id="forward" aria-label="Adelantar 10 segundos" title="Adelantar 10 segundos"></button> 
                </div>
                <div class="player-progress">
                    <input id="progress" type="range" min="0" max="100" step="1">
                </div>
            </div>
        </div>

    </div>
       
   

</body>
</html>