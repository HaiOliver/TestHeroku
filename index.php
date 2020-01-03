<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p> Hello Oliver </p>

    <?php 
    echo "Hello Php, Oliver said"
    
    ?>

    <?php 
    
    $Oliver = 6;

    echo $Oliver;

    ?>

    <?php 
    
    $test = 'oliver';
    echo "<h1> print to screen, using h tag     $test </h1>"
    
    ?>


    <?php 
    
    $Oliver = array(1,2,3,4,54,5);
    echo $Oliver[1];

    $count = count($Oliver);

    echo "length of array will be $count";
    
    $getdate = getdate();

    echo "<p>Today will be </p></br>";
    echo "getdate function :".$getdate['mday']."</br>";
    echo "getdate function :".$getdate['mon']."</br>";
    echo "getdate function :".$getdate['year']."</br>";
    echo time()."</br>";

    echo date('d/m/y  G:i',time());


    ?>

</body>
</html>