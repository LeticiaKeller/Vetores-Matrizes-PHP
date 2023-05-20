<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vetores-matrizes.css">
    <title>Vetores e Matrizes</title>
</head>
<body>
    <div class="container">
    <pre>
    <?php
    echo "<h1> Vetores e Matrizes:</h1>";
            $v[0]= 4;
            $v[1]= 9;
            $v[2]= 3;
            $v[3]= 6;
            $v[4]= 1;
            $v[5]= 7;
            $v[6]= 5;
        #Colocando em ordem somente os valores de forma crescente e os indices acompanham independente se vão ficar desordenados
        asort($v);
        print_r($v);
        #Colocando em ordem somente os valores de forma decrescente e os indices acompanham independente se vão ficar desordenados
        arsort($v);
        #ordenando somente os indices
        ksort($v);
        #ordenando somente os indices de forma decrescente
        krsort($v);
        echo"<hr>";
        #ou
            $n= array(3,4,1,6,2,8,5,9);
        #atribuindo mais um indice com valor ao vetor
            $n[]= 7;#pode ser usado array_push(variavel,numero desejado)
        echo "O vetor tem ". count($n). " elementos.</br>";
        #apagando o ultimo indice do vetor
        array_pop($n);
        #adicionando um indice no inicio do vetor:
        array_unshift($n,4);
        #apagando o primeiro indice do vetor:
        array_shift($n);
        #Ordenando VALORES de forma inversa:
        rsort($n);
        print_r($n);

        echo"<hr>";
        #escreve o tipo seguido do valor
        var_dump($n);

        echo"<hr>";
        #A cada virgula é dado um comando a este vetor, ele começa no 0 e vai até 20, pulando 2 números...
            $vetor= range(0,20,2);
        #outra forma de imprimir valores:
        foreach ($vetor as $valor){
            echo "<br> $valor";
        }

        echo"<hr>";
        #atribuindo valores desordenados:
            $c= array(3=>"A", 7=>"C", 1=>"E", 4=>"F");
            $c[]= "H";
        #apagando um indice do vetor:
        unset ($c[3]);
        #ordenando VALORES do vetor:
        sort($c); 
        print_r($c);

        
        echo"<hr>";
            $dados= array("nome" => "ana",
                        "idade" => 24,
                        "peso" => 62.5);
        #usando foreach nesse caso:
        foreach ($dados as $key => $conteudo){
            echo "<br>O campo $key tem conteudo $conteudo.";
        }
        
        #matriz
        echo"<hr>";
        #linhas 0,1 e 2 na horizontal e  colunas 0 e 1 na vertical
            $m= array(array(0,3),
                    array(1,4),
                    array(2,6));
            #linha zero coluna zero, será substituida por linha dois coluna 1
            $m[0][0] = $m[2][1];
        print_r($m);

    ?>
    </pre>
    </div>
</body>
</html>