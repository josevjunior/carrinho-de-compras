<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Carrinho</title>
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
                        <h1 class="card-title">Carrinho</h1>
                        <a class="btn btn-light" href="index.php">Home</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="font-weight: bold">R$ <?php echo number_format($carrinho->getTotal(), 2, ",", ".") ?></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; foreach ($carrinho->getItens() as $item) : ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $item->getProduto()->getNome(); ?></td>
                                        <td><form action="index.php?page=carrinho&action=alterarQuantidade" method="post">
                                                <input name="id" type="hidden" value="<?php echo $item->getId() ?>"/>
                                                <input name="quantidade" type="text" style="width: 10%" value="<?php echo $item->getQuantidade() ?>"/>
                                                <button type="submit" class="btn btn-primary btn-xs">Alterar</button>
                                            </form>
                                        <td><?php echo 'R$ ' . number_format($item->getProduto()->getPreco() != null ?
                                                            $item->getProduto()->getPreco() : 0, 2, ",", "."); ?></td>
                                        <td><?php echo 'R$ ' . number_format($item->getSubTotal() != null ?
                                                            $item->getSubTotal() : 0, 2, ",", "."); $i++;?></td>
                                        <td><form action="index.php?page=carrinho&action=excluir" method="post">
                                                <input name="id" type="hidden" value="<?php echo $item->getId() ?>"/>
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                            </form>
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