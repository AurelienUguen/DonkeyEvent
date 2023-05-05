<?php

session_start();

require_once 'Classes/Pdo/PDOInstance.php';
require_once 'Classes/Database/DatabaseTools.php';
require_once 'Classes/Database/SelectCartInfo.php';
require_once 'Classes/Database/UpdateCartQuantity.php';
require_once 'Classes/Database/FetchEvent.php';
require_once 'Classes/Database/FetchCart.php';
require_once 'Classes/Date/Date.php';
require_once 'func/getEventsByCat.php';
require_once 'func/getEventsById.php';
require_once 'func/getSeanceByCat.php';
require_once 'func/getSeanceById.php';
require_once 'func/getTicket.php';
require_once 'func/calculateTotal.php';
require_once 'inc/connexionUtils.php';


