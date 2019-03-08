<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'formData';
$con = mysqli_connect($servername,$username,$password,$db);
mysqli_select_db($con, $db);
$query = mysqli_query($con,"SELECT * from formDataTable");
if(!($query)){
  echo "Retrieval of data from database failed - #".mysql_errno().': '.mysql_error();
}
else{
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<title>Details</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/details.css">
  <!--===============================================================================================-->
  </head>
  <body>

  	<div class="limiter">
  		<div class="container-table100">
  			<div class="wrap-table100">
  				<div class="table100">
  					<table>
  						<thead>
  							<tr class="table100-head">
  								<th class="column1">Email</th>
  								<th class="column2">Name</th>
  								<th class="column3">Subject</th>
  								<th class="column4">Message</th>
  								<th class="column5">Query</th>
  							</tr>
  						</thead>
  						<tbody>
                <?php
      if( mysqli_num_rows( $query )==0 ){
        echo '<tr><td colspan="5">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $query ) ){
          echo "<tr><td class='column1'>{$row['email']}</td><td class='column2'>{$row['name']}</td><td class='column3'>{$row['subject']}</td><td class='column4' >{$row['message']}</td><td class='column5' >{$row['query']}</td></tr>\n";
        }
      }
    ?>
                </tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>




    <!--===============================================================================================-->
    	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    	<script src="vendor/bootstrap/js/popper.js"></script>
    	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    	<script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    	<script src="js/main.js"></script>

    </body>
    </html>


<?php
}
 ?>
