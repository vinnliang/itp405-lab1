<?php
require('./Track.php');
$pdo = new PDO('sqlite:chinook.db');
$alltracks = Apple\iTunes\Track::all($pdo);
?>
<html>
<head>
<title>All tracks</title>
</head>
<body>
  <table>
     <tr>
       <td>Name</td>
       <td>Bytes</td>
     </tr>
     <?php foreach ($alltracks as $row) : ?>
     <tr>
       <td><?php echo $row->Name; ?></td>
       <td><?php echo $row->Bytes ?></td>
     </tr>
   <?php endforeach; ?>
   </table>
</body>
</html>
