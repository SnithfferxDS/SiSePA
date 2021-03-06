<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SISEPA | <?php echo $data['header']; ?></title>
        <link rel="stylesheet" href="/Assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/Assets/css/font-awesome.min.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">SiSePA</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home">Inicio <span class="sr-only">(current)</span></a></li>
                        <li class="Registrar"><a href="home">Registrar Socio <span class="sr-only">(current)</span></a></li>
                        <li class="abono"><a href="home">Nuevo Abono <span class="sr-only">(current)</span></a></li>
                        <li class="prestamo"><a href="home">Nuevo Prestamo <span class="sr-only">(current)</span></a></li>
                        <li class="Cuota"><a href="home">Calcular Cuota <span class="sr-only">(current)</span></a></li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input id="global_searcher" type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="regitrar" href="#">Socios</a></li>
                        <li><a class="" href="#">Reportes</a></li>
                        <li><a class="" href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a class="" href="#">Separated link</a></li>
                    </ul>
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>