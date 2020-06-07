<?php

define('NAME', 'KAAN'); //constant, cant be overwritten

$name = 'Kaan';
$stringOne = 'my email is ';
$email = "kkureli@gmail.com";


// echo $stringOne .  $email;
// echo "Hey, my name is $name";
// echo "the ninja screamed \"whaa\"";
// echo 'the ninja screamed \"whaa\"';

// echo $name[3]

// echo strlen($name)
// echo strtoupper(($name))
// echo strtolower($name)

// echo str_replace('K', 'm', $name);

// $pi = 3.14;

// echo floor($pi);
// echo pi();

//indexed arrays

$peopleOne = ['kaan', 'shaun', 'ryu'];
$peopleTwo = array('ken', 'kaan');

$peopleOne[] = 'memo'; //arrayin sonuna pushluyor.

print_r($peopleOne);

array_push($peopleOne, 'ahmet');

echo count($peopleOne); //length of array

$peopleThree = array_merge($peopleOne, $peopleTwo);

//associative arrays(key & value pairs) like objects

$ninja = ['name' => 'kaan', 'color' => 'red'];
echo $ninja['name'];

$ninjasTwo = array('age' => 23);

$ninjasTwo['age'] = 33;

print_r($ninja);

//pop

$popped = array_pop($ninja);

for ($i = 0; $i < count($peopleOne); $i++) {
    echo $peopleOne[$i] . '<br/>';
}

foreach ($peopleOne as $person => $value) {
    # code...
    echo $person . '<br/>';
}

public function FunctionName(Type $var = null)
{
    # code...
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo 'heyy'; ?></h1>
    <div>
        <?php echo $name; ?>
        <?php echo NAME; ?>
    </div>
</body>

</html>