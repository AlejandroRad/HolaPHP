<?php
    //phpinfo();
    echo "Hola ", "mundo ", "PHP ";
    print "Hola mundo ";
    print "mundo " . "PHP ";
    echo '<p>Hola mundo  </p>';
    echo '<p> esto es PHP </p>';

    echo '<br> <br>';
    echo "========================== <br>";
    echo 'Operadores Aritmeticos <br>';
    echo "========================== <br>";

    $nombre = 'ronald' ;
    $y = 4;
    $x = 8;

    $z = $x + $y;
    echo $x . ' + ' . $y . ' = ' . $z . '<br>';
    $z = $x - $y;
    echo $x . ' - ' . $y . ' = ' . $z . '<br>';
    $z = $x * $y;
    echo $x . ' * ' . $y . ' = ' . $z . '<br>';
    $z = $x / $y;
    echo $x . ' / ' . $y . ' = ' . $z . '<br>';

    echo 'El valor de y es ', $y , '<br>';

    echo '<br> <br>';
    echo "========================== <br>";
    echo 'Operadores Relacionales <br>';
    echo "========================== <br>";

    $x = 6;
    $y = 4;

    echo ($x > $y), '<br>';
    echo ($x < $y), '<br>';
    echo ($x == $y), '<br>';
    echo ($x == 6), '<br>';
    echo ($x == '6'), '<br>';
    echo ($x === 6), '<br>';




?>