<?php
require 'database.php';
$id=$_GET['id'];
$article =getArticle($id);


echo '<pre>';
print_r(json_encode($article));
echo '</pre>';
?>



