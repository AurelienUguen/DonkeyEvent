<?php

session_start();

require_once 'inc/connexionUtils.php';
require_once 'Classes/Pdo/PDOInstance.php';
require_once 'Classes/Database/DatabaseTools.php';
require_once 'Classes/Database/FetchEvent.php';
require_once 'func/getEventsByCat.php';
require_once 'func/getEventsById.php';

