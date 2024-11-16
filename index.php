<?php
echo "Hello World! <br>";
$name = "zunair";
$age = "19";
$ismarried = false;
 echo "my name is ". $name;
 echo "<br>";
 $a = 10;
 $b = 20;
 $c = $a + $b;
 echo "$a + $b = $c";
 echo '<br>';
 echo str_replace('n', 'b', $name);
 echo "<br>";
 $num = 32.0;
 var_dump(is_int($num));
 var_dump(is_float($num));
 echo '<br>';
 echo rand(1,100);
 if($age >= 19){
echo '<br> you can vote';
 } else {
echo '<br> you can not vote';
 }
 echo "<br>";
 $grade = "B";
 switch($grade){
    case "A":
        echo "you did great";
        break;
        case "B":
            echo "you did good";
            break;
            case "C":
                echo "you did okay";
                break;
                case "D":
                    echo "not okay";
                    break;
                    case "D":
                        echo "you failed";
                        break;
                        default:
                        echo $grade . "is not valid";
 };
echo '<br>';
 for($i = 5; $i<=50; $i+=5){
echo $i. "<br>";

 };

 $x = 1;
 while($x <=10){
echo $x . '<br>';
$x++;
 };
 $fruits = array("apple", "mango", "banana", "peach");
 $fruits[0] = "orange";
 array_push($fruits, "grapes");
 array_unshift($fruits, "grapes");

foreach($fruits as $fruit){
    echo $fruit . "<br>";
};
$employees = array("zunair" => "software engineer", "zain" => "software engineer", "shayan" => "game developer");
echo "<pre>";
print_r($employees)
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1><?php echo "hello" ?> </h1>
<?php
$z = 1;
while ($z <=10){
?>
<p><?php echo $z ?></p>
<?php 
$z++;
    
}
?>

    <?php
    // Foreach loop to display $employees array
    foreach ($employees as $key => $value) {
    ?>
        <p><b><?php echo $key; ?>:</b> <?php echo $value; ?></p>
    <?php 
    }
    ?>

</body>
</html>