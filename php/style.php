

<?php
$FILE = 'data.txt';
$DATA = [];
$BOARD= [];
 
if(file_exists($FILE)) {
    $BOARD = file('data.txt', FILE_IGNORE_NEW_LINES);
}else{
    $FILE = fopen('data.txt', 'w');
    fclose($FILE);
}
?>
 
<!DOCTYPE html>
<html lang= "ja">
<body>
 
<table>
<?php foreach($BOARD as $key => $DATA): ?>
<tr>
    <td><?php echo $DATA; ?></td>
    <td>
        <input type="hidden" name="del" value="">
        <input type="submit" value="削除">
    </td>
</tr>
 
<?php endforeach; ?>
</table>
 
<hr>
<form method= "post">
    <input type= "text" name= "txt">
    <input type= "submit" value= "投稿">
</form>    
 
</body>
</html>