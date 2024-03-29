<?php
    include_once '../controle/controleEvento.php';
    include_once '../modelo/modeloEvento.php';

    if( !empty($_POST['form_submit']) ) {
        controleEvento::confirmar();
    }else{
      $objEvento = modeloEvento::findEvento($_GET['id']);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="img/favicon.ico">
    <title>SiGer</title>

    <!-- Bootstrap URL - CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="../../reys/css/theme.css" rel="stylesheet">
    <!-- Ajax Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body role="document">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">[ SisGer ] Sistema Gerenciador de Certificado</a>
        </div>
	<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li class="active">
                      <a href="../index.php"> Início </a>
              </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
        <br>
        <div class="page-header">
            <h2 class="form-signin-heading">
                <div id="m_texto"> Alterar Evento </div>
            </h2>
        </div>

        <form class="form" method="post" action="viewEventoAlterar.php">
            <input TYPE="hidden" NAME="form_submit" VALUE="OK">
            <input TYPE="hidden" NAME="id" VALUE="<?php echo $objEvento->id; ?>">

            <div class='row'>
                <div class="col-sm-6">
                    <label>Nome: </label>
                    <input type="text" name="nome" value="<?php echo $objEvento->nome; ?>" class="form-control">
                </div>
                <div class="col-sm-3">
                    <label>Tipo: </label>
                    <input type="text" name="tipo" value="<?php echo $objEvento->tipo; ?>" class="form-control">
                </div>
                <div class="col-sm-3">
                    <label>Data: </label>
                    <input type="text" name="data_evento" value="<?php echo $objEvento->data_evento; ?>" class="form-control">
                </div>
            </div>
            <br>
            <button type="submit" name="acao" value="confirmar" class="btn btn-success btn-block">
                <b>Confirmar Alteração</b>
            </button>
        </form>

	<div class="page-header">
		<b>&copy;2019&nbsp;&nbsp;&raquo;&nbsp;&nbsp; </b>
	</div>
    </div> <!-- /container -->
  </body>
</html>
