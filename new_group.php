<?php 
    $db = new PDO ('mysql:host=localhost;dbname=music_db','kiwi','banane');

    $sql = 'INSERT INTO `group`(name,start,end,origin) VALUES ("jsaispas","2011-12-12",NULL,"UK")';

    $req = $db->exec($sql);

    $db = null;





