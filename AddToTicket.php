<?php

require_once 'autoload.php';


        $pdo = PDOInstance::getInstance();

        $selectInfoQuery = "SELECT u.id as user_id, u.name as username, s.id as show_id,
                s.name as event, s.category as category, s.price as price, s2.id as seance_id, s2.name as room, c.quantity as quantity
                FROM cart c
                INNER JOIN user u ON u.id = c.user_id
                INNER JOIN `show` s ON s.id = c.show_id
                INNER JOIN seance s2 ON s2.id = c.seance_id
                WHERE c.user_id = " . $_SESSION['user_id'];

        $selectSth = $pdo->prepare($selectInfoQuery);
        $selectSth->execute();
        $infos = $selectSth->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($infos as $info) {
       
            $sql = "
                INSERT INTO ticket 
                (user_id, user_name, show_name, category_name, price, nb_places, seance_id, show_id)
                VALUES (" . $info['user_id'] . ", '" . $info[`username`] . "','"
                    . $info['event'] . "','" . $info['category'] . "'," . $info['price'] . "," . $info['quantity'] . ","
                    . $info['seance_id'] . "," . $info['show_id'] . ")";

            $sth = $pdo->prepare($sql);
            $sth->execute();
      
        } 

       
        header('location: deleteFromCart.php');


    
