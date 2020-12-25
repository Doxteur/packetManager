<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css?<?php echo time(); ?>" />
</head>

<body>

    <?php
    try {
        $bdd = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_b962d9c0b40ed7b;charset=utf8', 'be8f7e9f42c00f', 'cf163a32');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

  
    ?>

    <div id="container">
        <?php 

        $reponse = $bdd->query('SELECT * FROM packetmanager');
        
            while($data = $reponse->fetch()) {
                echo '<div class =' .$data['id'] . '>';
                echo '<a href= '. $data['link'] . '>';
                echo '<h1>'.$data['name'].'</h1>';
                echo '<img src=' . $data['image'] . '>';
                echo '</img>';
                echo '<p>'.$data['description'].'</p>';
                echo '</a>';
                // echo '<img src = '.$data['description'].'</img>';

                echo '</div>';

            }
        ?>
           


<!-- 
        <div class="class">
            <a href="https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7B792B5BD3-B794-4FAB-1FF5-1B6A957A6D00%7D%26lang%3Dfr%26browser%3D4%26usagestats%3D1%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1%26brand%3DYTUH%26installdataindex%3Dempty/update2/installers/ChromeSetup.exe">
                <h1>Google Chrome</h1>
                <img src="Images/google.png" alt="chrome" class="image">
            </a>
        </div> -->
     

    </div>


</body>

</html>