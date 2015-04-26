<?php
include("config.php");
function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

debug_to_console("IN DOWN_VOTE.PHP");
$ip=$_SERVER['REMOTE_ADDR']; 
if($_POST['id'])
{
$id=$_POST['id'];
$id = mysql_escape_String($id);
$ip_sql=mysql_query("select ip_add from Voting_IP where mes_id_fk='$id' and ip_add='$ip'");
$count=mysql_num_rows($ip_sql);

if($count==0)
{
$sql = "update kandidaat set down=down+1 where id='$id'";
mysql_query($sql);

$sql_in = "insert into Voting_IP (mes_id_fk,ip_add) values ('$id','$ip')";
mysql_query( $sql_in);
debug_to_console("SQL DONE");


}
else
{
}

$result=mysql_query("select down from kandidaat where id='$id'");
$row=mysql_fetch_array($result);
$down_value=$row['down'];
echo $down_value;

}
?>
