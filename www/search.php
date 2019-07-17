<html>
    <head>
        <title>Search</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
    
        <form action="search.php" method="GET">
            <input type="text" name="search" />
            <input type="submit" value="search" />
        </form>

    <?php
        // Import de la databse
        require_once("Database.php");
        // Création de la connexion
        $database = new Database();
        //utiliser la valeur GET
        $search = $_GET['search'];
        //Defini carcteres min pour search 
        $min_length = 3; 
        //var_dump($search);
        // Récupération de la 
        $promenade = $database->searchPromenade($search);
        
        // si la search est égale ou supérieure à la longeur minimale
        if(strlen($search) >= $min_length){
            //change les caractères spéciaux en html. Exemple: < to &gt;       
        $search = htmlspecialchars($search);                    
            // affiche résultats obtenus (title and text) On porrait aussi rajouter l'id ($search['id'])
            echo "<p><h3>".$search['titre']."</h3>".$search['pays']."".$search['ville']." ".$search['depart']." ".$search['arrivee']." ".$search['pseudo']."</p>";
        }            
        else{ // si aucun résultat
            echo "Pas de résultat";
            //} //else { // si le champ contient moins de 3 caractères
            //echo "Nombre min de caractères ".$min_length;
        }
    ?>

    </body>
</html>