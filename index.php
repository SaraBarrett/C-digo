<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Olá Mundo
    </h1>

    <?php
        //declarar uma variável
        $myFirstVar = 'olá mundo';
        $myFirstNumber = 16;

        $myFirstVar= 'Sara';
        $myFirstVar = 2025;

        $mySecondNumber = 55;

        //echo $myFirstVar;
        echo $myFirstNumber .'e'.$mySecondNumber;

        //declarar uma função
        function multiply($x, $y){
            return $x*$y;
        };

        function hello($name, $surname){
            return "$name $surname";

        }

        echo '<h4>A multiplicação dos dois números pedidos é: '. multiply(10, 7) .'</h4>
        <hr>';

        echo '<h4>Olá '.hello('Sara', 'Monteiro').'</h4>';

        //arrays convencionais
        $weekDays = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta'];
        echo  $weekDays[0], $weekDays[1], $weekDays[2];

        //ciclo foreach para iterar um array
        echo '<h4>Dias da Semana</h4>';
        foreach($weekDays as $weekDay){
            echo $weekDay. '<br>';
        }

        //arrays associativos
        $shopingList = [
            'leite' =>1, 
            'pão' => 3, 
            'queijo' =>5
        ];
        echo '<h5>Lista de Compras</h5>';
        foreach($shopingList as $key=>$value){
            echo $value .'-'.$key. '<br>';
        }

       echo '<h5>ciclo while</h5>';
       $i=1;

       while($i<11){
        echo $i.'<br>';
        $i++;
       }
       echo '<h5>ciclo for</h5>';
       for($num = 0; $num<11; $num++){
        echo $num.'<br>';
       }

       echo '<h5>números pares</h5>';
       $numbers = [4,6,7,11,12];
       foreach($numbers as $num){
        if($num%2==0){
            echo $num.',';
        }
       }
       echo '<h5>frutas</h5>';
       $fruits = ['bananas', 'maças', 'peras', 'morangos'];

    foreach($fruits as $fruit){
            echo $fruit.',';
        
       }
    ?>
    
</body>
</html>