<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
    
        $valor = $_POST['valor1']??0;
        $valor2 = $_POST['valor2']??0;
        $opr = $_POST['opr']??0;
        switch ($opr) {
            case 'adição':
                $result = $valor + $valor2;
                $opr = '+';
                break;
                
            case 'subtração':
                $result = $valor - $valor2;
                $opr = '-';
                break;
            
            case 'multiplicação':
                $result = $valor * $valor2;
                $opr = 'x';
                break;
        
            case 'divisão':
                $result = $valor / $valor2;
                $opr = '%';
                break;
            default:
            break;
        }
    
    ?>
    <div class="calculadora-central">
        <div class="calculadora-interface">
            <div class="resultados">
                <?php 
                    if(!empty($_POST['submit'])){
                        echo "$valor  $opr  $valor2 = $result";
                    }else{
            
                    }
                
                
                ?>
            </div>
            <div class="numeros">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                        <input type="number" name="valor1" class="input">
                        <input type="number" name="valor2" class="input">
                        <select name="opr" id="" class="input">
                            <option value="adição">adição</option>
                            <option value="subtração">subtração</option>
                            <option value="multiplicação">multiplicação</option>
                            <option value="divisão">divisão</option>
                        </select>
                        <input type="submit" name="submit" class="submit" value="calcular">
                
                </form>
    
            </div>

        </div>
    </div>

    
</body>
</html>