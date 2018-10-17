<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./mycss.css" type="text/css">

</head>

    <body id="home">  <!-- id indicata a pagina; usado pelo CSS (menu) para indicar a pagina ativa.  Nao usa JS. -->

            <!-- inclui o header (cabecalho)  -->
           <?php include "./header.php"; ?>
           
           <!-- inclui o navbar -->
           <?php include "./nav.php"; ?>
           
            <main>
                <div>
                    <h2>Produtos da Star Computadores</h2>
                    <p>
                        bla bla bla bla xxx x x xxxx 
                    </p>
                </div>  <!-- aqui voce insere o conteudo da pagina. -->
            </main>
            
            <!-- inclui o footer (rodape da pagina) -->
           <?php include "./footer.php"; ?>
           
    </body>
</html>
