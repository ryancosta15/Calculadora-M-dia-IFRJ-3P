<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexi.css">
    <title>Suas notas</title>
</head>
<body>
    <?php
    //variables

    //Artes
    $n1artes = $_POST['n1artes'];
    $n2artes = $_POST['n2artes'];
    $medartes = ($n1artes+($n2artes*2))/3;
    //medlenght
    if(strlen($medartes) > 3){
        $nmedartes = substr($medartes, 0, 3);
        } else{
        $nmedartes= $medartes;
        }
    //color and situation
    if ($n1artes<6){
        $n1artesclass = "redclass";
    }elseif ($n1artes>=6){
        $n1artesclass = "greenclass";
    }
    if ($n2artes<6){
        $n2artesclass = "redclass";
    }elseif ($n2artes>=6){
        $n2artesclass = "greenclass";
    }
    if ($medartes<6){
        $medartesclass = "redclass";
        $artessit = "Reprovado";
    }elseif ($medartes>=6){
        $medartesclass = "greenclass";
        $artessit = "Aprovado";
    }

    //Banco De Dados
    $n1bdd = $_POST['n1bdd'];
    $n2bdd = $_POST['n2bdd'];
    $medbdd = ($n1bdd+($n2bdd*2))/3;
    //medlenght
    if(strlen($medbdd) > 3){
        $nmedbdd = substr($medbdd, 0, 3);
        } else{
        $nmedbdd= $medbdd;
        }
    //color and situation
    if ($n1bdd<6){
        $n1bddclass = "redclass";
    }elseif ($n1bdd>=6){
        $n1bddclass = "greenclass";
    }
    if ($n2bdd<6){
        $n2bddclass = "redclass";
    }elseif ($n2bdd>=6){
        $n2bddclass = "greenclass";
    }
    if ($medbdd<6){
        $medbddclass = "redclass";
        $bddsit = "Reprovado";
    }elseif ($medbdd>=6){
        $medbddclass = "greenclass";
        $bddsit = "Aprovado";
    }

    //Biologia
    $n1bio = $_POST['n1bio'];
    $n2bio = $_POST['n2bio'];
    $medbio = ($n1bio+($n2bio*2))/3;
    //medlenght
    if(strlen($medbio) > 3){
        $nmedbio = substr($medbio, 0, 3);
        } else{
        $nmedbio= $medbio;
        }
    //color and situation
    if ($n1bio<6){
        $n1bioclass = "redclass";
    }elseif ($n1bio>=6){
        $n1bioclass = "greenclass";
    }
    if ($n2bio<6){
        $n2bioclass = "redclass";
    }elseif ($n2bio>=6){
        $n2bioclass = "greenclass";
    }
    if ($medbio<6){
        $medbioclass = "redclass";
        $biosit = "Reprovado";
    }elseif ($medbio>=6){
        $medbioclass = "greenclass";
        $biosit = "Aprovado";
    }

    //Dev. Web
    $n1dev = $_POST['n1dev'];
    $n2dev = $_POST['n2dev'];
    $meddev = ($n1dev+($n2dev*2))/3;
    //medlenght
    if(strlen($meddev) > 3){
        $nmeddev = substr($meddev, 0, 3);
        } else{
        $nmeddev= $meddev;
        }
    //color and situation
    if ($n1dev<6){
        $n1devclass = "redclass";
    }elseif ($n1dev>=6){
        $n1devclass = "greenclass";
    }
    if ($n2dev<6){
        $n2devclass = "redclass";
    }elseif ($n2dev>=6){
        $n2devclass = "greenclass";
    }
    if ($meddev<6){
        $meddevclass = "redclass";
        $devsit = "Reprovado";
    }elseif ($meddev>=6){
        $meddevclass = "greenclass";
        $devsit = "Aprovado";
    }

    //Ed. Fisica
    $n1edf = $_POST['n1edf'];
    $n2edf = $_POST['n2edf'];
    $mededf = ($n1edf + ($n2edf*2))/3;
    //medlenght
    if(strlen($mededf) > 3){
        $nmededf = substr($mededf, 0, 3);
        } else{
        $nmededf= $mededf;
        }
    //color and situation
    if ($n1edf<6){
        $n1edfclass = "redclass";
    }elseif ($n1edf>=6){
        $n1edfclass = "greenclass";
    }
    if ($n2edf<6){
        $n2edfclass = "redclass";
    }elseif ($n2edf>=6){
        $n2edfclass = "greenclass";
    }
    if ($mededf<6){
        $mededfclass = "redclass";
        $edfsit = "Reprovado";
    }elseif ($mededf>=6){
        $mededfclass = "greenclass";
        $edfsit = "Aprovado";
    }

    //Eletricidade
    $n1eletro = $_POST['n1eletro'];
    $n2eletro = $_POST['n2eletro'];
    $medeletro = ($n1eletro+($n2eletro*2))/3;
    //medlenght
    if(strlen($medeletro) > 3){
        $nmedeletro = substr($medeletro, 0, 3);
        } else{
        $nmedeletro= $medeletro;
        }
    //color and situation
    if ($n1eletro<6){
        $n1eletroclass = "redclass";
    }elseif ($n1eletro>=6){
        $n1eletroclass = "greenclass";
    }
    if ($n2eletro<6){
        $n2eletroclass = "redclass";
    }elseif ($n2eletro>=6){
        $n2eletroclass = "greenclass";
    }
    if ($medeletro<6){
        $medeletroclass = "redclass";
        $eletrosit = "Reprovado";
    }elseif ($medeletro>=6){
        $medeletroclass = "greenclass";
        $eletrosit = "Aprovado";
    }

    //Filosofia
    $n1filo = $_POST['n1filo'];
    $n2filo = $_POST['n2filo'];
    $medfilo = ($n1filo+($n2filo*2))/3;
    //medlenght
    if(strlen($medfilo) > 3){
        $nmedfilo = substr($medfilo, 0, 3);
        } else{
        $nmedfilo= $medfilo;
        }
    //color and situation
    if ($n1filo<6){
        $n1filoclass = "redclass";
    }elseif ($n1filo>=6){
        $n1filoclass = "greenclass";
    }
    if ($n2filo<6){
        $n2filoclass = "redclass";
    }elseif ($n2filo>=6){
        $n2filoclass = "greenclass";
    }
    if ($medfilo<6){
        $medfiloclass = "redclass";
        $filosit = "Reprovado";
    }elseif ($medfilo>=6){
        $medfiloclass = "greenclass";
        $filosit = "Aprovado";
    }

    //Fisica
    $n1fis = $_POST['n1fis'];
    $n2fis = $_POST['n2fis'];
    $medfis = ($n1fis+($n2fis*2))/3;
    //medlenght
    if(strlen($medfis) > 3){
        $nmedfis = substr($medfis, 0, 3);
        } else{
        $nmedfis= $medfis;
        }
    //color and situation
    if ($n1fis<6){
        $n1fisclass = "redclass";
    }elseif ($n1fis>=6){
        $n1fisclass = "greenclass";
    }
    if ($n2fis<6){
        $n2fisclass = "redclass";
    }elseif ($n2fis>=6){
        $n2fisclass = "greenclass";
    }
    if ($medfis<6){
        $medfisclass = "redclass";
        $fissit = "Reprovado";
    }elseif ($medfis>=6){
        $medfisclass = "greenclass";
        $fissit = "Aprovado";
    }

    //Historia
    $n1hist = $_POST['n1hist'];
    $n2hist = $_POST['n2hist'];
    $medhist = ($n1hist+($n2hist*2))/3;
    //medlenght
    if(strlen($medhist) > 3){
        $nmedhist = substr($medhist, 0, 3);
        } else{
        $nmedhist= $medhist;
        }
    //color and situation
    if ($n1hist<6){
        $n1histclass = "redclass";
    }elseif ($n1hist>=6){
        $n1histclass = "greenclass";
    }
    if ($n2hist<6){
        $n2histclass = "redclass";
    }elseif ($n2hist>=6){
        $n2histclass = "greenclass";
    }
    if ($medhist<6){
        $medhistclass = "redclass";
        $histsit = "Reprovado";
    }elseif ($medhist>=6){
        $medhistclass = "greenclass";
        $histsit = "Aprovado";
    }

    //Ingles
    $n1ing = $_POST['n1ing'];
    $n2ing = $_POST['n2ing'];
    $meding = ($n1ing+($n2ing*2))/3;
    //medlenght
    if(strlen($meding) > 3){
        $nmeding = substr($meding, 0, 3);
        } else{
        $nmeding= $meding;
        }
    //color and situation
    if ($n1ing<6){
        $n1ingclass = "redclass";
    }elseif ($n1ing>=6){
        $n1ingclass = "greenclass";
    }
    if ($n2ing<6){
        $n2ingclass = "redclass";
    }elseif ($n2ing>=6){
        $n2ingclass = "greenclass";
    }
    if ($meding<6){
        $medingclass = "redclass";
        $ingsit = "Reprovado";
    }elseif ($meding>=6){
        $medingclass = "greenclass";
        $ingsit = "Aprovado";
    }
    
    //Portugues
    $n1pt = $_POST['n1pt'];
    $n2pt = $_POST['n2pt'];
    $medpt = ($n1pt+($n2pt*2))/3;
    //medlenght
    if(strlen($medpt) > 3){
        $nmedpt = substr($medpt, 0, 3);
        } else{
        $nmedpt= $medpt;
        }
    //color and situation
    if ($n1pt<6){
        $n1ptclass = "redclass";
    }elseif ($n1pt>=6){
        $n1ptclass = "greenclass";
    }
    if ($n2pt<6){
        $n2ptclass = "redclass";
    }elseif ($n2pt>=6){
        $n2ptclass = "greenclass";
    }
    if ($medpt<6){
        $medptclass = "redclass";
        $ptsit = "Reprovado";
    }elseif ($medpt>=6){
        $medptclass = "greenclass";
        $ptsit = "Aprovado";
    }
       
    //Matematica
    $n1mat = $_POST['n1mat'];
    $n2mat = $_POST['n2mat'];
    $medmat = ($n1mat+($n2mat*2))/3;
    //medlenght
    if(strlen($medmat) > 3){
        $nmedmat = substr($medmat, 0, 3);
        } else{
        $nmedmat= $medmat;
        }
    //color and situation
    if ($n1mat<6){
        $n1matclass = "redclass";
    }elseif ($n1mat>=6){
        $n1matclass = "greenclass";
    }
    if ($n2mat<6){
        $n2matclass = "redclass";
    }elseif ($n2mat>=6){
        $n2matclass = "greenclass";
    }
    if ($medmat<6){
        $medmatclass = "redclass";
        $matsit = "Reprovado";
    }elseif ($medmat>=6){
        $medmatclass = "greenclass";
        $matsit = "Aprovado";
    }
        
    //Quimica
    $n1quim = $_POST['n1quim'];
    $n2quim = $_POST['n2quim'];
    $medquim = ($n1quim+($n2quim*2))/3;
    //medlenght
    if(strlen($medquim) > 3){
        $nmedquim = substr($medquim, 0, 3);
       } else{
        $nmedquim= $medquim;
       }
    //color and situation
    if ($n1quim<6){
        $n1quimclass = "redclass";
    }elseif ($n1quim>=6){
        $n1quimclass = "greenclass";
    }
    if ($n2quim<6){
        $n2quimclass = "redclass";
    }elseif ($n2quim>=6){
        $n2quimclass = "greenclass";
    }
    if ($medquim<6){
        $medquimclass = "redclass";
        $quimsit = "Reprovado";
    }elseif ($medquim>=6){
        $medquimclass = "greenclass";
        $quimsit = "Aprovado";
    }
    ?>
    <table border="1px">
        <tr>
            <th scope="col">Matéria</th>
            <th scope="col">Primeira Nota</th>
            <th scope="col">Segunda Nota</th>
            <th scope="col">Média</th>
            <th scope="col">Situação</th>
        </tr>
        <tr>
            <th id="artes">Artes</th>
            <td><p class="<?php echo "$n1artesclass"?>"><?php echo "$n1artes"?></p></td>
            <td><p class="<?php echo "$n2artesclass"?>"><?php echo "$n2artes"?></p></td>
            <td><p class="<?php echo "$medartesclass"?>"><?php echo "$nmedartes"?></p></td>
            <td><p class="<?php echo "$medartesclass"?>"><?php echo "$artessit"?></p></td>
        </tr>
        <tr>
            <th id="bdd">Banco De Dados</th>
            <td><p class="<?php echo "$n1bddclass"?>"><?php echo "$n1bdd"?></p></td>
            <td><p class="<?php echo "$n2bddclass"?>"><?php echo "$n2bdd"?></p></td>
            <td><p class="<?php echo "$medbddclass"?>"><?php echo "$nmedbdd"?></p></td>
            <td><p class="<?php echo "$medbddclass"?>"><?php echo "$bddsit"?></p></td>
        </tr>
        <tr>
            <th id="bio">Biologia</th>
            <td class="<?php echo "$n1bioclass"?>"><p><?php echo "$n1bio"?></p></td>
            <td class="<?php echo "$n2bioclass"?>"><p><?php echo "$n2bio"?></p></td>
            <td class="<?php echo "$medbioclass"?>"><p><?php echo "$nmedbio"?></p></td>
            <td class="<?php echo "$medbioclass"?>"><p><?php echo "$biosit"?></p></td>
        </tr>
        <tr>
            <th id="dev">Dev Web</th>
            <td><p class="<?php echo "$n1devclass"?>"><?php echo "$n1dev"?></p></td>
            <td><p class="<?php echo "$n2devclass"?>"><?php echo "$n2dev"?></p></td>
            <td><p class="<?php echo "$meddevclass"?>"><?php echo "$nmeddev"?></p></td>
            <td><p class="<?php echo "$meddevclass"?>"><?php echo "$devsit"?></p></td>
        </tr>
        <tr>
            <th id="edf">Educação Física</th>
            <td><p class="<?php echo "$n1edfclass"?>"><?php echo "$n1edf"?></p></td>
            <td><p class="<?php echo "$n2edfclass"?>"><?php echo "$n2edf"?></p></td>
            <td><p class="<?php echo "$mededfclass"?>"><?php echo "$nmededf"?></p></td>
            <td><p class="<?php echo "$mededfclass"?>"><?php echo "$edfsit"?></p></td>
        </tr>
        <tr>
            <th id="eletro">Eletricidade</th>
            <td><p class="<?php echo "$n1eletroclass"?>"><?php echo "$n1eletro"?></p></td>
            <td><p class="<?php echo "$n2eletroclass"?>"><?php echo "$n2eletro"?></p></td>
            <td><p class="<?php echo "$medeletroclass"?>"><?php echo "$nmedeletro"?></p></td>
            <td><p class="<?php echo "$medeletroclass"?>"><?php echo "$eletrosit"?></p></td>
        </tr>
        <tr>
            <th id="filo">Filosofia</th>
            <td><p class="<?php echo "$n1filoclass"?>"><?php echo "$n1filo"?></p></td>
            <td><p class="<?php echo "$n2filoclass"?>"><?php echo "$n2filo"?></p></td>
            <td><p class="<?php echo "$medfiloclass"?>"><?php echo "$nmedfilo"?></p></td>
            <td><p class="<?php echo "$medfiloclass"?>"><?php echo "$filosit"?></p></td>
        </tr>
        <tr>
            <th id="fis">Física</th>
            <td><p class="<?php echo "$n1fisclass"?>"><?php echo "$n1fis"?></p></td>
            <td><p class="<?php echo "$n2fisclass"?>"><?php echo "$n2fis"?></p></td>
            <td><p class="<?php echo "$medfisclass"?>"><?php echo "$nmedfis"?></p></td>
            <td><p class="<?php echo "$medfisclass"?>"><?php echo "$fissit"?></p></td>
        </tr>
        <tr>
            <th id="hist">História</th>
            <td><p class="<?php echo "$n1histclass"?>"><?php echo "$n1hist"?></p></td>
            <td><p class="<?php echo "$n2histclass"?>"><?php echo "$n2hist"?></p></td>
            <td><p class="<?php echo "$medhistclass"?>"><?php echo "$nmedhist"?></p></td>
            <td><p class="<?php echo "$medhistclass"?>"><?php echo "$histsit"?></p></td>
        </tr>
        <tr>
            <th id="ing">Inglês</th>
            <td><p class="<?php echo "$n1ingclass"?>"><?php echo "$n1ing"?></p></td>
            <td><p class="<?php echo "$n2ingclass"?>"><?php echo "$n2ing"?></p></td>
            <td><p class="<?php echo "$medingclass"?>"><?php echo "$nmeding"?></p></td>
            <td><p class="<?php echo "$medingclass"?>"><?php echo "$ingsit"?></p></td>
        </tr>
        <tr>
            <th id="pt">Português</th>
            <td><p class="<?php echo "$n1ptclass"?>"><?php echo "$n1pt"?></p></td>
            <td><p class="<?php echo "$n2ptclass"?>"><?php echo "$n2pt"?></p></td>
            <td><p class="<?php echo "$medptclass"?>"><?php echo "$nmedpt"?></p></td>
            <td><p class="<?php echo "$medptclass"?>"><?php echo "$ptsit"?></p></td>
        </tr>
        <tr>
            <th id="mat">Matemática</th>
            <td><p class="<?php echo "$n1matclass"?>"><?php echo "$n1mat"?></p></td>
            <td><p class="<?php echo "$n2matclass"?>"><?php echo "$n2mat"?></p></td>
            <td><p class="<?php echo "$medmatclass"?>"><?php echo "$nmedmat"?></p></td>
            <td><p class="<?php echo "$medmatclass"?>"><?php echo "$matsit"?></p></td>
        </tr>
        <tr>
            <th id="quim">Química</th>
            <td><p class="<?php echo "$n1quimclass"?>"><?php echo "$n1quim"?></p></td>
            <td><p class="<?php echo "$n2quimclass"?>"><?php echo "$n2quim"?></p></td>
            <td><p class="<?php echo "$medquimclass"?>"><?php echo "$nmedquim"?></p></td>
            <td><p class="<?php echo "$medquimclass"?>"><?php echo "$quimsit"?></p></td>
        </tr>
    </table>
</body>
</html>