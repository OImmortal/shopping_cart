<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th>Nome</th>
            <th>Preco</th>
            <th>Comprar</th>
        </thead>
        <?php
        for ($i = 0; $i < count($arrayItem); $i++) {
            ?>


            <tbody>
                <td>
                    <?php echo $arrayItem[$i]->getNome() ?>
                </td>
                <td>
                    <?php echo $arrayItem[$i]->getPreco() ?>
                </td>
                <td><a href="?itemid=<?php echo $arrayItem[$i]->getId() ?>">Comprar</a></td>
            </tbody>


        <?php } ?>
    </table>

    <table>
        <thead>
            <th>Carrinho</th>
        </thead>

        <?php for ($i = 0; $i < count($_SESSION['carrinho']); $i++) { ?>

            <tbody>
                <td>
                    <?php echo $_SESSION['carrinho'][$i]->getItem()->getNome() ?>
                </td>
                <td>
                    <?php echo ($_SESSION['carrinho'][$i]->getItem()->getPreco()) ?>
                </td>
            </tbody>

        <?php } ?>

        <tfoot>
            <td>
                <?php echo "Total: " . $_SESSION['precoT'] ?>
            </td>
            <td><a href="?esvaziar">Esvaziar Carrinho</a></td>
            <td><a href="?comprar">Comprar</a></td>
        </tfoot>
    </table>
    <a href="?sair">sair</a>
</body>

</html>