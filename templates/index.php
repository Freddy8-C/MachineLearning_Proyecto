<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

<!-- LIBRERÍA BOOSTRAP -->
    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> 
<!-- Estilos -->
<link rel="stylesheet" href="{{ url_for('static', filename='css/Estilos.css' ) }}">
<link rel="stylesheet" href="{{ url_for('static', filename='css/Estilo_botones.css' ) }}">
<!-- Script --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 



<!-- <link  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link  href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link  href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 -->



<!-- <div class="logo">
    <img src="{{ url_for('static', filename='img/Logo.png' ) }}" alt="Logo Machine Learning" />
</div> -->


    <title>Machine Learning</title>
</head>

    <nav class="navbar navbar-expand-lg navbar-Info bg-color">
        <div class="container-fluid">           
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavInfoDropdown" aria-controls="navbarNavInfoDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavInfoDropdown">
                    <ul class="navbar-nav"> 
                        <a class="navbar-brand" href="{{ url_for('principal')}}">HOME</a>
                        <a class="navbar-brand" href="{{ url_for('consulta')}}" >QUERY </a> 
                        <a class="navbar-brand" href="{{ url_for('subir_demencia')}}">SUBIR DEMENCIA</a> 
                    </ul>
                </div>
        </div>
    </nav>
    <body>    
 
    <h1>DESCRIPTION OF THE PROJECT</h1> 
 
    <div> 
        <div class="cards">
            <div class="card1"> 
                MISIÓN
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="card2"> 
            VISIÓN 
                <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div> 
        </div>
    </div>


   </div>
</div> 
 

    <div class="sticky-container">
        <ul class="sticky">
            <li>
            <i class="bi bi-github"></i>
                <a href="https://github.com/Spatriciopk/Prueba" target="_blank">Repository<br>Project </a> 
            </li>
            <li>
            <i class="bi bi-git"></i>
               <a href="https://github.com/Freddy8-C/Proyecto_MachineLearning" target="_blank">Repository<br>CSV </a>
            </li>

            <li>
            <i class="bi bi-globe"></i>
                <a href="https://machinlearning2.herokuapp.com/" target="_blank">Website<br>Machine Learning</a>
            </li> 

            <li>
                <img src="{{ url_for('static', filename='img/Flask.png')}}" width="25" height="25">
                <a href="https://flask.palletsprojects.com/en/2.1.x/installation/" target="_blank">Website<br>Flask</a>
            </li>

            <li>
                <img src="{{ url_for('static', filename='img/Heroku.png')}}" width="25" height="25">
                <a href="https://www.heroku.com/" target="_blank">Website<br>Heroku</a>
            </li>
            <li>
                <img src="{{ url_for('static', filename='img/VisualSC.png')}}" width="25" height="25">
                <a href="https://code.visualstudio.com/" target="_blank"> Visual<br>Studio Code</a>
            </li>
        </ul>
    </div>  
 
</body> 


<footer>
<p>
Elaborated by: Patricio Cadena - Freddy Camacho - Saskia Guerrero - Jefferson Sandoval <br> Students of the Salesian Polytechnic University.
</p>
</footer>

</html>