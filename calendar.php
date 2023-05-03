<?php

require_once 'autoload.php';

$dateToday = new DateTimeImmutable("now");
// var_dump($dateToday) . "<br>";
$today = date_format($dateToday, "Y-m-d");
// echo $today;

$dateEnd = new DateTimeImmutable("2023-05-02 23:59:59");
var_dump($dateEnd) . "<br>";
$lastDay = date_format($dateEnd, "Y-m-d");
// echo $today;


// var_dump(date_diff($dateToday, $dateEnd)) . "<br>";


if (date_diff($dateToday, $dateEnd)->invert === 1) {
  echo "Vous ne pouvez plus réserver";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    <form action="trash.php" method="get">
    <!--
        variable date du jour
     -->
      <br>
      <label for="orderDate">Jour de la séance : </label>
      <input type="date" name="orderDate" min="<?= $today; ?>" max="<?=$lastDay; ?>" value="<?= $today ?>">&nbsp;&nbsp;
      <label for="showtime">Horaire : </label>
        <select name="showtime" id="">
            <option value="<?php echo getSeanceById(2)->getShowtime1(); ?>"><?php echo getSeanceById(2)->getShowtime1(); ?></option>
            <option value="<?php echo getSeanceById(2)->getShowtime2(); ?>"><?php echo getSeanceById(2)->getShowtime2(); ?></option>
            <option value="<?php echo getSeanceById(2)->getShowtime3(); ?>"><?php echo getSeanceById(2)->getShowtime3(); ?></option>
            <option value="<?php echo getSeanceById(2)->getShowtime4(); ?>"><?php echo getSeanceById(2)->getShowtime4(); ?></option>
        </select>
      <input type="submit" name="orderBtn" value="Commander">
    </form>
    
  </body>
</html>