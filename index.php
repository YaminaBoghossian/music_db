<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=music_db','kiwi','banane');

        echo 'Groups :<br>';
        $sql = 'SELECT * FROM `group`'; 
        
        $req = $db->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
        while($data = $req->fetch()) 
        { 
            echo '<b>'.$data['name'].'</b>('.$data['start'].')'; 
            echo ' <i>origine : '.$data['origin'].'</i><br>'; 
        } 
    ?>
</body>
</html>