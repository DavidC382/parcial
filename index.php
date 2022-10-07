<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escuela Normal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1 class="text-center w-100">Escuela</h1>
    <div class="container mt-4">
        <form action="proceso_registro.php" method="POST">
            <h3 class="text-center w-100">&nbsp; Estudiante</h3>
            
             <div class="row w-100 py-3 text-center mt-4">
                 <center><button type="button" name="butper1" id="butper1" class="btn btn-success w-25" onclick="opc1()">Opcion 1</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <button type="button" name="butper2" id="butper3" class="btn  btn-warning w-25" onclick="opc2()">Opcion 2</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <button type="button" name="butper3" id="butper3" class="btn btn-danger w-25" onclick="opc3()">Opcion 3</button></center>  
            </div>
          
            <div class="row">
                <div class="col-6 form-group">
                    <label for="nom" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>

                <div class="col-6 form-group">
                    <label for="id" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nom" name="nombre">
                </div>
            </div>


            <div class="row">
                <div class="col-6 form-group">
                    <label for="dir" class="form-label">Materi</label>
                    <input type="text" class="form-control" id="can" name="materia">
                </div>

                <div class="col-6 form-group">
                    <label for="estatura" class="form-label">Nota</label><br>
                    <input type="number" class="form-control" id="nota" name="nota">
                </div>
            </div>
            <?php 
                include 'bd\conexion.php';
                $sql = 'SELECT id, nombre, materia, nota from estudiantes';
                    $resultado = $conexion->query($sql);

                    while ($row = $resultado) {
                      echo '<option value='.$row['id'].'>'.$row['nombre'].'>'.$row['materia'].'>'.$row['nota'].'</option>';
                    }
                    mysqli_close($conexion);  
            ?>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="dir" class="form-label" id="res" name="res">Resultado</label>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="js/funciones.js"></script>
</body>

</html>