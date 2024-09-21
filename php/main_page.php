<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-image: url(../img/bg-img.jpg)">

    <div class="container rounded p-5 mt-5 text-center text-light bg-dark">
        <h1>Bem-vindo ao zap dos arrays!</h1>
        <div class="border border-info">
            <?php
            function adicionarExclamacao($item)
            {
                return $item . "<img src='../img/excl.png'>";
            }

            $array = ["Opa", "Tudo", "Bem", "<img src='../img/int.png'>"];
            echo "<div class='border border-success'>";
            echo "<h2>Array inicial:</h2>";
            print_r($array);
            echo "</div>";

            echo "<div class='border border-light'>";
            $excl = array_map("adicionarExclamacao", $array);
            echo "<h2 class='mt-3'>Array com exclamação:</h2>";
            print_r($excl);
            echo "</div>";

            echo "<div class='border border-warning'>";

            $fill = array_fill(0, 1, "<br><br>Sim. E você<img src='../img/int.png'>");
            $answer = array_merge($array, $fill);
            echo "<h2 class='mt-3'>Continuando a conversa:</h2>";
            print_r($answer);
            echo "<br>";
            echo "</div>";

            echo "<div class='border border-success'>";
            echo "<div class='border border-light'>";
            echo "<h2 class='mt-3'>Resposta 2:</h2>";
            $arr2 = ["Não", "estou", "bem", "<img src='../img/ret.png'>"];
            print_r($arr2);
            echo "<br>";
            echo "</div>";

            echo "<div class='border border-success'>";
            array_shift($arr2);
            $ay = array_fill(0, 1, "Sim");
            $arr2 = array_merge($ay, $arr2);
            print_r($arr2);
            echo "</div>";
            echo "</div>";

            echo "<div class='bg-info text-dark m-3 rounded'>";
            echo "<h2 class='mt-3'>Resultado:</h2>";
            $implodedarray1 = implode(" ", $array);
            $implodedarray2 = implode(" ", $answer);
            echo $implodedarray2 . "<br><br>";
            $implodedarray3 = implode(" ", $arr2);
            echo $implodedarray3 . "<br><br>";
            echo "</div>";
            ?>
        </div><br><br>
        <p>Para mais, me siga no github: <a href="https://github.com/MiguelSouza2"
                target="_blank">https://github.com/MiguelSouza2</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>