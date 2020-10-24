<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>
    <h1>HTML Helper</h1>
    <p> OL()</p>
    <?php
    $list =array('a','b','c');
    echo ol($list);

    echo '<hr>';
    echo ul($list);
    ?>

    aaa
    <?php echo br(5); ?>
    bbb

    <hr>
    <p>heading()</p>
     <?php
      echo heading("Text",1);
      echo heading("Text",2);
      echo heading("Text",3);
      echo heading("Text",4);
      echo heading("Text",5);
      echo heading("Text",6);
     ?>

     <hr>
     <p>nbs()</p>
     testing  &nbsp; programing

     <br>
     <?php
     echo 'myweb';
     echo nbs(10);
     echo 'nueng';
     ?>
    

</body>
</html>