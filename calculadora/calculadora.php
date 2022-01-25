<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="css/estilo.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Taller Calculadora de PHP</title>
</head>
<body>
    <div class='container'>
        <h1>Calculadora PHP</h1>
        <hr>
        <form method='post'>
            <label>Número 1</label>
            <input type="number" max=10000 min=0 name="numero1" placeholder="0" required autofocus>

            <label>Número 2</label>
            <input type="number" max="10000" min=0 placeholder="0" name="numero2" required>
            <hr>
            <input type="radio" class="form-check-input" name="opcion" value="sumar" required> Sumar
            <input type="radio" class="form-check-input" name="opcion" value="restar" required> Restar
            <input type="radio" class="form-check-input" name="opcion" value="multiplicar" required> Multiplicar
            <input type="radio" class="form-check-input" name="opcion" value="division" required> División
            <input type="radio" class="form-check-input" name="opcion" value="potenciacion" required> Potenciación
            <input type="radio" class="form-check-input" name="opcion" value="concatenacion" required> Concatenación
            <hr>
            <input type="submit" class="btn btn-success w-25" value="Enviar">
            <input type="reset" class="btn btn-danger w-25" value="Limpiar">
            <hr>
        </form>
    </div>
    <div class="container">
    <?php
        if ($_POST){
            function Sumar (){
                echo "La suma de los números es:". ($_POST['numero1']+$_POST['numero2']);
            }
        function Restar (){
            echo "La resta de los números es:". ($_POST['numero1']-$_POST['numero2']);
        }
        function Multiplicar (){
            echo "La multiplicación de los números es:". ($_POST['numero1']*$_POST['numero2']);
        }
        function Division (){
            if ($_POST['numero2']==0) $d="Error: division por 0";
            else
                $d=$_POST['numero1']/$_POST['numero2'];
                echo "La division de los números es: ".$d;
        }
        function Potenciacion (){
            echo "La potenciación de los numeros es:". (pow($_POST['numero1'],$_POST['numero2']));
        }
        function Concatenacion (){
            echo "La Concatenacion es:". ($_POST['numero1'].$_POST['numero2']);
        }
        switch($_POST['opcion']){
            case 'sumar':
                Sumar();
                break;
            case 'restar':
                Restar();
                break;
            case 'multiplicar':
                Multiplicar();
                break;
            case 'division':
                Division();
                break;
            case 'potenciacion':
                Potenciacion();
                break;
            case 'concatenacion':
                Concatenacion();
                break;
            default:
                echo "Error en la opción seleccionada";
                break;
        }
        }
        ?>
    </div>
</body>
</html>