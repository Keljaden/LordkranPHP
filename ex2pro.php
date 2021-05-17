<form action="index.php" method="get">
    Отзеркаливаемое слово: <input type="text" name="name" /><br />
    <input type="submit"/>
</form>
<?php
$name=$_GET['name'];
echo mb_convert_encoding(strrev(mb_convert_encoding($name, 'UTF-16BE', 'UTF-8')), 'UTF-8', 'UTF-16LE');
<<<<<<< HEAD
?>
=======
?>
>>>>>>> bca8fb797af26673c0858156e5d6301c810cf4c1
