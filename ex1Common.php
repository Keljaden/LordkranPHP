<form action="index.php" method="GET" >
    Введите количество суток:<input type="text" name="a">
    <input type="submit">
</form>
<?php
echo "Секунд в X-сутках";
$a=isset($_GET['a']) ? $_GET['a'] :6;
$x;

if($a!=0)
{
    $x=86400 * $a;
    echo "x=";
    echo $x;
}
?>