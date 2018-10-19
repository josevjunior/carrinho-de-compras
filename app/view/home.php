<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../carrinho-de-compras/style.css" type="text/css">

</head>
    <body id="home">  <!-- id indicata a pagina; usado pelo CSS (menu) para indicar a pagina ativa.  Nao usa JS. -->

            <!-- inclui o header (cabecalho)  -->
           <?php include "./header.php"; ?>
           
           <!-- inclui o navbar -->
           <?php include "./nav.php"; ?>
           
            <main>
                <div><div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
            PROMOÇÃO DO DIA
        </div>
        <div class="panel-body"><img src="../image/carrinho.jpg" class="img-responsive" style="width:70% " alt="Image"></div>
        <div class="panel-footer">Carrinho pequeno movido a energia solar - madeira cor preto</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">MAIS VENDIDO</div>
        <div class="panel-body"><img src="../image/robô.jpg" class="img-responsive" style="width:70%" alt="Image"></div>
        <div class="panel-footer">
          <div>Brinquedo 3 em 1 Educacional Solar montagem DIY - azul + branco</div>
          <div style="text-align: right; font-size: 25px">R$ 45,00</div>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">PROMOÇÃO NO ATACADO</div>
        <div class="panel-body"><img src="../image/conector.jpg" class="img-responsive" style="width:70%" alt="Image"></div>
        <div class="panel-footer">Winyao USB1000F-LX USB 3.0 1000Mbps Placa de Vermelhoe de fibra óptica w / SFP Module óptica - Preto</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">COMPRE E GANHE</div>
        <div class="panel-body"><img src="../image/adaptador.jpg" class="img-responsive" style="width:70%" alt="Image"></div>
        <div class="panel-footer">Adaptador de rede sem fio Wi-Fi Mini 802.11 n 300Mbps USB - preto</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">ECONOMISE 10%</div>
        <div class="panel-body"><img src="../image/placa.jpg" class="img-responsive" style="width:70%" alt="Image"></div>
        <div class="panel-footer">Geforce GTX750Ti 2GB GDDR5 placa gráfica de 128 bits para o jogo NVIDIA</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">LANÇAMENTO</div>
        <div class="panel-body"><img src="../image/helicóptero.jpg" class="img-responsive" style="width:70%" alt="Image"></div>
        <div class="panel-footer">JXD 532 RC helicóptero, 2.4ghz 6 eixos com fantásticas luzes da noite LED</div>
      </div>
    </div>
  </div>
</div><br><br></div>  <!-- aqui voce insere o conteudo da pagina. -->
            </main>
            
            <!-- inclui o footer (rodape da pagina) -->
           <?php include "./footer.php"; ?>
           
    </body>
</html>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./mycss.css" type="text/css">