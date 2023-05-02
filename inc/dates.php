<?php

$dateToday = new DateTimeImmutable("now");
$today = date_format($dateToday, "Y-m-d");

$dateEnd = new DateTimeImmutable("2023-05-02 23:59:59");
$lastDay = date_format($dateEnd, "Y-m-d");