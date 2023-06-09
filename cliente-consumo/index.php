
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/alertify.core.css" />
    <link rel="stylesheet" href="css/alertify.default.css" />
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">DSS</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
                    <li><a href="insertar.php">Agregar cliente</a></li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="text-center text-uppercase">Gestion de clientes</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="insertar.php" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="row" style="margin-top:30px;">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Apellidos</th>
                            <th class="text-center">Edad</th>
                            <th class="text-center">Salario</th>
                            <th class="text-center">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="p-5 bg-dark">
        <div class="my-auto">
            <div class="copyright pt-4 pb-4 text-center my-auto text-white">
                <span>Copyright &copy; 2023 - Investigacion DSS</span>
            </div>
        </div>
    </footer>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/alertify.js"></script>
    <script type="text/javascript">
        var mensaje = "";
        var title = "";
        //Creamos la instancia
        let params = new URLSearchParams(document.location.search);
        //Accedemos a los valores
        let mensaj = params.get("msj");
        let titulo = params.get("titulo");

        mensaje = mensaj;
        title = titulo;
        if (mensaje == "si") {
            alertify.success(title);

        } else if (mensaje == "no") {
            alertify.error(title);
        }
    </script>
</body>

</html>