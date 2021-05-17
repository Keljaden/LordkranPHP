Часть 1

№1

<form action="index.php" method="GET" >
    Введите количество суток:<input type="text" name="a">
    <input type="submit">
</form>
<?php
echo "Квадрат числа ";
$a=isset($_GET['a']) ? $_GET['a'] :6;

if($a!=0)
{
    $a=$a * $a;
    echo "x =";
    echo $a;
}
?>

№2

<form action="index.php" method="GET" >
    Рублей:<input type="text" name="a">
    Копеек:<input type="text" name="b">
    Сколько пирожков посчитать:<input type="text" name="n">
    <input type="submit">
</form>
<?php
echo "Цена за n пирожков - ";
$a=isset($_GET['a']) ? $_GET['a'] :6;
$b=isset($_GET['b']) ? $_GET['b'] :6;
$n=isset($_GET['n']) ? $_GET['n'] :6;

if($a!=0)
{
    $cost = $n * (100 * $a + $b);
    echo intdiv ($cost, 100)," ", "Рублей", " ";
    echo $cost % 100," ", "Копеек", " ";
}
?>

№3

<form action="index.php" method="GET" >
    Число:<input type="text" name="a">
    <input type="submit">
</form>
<?php
echo "Максимальное число из N ";
$a=isset($_GET['a']) ? $_GET['a'] :6;

if($a!=0) {
    $a = array_map('intval', str_split($a));
    $array = $a;
    arsort($array);
    echo implode( $array);
}
?>

№4

<form action="index.php" method="GET" >
    Число d1:<input type="text" name="d1">
    Число d2:<input type="text" name="d2">
    Число d3:<input type="text" name="d3">
    <input type="submit">
</form>
<?php
echo "Минимальное количество метров - ";
$d1=isset($_GET['d1']) ? $_GET['d1'] :6;
$d2=isset($_GET['d2']) ? $_GET['d2'] :6;
$d3=isset($_GET['d3']) ? $_GET['d3'] :6;

if($d1!=NULL) {
    echo (min($d1 + $d2 +$d3, min(2 * ($d1 + $d2), min($d1 * 2 + $d3 * 2, $d2 * 2 + $d3 * 2))));
}
?>

Часть 2

№1

<form action="index.php" method="GET" >
    Число d1:<input type="text" name="d1">
    <input type="submit">
</form>
<?php
echo "Автоморфные числа - ";
$d1=isset($_GET['d1']) ? $_GET['d1'] :6;
if($d1!=NULL) {
    for ($i = 0; $i <= $_GET['d1']; $i++) {
        if ($i == ($i * $i) % 10 ** (strlen($i)))
            echo $i . "\n";
    }
}
?>

№2
<form action="index.php" method="GET" >
    количество значений:<input type="text" name="d1">
    Введите массив:<input type="text" name="Array">
    <input type="submit">
</form>
<?php
$ans = explode(" ", $_GET['Array']);
for ($i = 0; $i < (int)$_GET['d1']; $i++){
    for ($j =$i + 1; $j < (int)$_GET['d1']; $j++){
        if ((int)$ans[$i] + ((int)$ans[$j]) == 0)
            echo $i." ".$j;
    }
}
?>

№3

<form action="index.php" method="GET" >
    Число для проверки:<input type="text" name="d1">
    <input type="submit">
</form>
<?php
$d1=isset($_GET['d1']) ? $_GET['d1'] :6;
if ()
    function primeCheck($d1){
        if ($d1 == 1)
            return 0;
        for ($i = 2; $i <= $d1/2; $i++){
            if ($d1 % $i == 0)
                return 0;
        }
        return 1;
    }

$flag = primeCheck($d1);
if ($flag == 1)
    echo "Prime";
else
    echo "Composite";

?>

№4

<form action="index.php" method="GET" >
    Введите год:<input type="text" name="a">
    <input type="submit">
</form>
<?php
echo "Наименьший следующий с неповторяющимися цифрами год - ";
$a=isset($_GET['a']) ? $_GET['a'] :6;

if($a!=0) {
    for($i = (int) $_GET['a'] + 1; $i <= 100000000000000 ; $i++){
        $array = array_map('intval', str_split($i));
        if (count($ans = array_unique($array)) == count($array) ) {
            echo implode( $array);
            break;
        }
    }
}
?>
