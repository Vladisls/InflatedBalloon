
<div id="fb-root"></div>
<script src="./fbsdk.js"></script>

    
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
      

       
          <!--
      </ul>
      <form class="navbar-form navbar-left">
            
          <button type="button" class="btn btn-default">Kandidaadid</button>
          <button type="button" class="btn btn-default">Erakonnad</button>
          <button type="button" class="btn btn-default">Tulemused</button>
      </form>
        -->
         
      <ul class="nav navbar-nav navbar-right">

                 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Minu kasutaja <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
<!--
            <li><a href="#">Vote</a></li>
            <li><a href="#">My Vote History</a></li>
            <li><a href="#">My applications</a></li>
            <li class="divider"></li>
            <li><a href="#">Log Out</a></li>
-->
            <li><a href="#" id='modal-launcher'  data-toggle="modal" data-target="#myModal">Logi sisse/Registreeri</a></li>
              <li class="divider"></li>
            <!--- <li><a href="#" id='modal-launcher'  data-toggle="modal" data-target="#myModal">Registreeri</a></li> -->
          </ul>
        </li>

          
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
 
<div class="container">
    <br/>
    <div class="jumbotron">
           <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Esileht</a></li>
    <li role="presentation"><a href="#Kandidaadid" aria-controls="Kandidaadid" role="tab" data-toggle="tab">Kandidaadid</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Erakonnad</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Tulemused</a></li>
  </ul>

  <!-- Tab panes -->

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
	
      </div>
    <div role="tabpanel" class="tab-pane" id="Kandidaadid"> 
    	
    	<h2>Kandidaadid:</h2>
    	<table class="table">
    		<thead>
      			<tr>
        			<th>Kandidaadi NR</th>
        			<th>Eeesnimi</th>
        			<th>Perekonnanimi</th>
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
		$sql = 'SELECT id, eesnimi, perekonnanimi FROM kandidaat';

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
         			<td>{$row['perekonnanimi']}</td>";
		} 
		mysql_close($conn);
		?>

				</tr>
    		</tbody>
  		</table>
    	


     </div>
    <div role="tabpanel" class="tab-pane" id="messages"> Loe Erakonnad </div>
    <div role="tabpanel" class="tab-pane" id="settings"> Loe Tulemused </div>
  </div>

</div>
    </div>
    
</div>
    
    
    <!--
  <div class="jumbotron">
        <div class="product">               
                <div class="product_image">
                   <img class="img-responsive" src="http://i58.tinypic.com/nb3hq0.png" border="0" alt="">
                </div>
             </div>
     </div>
    -->
    
    <!-- LOGIN POPUP -->
    



    
<!-- FOOTER  -->
