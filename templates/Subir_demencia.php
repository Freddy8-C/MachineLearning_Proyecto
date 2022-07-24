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
    <link rel="stylesheet" href="{{ url_for('static', filename='css/Estilo_botones.css')}}">
    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <title>UPLOAD</title> 
</head>
    <nav class="navbar navbar-expand-lg navbar-Info bg-color">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="{{ url_for('principal')}}">INDEX</a> -->
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
    <h1>UPLOAD</h1>


    <div> 
        <div class="cards">
            <div class="card3"> 
            Requirements to upload the dataset, which must take into account that it contains 
            the fields:
            <br>
            Definition, Source (book or article where the definition was obtained), 
            Publisher, Approach (Biomedical, Psychosocial-Community or Daily).
            </div> 
        </div>
    </div>
<br>
    <form action="/upload" method="POST" enctype="multipart/form-data" style="text-align: center"> 
     
        <input class="form-control" id="upfile" type="file" name="upfile" accept=".csv" /> 
        <input type="submit" id="send-signup" class="btn btn-dark" name="signup" value="Send" />
    </form>
<br> 
    <form action="/quitar" method="POST"  style="text-align: center" > 
        <input type="submit" id="send-signup" class="btn btn-dark" name="signup" value="Delete" />
    </form>
     


</body>


<footer>
<p>
Elaborated by: Patricio Cadena - Freddy Camacho - Saskia Guerrero - Jefferson Sandoval <br> Students of the Salesian Polytechnic University.
</p>
</footer>

</html>