<?php
require 'database.php';
$article =getArticle(13);
echo '<pre>';
print_r($article);
echo '</pre>';
?>
<?php
//echo "<h1>Hello article  { $article['id']}<h1/>";
?>
