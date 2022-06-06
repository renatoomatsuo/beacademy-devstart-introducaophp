<formação de ação="" método="post">
    <nome de entrada="n1" tipo="texto" espaço reservado="Numero 1">
    <nome de entrada="n2" tipo="texto" espaço reservado="Numero 2">
    <br><br>
    <nome do botão="soma">Somar</botão>
    <nome do botão="subtrai">Subtrair</botão>
    <nome do botão="multiplica">Multiplicar</botão>
    <nome do botão="divide">Dividir</botão>

</forma>

<?php
    se ($_POST) {

        se (isset ($_POST['subtrai'])){
            echo $_POST['n1'] - $_POST['n2'];
        }
        se (isset ($_POST['soma'])){
            echo $_POST['n1'] + $_POST['n2'];
        }
        se (isset ($_POST['divide'])){
            echo $_POST['n1'] / $_POST['n2'];
        }
        se (isset ($_POST['multiplica'])){
            echo $_POST['n1'] * $_POST['n2'];
        }
    }

?>
