<!DOCTYPE html>
<html lang="en">
    <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Tributar Asesores SAS</title>     

        <style>
        .timeline-Header {
            visibility: hidden !important;
            position: absolute !important;
        }
    </style>

     <style>
        .icon-circle-check:before {
            content: "\e042";
        }
        .icon-circle-cross:before {
            content: "\e043";
        }
        .slide {
            margin-top: 0px !important;
        }
    </style>

    </head>


    <!-- Estilos locales -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-inicio.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Icomoon Icon Fonts-->
    <link href="css/icomoon.css" rel="stylesheet">
         
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" rel="stylesheet">
    
    <body id="inm">
            <!-- Menu -->
                <div class="container">

                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">
                                <img src="img/logo.png" alt="" class="d-inline-block align-top">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample09">
                              <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item">
                                  <a class="nav-link" href="index.html">INICIO <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="servicios.html">SERVICIOS</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="experiencia.html">EXPERIENCIA</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="contacto.html">CONTACTO</a>
                                </li>                               
                              </ul>
                              <!-- <form class="form-inline my-2 my-md-0">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">INICIAR SESIÓN</button>
                              </form> -->
                            </div>
                          </nav>


    <!-- Inicio de Sesion Tributar -->

            <div class="col-12 sesion ">
                <div class="row">
                  <div class="col-6 ">
                    <div class="row align-items-center justify-content-center">

                      <div class="form col-10 ">
                    
                        <ul class="tab-group">
                          <div class="row">
                              <div class="col-12">
                                  <div class="tit1">
                                    <div class="col-6" id="idcli"><li class="tab active"><a id="clien" href="#signup">CLIENTE</a></li></div>
                                  </div>
                                  <div class="tit2">
                                    <div class="col-6" id="idemp"><li class="tab"><a id="emple" href="#login">EMPLEADO</a></li></div>
                                  </div>
                              </div>
                          </div>
                        </ul>
                        
                        <div class="tab-content ">
                          <div id="signup">                 
                            <form action="/" method="post">

                            <div class="top-row">
                              <div class="field-wrap">
                                <label>
                                  Correo Electrónico<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="off" />
                              </div>
                          
                              <div class="field-wrap">
                                <label>
                                  Contraseña<span class="req">*</span>
                                </label>
                                <input type="text"required autocomplete="off"/>
                              </div>
                            </div>

                            <p class="forgot"><a href="#">¿Olvidaste la contraseña?</a></p>
                            <p class="forgot"><a href="#">Recuérdame</a></p>
   
                            <button type="submit" class="button button-block"/>INICIAR SESIÓN</button>
                            
                            </form>

                          </div>
                          
                          <div id="login">
                            <form action="/" method="post">
                            
                              <div class="field-wrap">
                              <label>
                                Correo Electrónico<span class="req">*</span>
                              </label>
                              <input type="email"required autocomplete="off"/>
                            </div>
                            
                            <div class="field-wrap">
                              <label>
                                Contraseña<span class="req">*</span>
                              </label>
                              <input type="password"required autocomplete="off"/>
                            </div>
                            
                            <p class="forgot"><a href="#">¿Olvidaste la contraseña?</a></p>
                            <p class="forgot"><a href="#">Recuérdame</a></p>
                            
                            <button class="button button-block"/>INICIAR SESIÓN</button>
                            
                            </form>

                        </div>
                          </div>
                        </div><!-- tab-content -->
                    </div>          
                  </div> <!-- /form -->

                <!-- Formulario de resgistro -->
                
                <div class="col-6">
                  <div class="row align-items-center justify-content-center">
                    <div class="form col-10">
                      
                          <span>REGÍSTRATE</span>

                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt .</p>
                          
                          <div class="contenidoreg">
                            <div id="resgis">                 
                              <form action="/" method="post">

                              <div class="top-row">
                                <div class="field-wrap">
                                  <label>
                                    Nombre Completo<span class="req">*</span>
                                  </label>
                                  <input type="text" required autocomplete="off" />
                                </div>
                            
                                <div class="field-wrap">
                                  <label>
                                    Empresa en la que trabajas<span class="req">*</span>
                                  </label>
                                  <input type="text"required autocomplete="off"/>
                                </div>
                              </div>

                              <div class="field-wrap">
                                <label>
                                  Correo Electrónico<span class="req">*</span>
                                </label>
                                <input type="email"required autocomplete="off"/>
                              </div>
                              
                              <button type="submit" class="button button-block"/>ENVIAR SOLICITUD</button>
                              
                              </form>

                            </div>
                            
                            <div id="forreg">
                              <form action="/" method="post">
                              
                                <div class="field-wrap">
                                <label>
                                  Email Address<span class="req">*</span>
                                </label>
                                <input type="email"required autocomplete="off"/>
                              </div>
                              
                              <div class="field-wrap">
                                <label>
                                  Password<span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off"/>
                              </div>
                              
                              <p class="forgot"><a href="#">Forgot Password?</a></p>
                              
                              <button class="button button-block"/>Log In</button>
                              
                              </form>

                            </div>
                            
                          </div><!-- tab-content -->
                  </div>
                </div>      
              </div> <!-- /form -->
          </div>
      </div>
    </div>


                        <!-- Footer -->
                            <div class="footer">
                                <div class="container aling-center">
                                    <p>
                                        © TRIBUTAR ASESORES 2018 - Todos los derechos reservados - Diseñado por Noctua Boutique Creativa
                                    </p>
                                </div>
                            </div>                       
                    </body>


                    <!-- Scripts -->
                    <!-- Scrip Local -->
                    <script src="js/menu.js"></script>
                    <script src="js/login.js"></script>
                    <!-- Latest compiled and minified JavaScript -->                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
                    </script>

                    <script>
                      $(document).ready(function(){
                          $(".tit1").hover(function(){
                              $("#idcli").css("background-color", "#8D521A");
                              $("#clien").css("color", "#FFF");
                          }, function(){
                              $("#idcli").css("background-color", "#FFF");
                              $("#clien").css("color", "#8D521A");
                          });

                          $(".tit2").hover(function(){
                              $("#idemp").css("background-color", "#8D521A");
                              $("#emple").css("color", "#FFF");
                          }, function(){
                              $("#idemp").css("background-color", "#FFF");
                              $("#emple").css("color", "#8D521A");
                          });
                      });
                    </script>
                                        
                </link>
            </link>
        </link>
    </link>
</html>                        