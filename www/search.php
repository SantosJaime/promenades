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
    // Récupération de la liste de chiens
    $promenade = $database->searchPromenade($search);
    
    // si la search est égale ou supérieure à la longeur minimale
    if(strlen($search) >= $min_length){
        //change les caractères spéciaux en html. Exemple: < to &gt;       
        $search = htmlspecialchars($search); 
        //vérification qu'aucune autre injection SQL en cours
        //$search = mysql_real_escape_string($search);
        // '%$search%' est ce que l'on cherche, % est pour n'mporte quel résultat comportant le champ de search
        $resultSearch = mysql_query("SELECT * FROM Promenades
            WHERE (`title` LIKE '%".$search."%') OR (`text` LIKE '%".$search."%')") or die(mysql_error());
        //si résultat sur une colonne ou plus
        if(mysql_num_rows($resultSearch) > 0){
             // $result = mysql_fetch_array($resultSearch) collecte les données de la BD dans un array
            while($result = mysql_fetch_array($resultSearch)){            
                // affiche résultats obtenus (title and text) On porrait aussi rajouter l'id ($result['id'])
                echo "<p><h3>".$result['title']."</h3>".$result['text']."</p>";
            }            
        }
        else{ // si aucun résultat
            echo "Pas de résultat";
        }         
    }
    else{ // si le champ contient moins de 3 caractères
        echo "Nombre min de caractères ".$min_length;
    }
?>

</body>
</html>
