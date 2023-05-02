<?php

session_start();

require_once 'Classes/Pdo/PDOInstance.php';
require_once 'Classes/Database/DatabaseTools.php';
require_once 'Classes/Database/FetchEvent.php';
require_once 'Classes/Date/Date.php';
require_once 'func/getEventsByCat.php';
require_once 'func/getEventsById.php';
require_once 'func/getSeanceByCat.php';
require_once 'func/getSeanceById.php';
require_once 'func/SelectCartInfo.php';
require_once 'func/updateQuantity.php';
require_once 'inc/connexionUtils.php';


