

        <?php 
        include 'navbar.php';
        
        ?>
        
        <div class="container">
        <h2> Les articles du Blog</h2>
        
        <?php 
        $articles = getAllArticles();
        foreach ($articles as $article) {
            echo("<div class="."article>");
            echo("<h3> {$article["nom_article"]} : </h3>");
            echo("<p>  {$article["body"]} </p>"); 
            $id=$article["id"];
            echo ("<a href="."article.php?id={$id}"."> Voir Article </a>" );
            echo("<button> supprimer Article </button>");
            echo("</div>");
        }



       
        //var_dump($id);

        //echo "<a href="."article.php?id={$article["id"]}"."Voir Article </button><br></a>";
        
        

        
        ?>


        </div>
        
                <div class="formulaire">
                    <h3> Ajouter un article </h3>
                    <form method="POST" action="index.php">
                    <div class="champs-text">   
                        <label for="article_nom"> Titre de l'article :
                        <input type="text" name="article_title" id="nom_article" placeholder="Saisir le titre de  ....">

                        </label>
                    </div>
                    <div class="champs-text">   
                        <label for="author"> Nom de l'auteur  :
                        <input type="text" name="article_author" id="nom_article" placeholder="Saisir le contenu de l'article ....">
                        </label>
                    </div>
                    <div class="champs-text">
                        <label for="body"> Contenu :
                            <input type="text" name="body" rows="10" cols="120" placeholder="Contenu de l'article ">
                        </label>
                    </div>
                
                    <button type="submit" name="submit" >Valider </button>
                    </form>
                </div>
               

            
<?php 
  if (isset($_POST['submit'])){

    if (!empty($_POST["article_title"]) && !empty($_POST["article_author"]) && !empty($_POST["body"]) ){
        $article_nom = $_POST["article_title"];
        $author= $_POST["article_author"];
        $body=$_POST["body"];
       
    insertArticle($article_nom,$author,$body);
    }
      else    echo " Verifier les champs";
    }
?>


</body>
</html>