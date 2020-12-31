<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css?<?php echo time(); ?>" />
</head>

<body>

    <!-- Search bar -->


    <form method="post">

        <label>Search</label>
        <input type="text" name="search">
        <input type="submit" name="submit">
    </form>


    <!-- Database  -->
    <?php




    try {
        $bdd = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_b962d9c0b40ed7b;charset=utf8', 'be8f7e9f42c00f', 'cf163a32');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    ?>

    <div id="container">
        <?php
        $alma = null;
        if (isset($_POST["submit"])) {
            $alma = $_POST["search"];
        }
        if($alma == null){
            $reponse = $bdd->query("SELECT * FROM packetmanager LIMIT 8");

        }
        if($alma != null ){
            $alma = "%".$alma."%";
            $reponse = $bdd->query("SELECT * FROM packetmanager WHERE name LIKE '$alma' LIMIT 8");
        }
    
        while ($data = $reponse->fetch()) {

                echo '<div class =' . $data['id'] . '>';
                echo '<a href= ' . $data['link'] . '>';
                echo '<h1>' . $data['name'] . '</h1>';
                echo '<img src=' . $data['image'] . '>';
                echo '</img>';
                echo '<p>' . $data['description'] . '</p>';
                echo '</a>';
                // echo '<img src = '.$data['description'].'</img>';
                echo '</div>';
        }
        
        ?>


    </div>


</body>

</html>