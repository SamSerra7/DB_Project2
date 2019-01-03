<!--

    Document   : newpLAYLIST
    Created on : 01/11/2018, 10:58:37 PM
    Author     : Samuel

-->
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Proyecto 2 Bases de Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body >

        <!-- NavBar-->   
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="/Proyecto2_BasesDatos/view/showVideos.php">Reproductor</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Autores
                            <span class="caret"></span>
                        </a>
                        
                        <ul class="dropdown-menu"> 
                            <li><a href="../view/newAuthor.html">Agregar nuevo</a></li>
                            <li><a href="../view/consultAuthor.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Grupos
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../view/newGroup.php">Agregar nuevo</a></li>
                            <li><a href="../view/consultGroup.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Videos
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../view/newVideo.php">Agregar nuevo</a></li>
                            <li><a href="../view/consultVideo.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Lista de Reproducción
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../view/newPlaylist.php">Agregar nueva</a></li>
                            <li><a href="../view/consultPlaylist.php">Buscar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        

    <!-- container -->
    <div class="container"> 
        <form method="post" action="../controller/insertPlaylist.php" class="form-signin">
            <div class="panel panel-info" >
                <div class="panel panel-heading" align="center">
                    <h2 class="form-signin-heading">Llene el formulario para registrar una lista de reproducción</h2>
                    <hr/>
                </div>
                <div class="panel-body">
                   
                    <label >Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required/>
                    <br/>
                    <select name="videos[]"  class="form-control" size="7" multiple>
                    <option value="" disabled selected>--SELECCIONE UNO O VARIOS VIDEOS--</option>
                    <?php
                    
                        //llama al modelo y la vista
                        require_once '../model/videos_model.php';

                        $video = new Videos_model();
                        $videoList  = $video->get_all_videos();

                        foreach ($videoList as $register){
                        echo'
                            <option value="'.$register["url"].'" >'.$register["name"].'</option>
                            ';
                        }
                    ?>
                    </select>
                    <br/>
                    <button class="btn btn-lg btn-primary btn-block" >Crear Lista</button>
                </div>
            </div>
        </form>

    </div>


    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>