<form action="index.php" method="get">
    Отзеркаливаемое слово: <input type="text" name="name" /><br />
    <input type="submit"/>
</form>
<?php
$name=$_GET['name'];
echo strrev($name);
?>