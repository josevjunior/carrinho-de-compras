<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./mycss.css" type="text/css">
        <title>HOME STAR COMPUTADORES</title>
        <!--
        Pagina HTML com quatro subdivisoes: header, nav, main e footer.
        -->
    </head>
    <body id="home">  <!-- id indicata a pagina; usado pelo CSS (menu) para indicar a pagina ativa.  Nao usa JS. -->

            <!-- inclui o header (cabecalho)  -->
           <?php include "./header.php"; ?>
           
           <!-- inclui o navbar -->
           <?php include "./nav.php"; ?>
           
            <main>
                <div>
                    <h2>Sobre a loja Star Computadores</h2>
                    <p>
                        bla bla bla bla xxx x x xxxx 
                    </p>
                </div>  <!-- aqui voce insere o conteudo da pagina. -->
            </main>
            
            <!-- inclui o footer (rodape da pagina) -->
           <?php include "./footer.php"; ?>
           
    </body>
</html>
