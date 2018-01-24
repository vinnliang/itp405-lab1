<?php
require('./Track.php');
$pdo = new PDO('sqlite:chinook.db');
$track = Apple\iTunes\Track::find(1, $pdo);
echo $track->Name;
echo $track->getSize('MB');
?>
