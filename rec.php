<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexi.css">
    <title>Sua Nova Nota</title>
</head>
<body>
    <?php
    //variables
    $n1 = $_POST['norg'];
    $n2 = $_POST['nrec'];
    $nn = ($n1+($n2*1.5))/2.5;
    //nnlenght
    if(strlen($nn) > 3){
        $nnn = substr($nn, 0, 3);
        } else{
        $nnn= $nn;
        }
    //color and situation
    if ($n1<6){
        $n1class = "redclass";
    }elseif ($n1>=6){
        $n1class = "greenclass";
    }
    if ($n2<6){
        $n2class = "redclass";
    }elseif ($n2>=6){
        $n2class = "greenclass";
    }
    if ($nn<6){
        $nnclass = "redclass";
    }elseif ($nn>=6){
        $nnclass = "greenclass";
    }
    ?>
    <table border="1px">
            <tr>
                <th scope="col">Nota Original</th>
                <th scope="col">Nota da Recuperção</th>
                <th scope="col">Nova Nota</th>
            </tr>
            <tr>
                <td><p class="<?php echo "$n1class"?>"><?php echo "$n1"?></p></td>
                <td><p class="<?php echo "$n2class"?>"><?php echo "$n2"?></p></td>
                <td><p class="<?php echo "$nnclass"?>"><?php echo "$nnn"?></p></td>
            </tr>
        </table>
        <a href="index.html"><button >Voltar para médias</button></a>
        <a href="rec.html"><button >Voltar para calculo rec</button></a>
</body>
</html>