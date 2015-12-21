


<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title> index 1</title>

	<meta charset="utf-8">

	<?php 
	 include("header.php"); 

	 ?>

</head>
<body>
<?php 

if (empty ($_SESSION['logged'])) {
	exit(header("Location:connexion.php")); 
	
} 
else {

	if ($_SESSION['role']==0){
		exit(header("Location:../index.php"));
	}

	include("nav.php"); 

  ?>


<!-- ============================================  le contenu du site ==================================-->
<div class=" container  content-body">


<div class=" row" style =" margin-top: 53px;"
>
<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

						<h1 class="head1"> Les Statistiques </h1>
					</div>
	<div class="   "  >

		

		<!-- ================================= le centenu du page ====================== -->





  	
  	<?php
                        // connect to the database
  	include('../php/connect-db.php');

  	$col1="ID panier"; 
	$col2="id client";
    $col3="ID voyage";
    $col4="pays";
    $col5="date_achat";
    $col6="prix ";
    $col7="quantite";
    $col8="total";



  	$today = date('Y-m-d');
  	$mod_date = strtotime($today."- 30 days");
  	echo date("Y-m-d",$mod_date) . "\n";


$result2 = $mysqli->query("SELECT sum(total) as total FROM panier  WHERE  date_achat <= '".$today."' and date_achat >'".$mod_date."'   ");


//$result = $mysqli->query('select count(*) as `c` from `panier` ');
  	$sum = $result2->fetch_object()->total;
//$result->free();
//$mysqli->close();
  	echo "la somme est de   {$sum} dinars dans les 30 derneier jours";
echo "<br>";

  	$result = $mysqli->query("SELECT COUNT(*) as c FROM `panier`  WHERE  date_achat <= '".$today."' and date_achat >'".$mod_date."'   ");


//$result = $mysqli->query('select count(*) as `c` from `panier` ');
  	$count = $result->fetch_object()->c;
//$result->free();
//$mysqli->close();
  	echo "il y a  {$count} operation de vente dans les 30 dernier jours";




echo "<br>";
	














  	if ($result = $mysqli->query("SELECT * FROM panier "))
  	{
                                // display records if there are records to display
  		if ($result->num_rows > 0)
  		{
                                        // display records in a table
  			
			echo <<<EOT
<div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

 
   <div class="row">     
      <div class="col-sm-12">
         <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
            <thead>
               <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" {$col1} : activate to sort column descending" style="width: 138px;"> {$col1} </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col2}  : activate to sort column ascending" style="width: 219px;">  {$col2}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col3}  : activate to sort column ascending" style="width: 99px;">  {$col3}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col4}  : activate to sort column ascending" style="width: 43px;">  {$col4}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="   {$col5}  : activate to sort column ascending" style="width: 43px;">  {$col5}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col6}  : activate to sort column ascending" style="width: 91px;">  {$col6}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col7}  : activate to sort column ascending" style="width: 91px;">  {$col7}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col8}  : activate to sort column ascending" style="width: 76px;">  {$col8}  </th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th rowspan="1" colspan="1">  {$col1}  </th>
                  <th rowspan="1" colspan="1">  {$col2}  </th>
                  <th rowspan="1" colspan="1">  {$col3}  </th>
                  <th rowspan="1" colspan="1">  {$col4}  </th>
                  <th rowspan="1" colspan="1">  {$col5}  </th>
                  <th rowspan="1" colspan="1">  {$col6}  </th>
                  <th rowspan="1" colspan="1">  {$col7}  </th>
                  <th rowspan="1" colspan="1">  {$col8}  </th>
                </tr>
            </tfoot>
            <tbody>


EOT;
			$evenouodd=0; 
  			while ($row = $result->fetch_object())
  			{
                                                
                if ($evenouodd==0) {
                	$evenouodd=1;
                	echo '<tr role="row" class="odd">';
                 }
                  else {
                  	$evenouodd=0;
                  	echo '<tr role="row" class="even">';
                 }
  				
  				echo "<td>" . $row->id_pan . "</td>";
  				echo "<td>" . $row->id_clt . "</td>";
  				echo "<td>" . $row->id_voy . "</td>";
  				echo "<td>" . $row->pays . "</td>";
  					echo "<td>" . $row->date_achat . "</td>";
  				echo "<td>" . $row->prix . "</td>";
  				echo "<td>" . $row->quantite . "</td>";
  				echo "<td>" . $row->total . "</td>";
  				
  				  			



  				
  			  				echo "</tr>";
  			}

  			echo "</tbody>
         </table>
      </div>
   </div>

</div>
";
  	
  		}
                                // if there are no records in the database, display an alert message
  		else
  		{
  			echo "No results to display!";
  		}
  	}
                        // show an error if there is an issue with the database query
  	else
  	{
  		echo "Error: " . $mysqli->error;
  	}

                        // close database connection
  	$mysqli->close();



  	?>
  





		

		<!-- ================================= fin  le centenu du page ====================== -->

	</div>



</div>


</div>



  <?php
	include("footer.php"); 
}

?>

</body>
</html>









