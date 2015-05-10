<div class="container-fluid">
  <nav class="navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">InflatedBalloon</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      

      <ul class="nav navbar-nav navbar-right">

                 <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Minu kasutaja <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
                    <?php
                    if($this->session->userdata('logged_in')){
                        echo("<li><a href='#' id='modal-launcherLogin'  data-toggle='modal' data-target='#myModal'>Logi välja</a></li>");
                    }
                    else{
                        echo("<li><a href='#' id='modal-launcherLogin'  data-toggle='modal' data-target='#myModal'>Logi sisse</a></li>
                            <li><a href='#' data-toggle='modal' data-target='#basicModal'>Registreeri</a></li>");
                    }
                    ?>
					
					
					<li class="divider"></li>
			  
					</ul>
				</li>
      </ul>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
 
<div class="modal fade bs-modal-sm" id="kandideerin" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <br>

        <div class="tab-pane fade active in">
		<div class='sisu'>
                <div id="container">
                    
                    
                </div>
            </div>
            
        </div>
    </div>
      </div>
    </div>
  </div>
</div>
    
<div class="container">
    <br/>
    <div class="jumbotron">
           <div role="tabpanel">

  <!-- Nav tabs -->
               

               
  <ul class="nav nav-tabs" role="tablist" id="myTab">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Esileht</a></li>
    <li role="presentation"><a href="#Kandidaadid" aria-controls="Kandidaadid" role="tab" data-toggle="tab">Kandidaadid</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Hääleta</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Erakonnad</a></li>
  </ul>

  <!-- Tab panes -->

  <div class="tab-content">
      
    <div role="tabpanel" class="tab-pane active" id="home">
	
		<?php 
		if($this->session->userdata('logged_in')){
			echo("<h2>Welcome ".$email."!</h2>");
			}
		?>

		
			
      </div>
    <div role="tabpanel" class="tab-pane" id="Kandidaadid"> 
    	
    	<h2>Kandidaadid:</h2>
        <div class="table-responsive">
    	<table class="table">
    		<thead>
      			<tr>
        			<th>Kandidaadi number</th>
        			<th>Eeesnimi</th>
        			<th>Perekonnanimi</th>
                    <th>Poolt</th>
                    <th>Vastu</th>
                    <th>Kokku</th>

      			</tr>
    		</thead>
    		<tbody>
      			
    	<?php
		$dbhost = 'localhost';
		$dbuser = 'vhost31443s2';
		$dbpass = 'QukAew';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn )
		{
  			die('Could not connect: ' . mysql_error());
		}
		$sql = 'SELECT id, eesnimi, perekonnanimi, up, down, (up - down) AS haali FROM kandidaat';

		mysql_select_db('vhost31443s2');
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
  			die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
         	echo "<tr>
         			<td>{$row['id']}</td>
         			<td>{$row['eesnimi']}</td>
         			<td>{$row['perekonnanimi']}</td>
                    <td>{$row['up']}</td>
                    <td>{$row['down']}</td>
                    <td>{$row['haali']}</td>";
		} 
		mysql_close($conn);
		?>

				</tr>
    		</tbody>
  		</table>
               </div>
               <a href="#" id='modal-launcher'  data-toggle="modal" data-target="#kandideerin"><button type="button" class="btn btn-danger">Kandideerin!</button></a>


     </div>
    <div role="tabpanel" class="tab-pane" id="messages">
    <div>
<h3>Hääleta enda lemmiku poolt</h3>
<?php
include('config.php');
$sql=mysql_query("SELECT * FROM kandidaat");
while($row=mysql_fetch_array($sql))
{
$mes_id=$row['id'];
$msg_ees=$row['eesnimi'];
$msg_pere = $row['perekonnanimi'];
$up=$row['up'];
$down=$row['down'];
?>

<div id="main2" class="row">

<div class="box1 col-xs-2">

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
<div class='box2 col-xs-2' ><?php echo $msg_pere." ".$msg_ees; ?></div>



</div>



<?php
}

?>
</div>    
    
    </div>
    <div role="tabpanel" class="tab-pane sisu" id="settings">
        
                <h2>Erakonnad:</h2>
        <div class="table-responsive">
    	<table class="table">
    		<thead>
      			<tr>
        			<th>Erakond</th>
                    <th>Poolt</th>
                    <th>Vastu</th>

      			</tr>
    		</thead>
    		<tbody>
      			
    	<?php
		$dbhost = 'localhost';
		$dbuser = 'vhost31443s2';
		$dbpass = 'QukAew';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn )
		{
  			die('Could not connect: ' . mysql_error());
		}
        $sql = 'select up, down, partei
                from (
                    select SUM(up) as up, SUM(down) as down, partei
                    from (
    	               SELECT up, down, partei
		               from kandidaat
		               join partei
		               on partei.Nimi=kandidaat.partei) as T1
                    group by partei) T2';

		mysql_select_db('vhost31443s2');
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
  			die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
         	echo "<tr>
         			<td>{$row['partei']}</td>
                    <td>{$row['up']}</td>
                    <td>{$row['down']}</td>";
		} 
		mysql_close($conn);
		?>
            </tbody>
            </table>
            </div>
    </div>
  </div> <!---   Tab contents  --->
 
        <script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
</script>
    
</div>
    </div>
    
</div>




    
<!-- FOOTER  -->
