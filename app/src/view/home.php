<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h1 class="card-title">Produtos</h1>
                            <a href="index.php?page=carrinho" class="btn btn-primary">Consultar Carrinho</a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($produtos as $item) : ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $item->getNome(); ?></td>
                                        <td>
                                            <?php
                                            $i++;
                                            echo 'R$ ' . number_format($item->getPreco() != null ?
                                                            $item->getPreco() : 0, 2, ",", ".");
                                            ?>
                                        </td>
                                        <td>
                                            <form action="index.php?page=carrinho&action=adicionar" method="post">
                                                <input type="hidden" name="id" value="<?php echo $item->getId() ?>"/>
                                                <button type="submit" 
                                                        style="width: 100%" 
                                                        class="btn btn-primary">Adicionar</button>
                                            </form>

                                        </td>
                                    </tr>
<?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>