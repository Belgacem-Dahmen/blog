<?php



function getPdo(){
    $servername =   "localhost";
    $username =     "admin";
    $password =     "admin";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=blog", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connection success <br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
return $pdo;
}

function getAllArticles(){
    $pdo= getPdo();
    $sql= $pdo->prepare('SELECT * FROM articles');
    $sql->execute();
    $result = $sql->fetchAll(\PDO::FETCH_ASSOC);

return  $result;

} 


function insertArticle($article_nom,$author,$body) {
    $pdo= getPdo();
    $sql = "INSERT INTO articles (nom_article, author, body) VALUES ('$article_nom','$author','$body')";
        if ($pdo->query($sql) === TRUE) {
    echo "New record created successfully";
}   
}



function getArticle($id){
    $pdo= getPdo();
    $sql="SELECT * FROM articles where id = '$id'";
    $sql=$pdo->prepare($sql);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}   
?>