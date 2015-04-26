
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Voting with jQuery, Ajax and PHP</title>
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript" src="voting.js"></script>
    
<link href="main-added.css" rel="stylesheet">
</head>

<body>

<div align="center">
<h3>Voting with jQuery, Ajax and PHP</h3>
<?php
include('config.php');
$sql=mysql_query("SELECT * FROM messages  LIMIT 9");
while($row=mysql_fetch_array($sql))
{
$msg=$row['msg'];
$mes_id=$row['mes_id'];
$up=$row['up'];
$down=$row['down'];
?>

<div id="main">

<div class="box1">

<div class='up'>
<!--IF USER IS LOGGED IN THEN DO THIS--> 
<a href="" class="vote" id="<?php echo $mes_id; ?>" name="up">
<?php echo $up; ?></a>
<!--IF USER IS NOT LOGGED IN THEN DO THIS-->
<!--A - HREF WILL POINT TO LOGGING PAGE INSTEAD OF VOTING-->
<!--REFER TO LOGGING PAGE AND THEN RETURN TO VOTING PAGE (MELD)-->
</div>

<div class='down'>
<!--IF USER IS LOGGED IN THEN DO THIS--> 
<a href="" class="vote" id="<?php echo $mes_id; ?>" name="down">
<?php echo $down; ?></a>
<!--IF USER IS NOT LOGGED IN THEN DO THIS-->
<!--A - HREF WILL POINT TO LOGGING PAGE INSTEAD OF VOTING-->
<!--REFER TO LOGGING PAGE AND THEN RETURN TO VOTING PAGE (MELD)-->
</div>

</div>


<div class='box2' ><?php echo $msg; ?></div>




</div>



<?php
}

?>
</div>
</body>
</html>
