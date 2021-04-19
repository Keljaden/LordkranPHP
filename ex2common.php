<form action="index.php" method="post">
    Ваше Имя: <input type="text" name="name" /><br />
    Ваша Фамилия: <input type="text" name="surname" /><br />
    Ваш Отчество: <input type="text" name="patronymic" /><br />
    <input type="submit"/>
</form>
<?php

$name=$_POST['name'];
$surname=$_POST['surname'];
$patronymic=$_POST['patronymic'];

echo $name.' '.$surname.' '.$patronymic. ' ';
?>
