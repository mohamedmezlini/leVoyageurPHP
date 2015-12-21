


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

						<h1 class="head1"> les utilisateurs  qui existent </h1>
					</div>
	<div class="   "  >

		

		<!-- ================================= le centenu du page ====================== -->



    <a href="ajouterClient.php">Ajouter Client</a>

  	
  	<?php
                        // connect to the database
  	include('php/connect-db.php');

  	$col1="Id"; 
	$col2="nom";
    $col3="Prenon";
    $col4="Adresse";
    $col5="Mail";
    $col6="Cin client";
    $col7="Tel";
    $col8="login";
    $col9="Role";
    $col10="Nombre achat";
    $col11="Modifier";
    $col12="Supprimer";




                        // get the records from the database
  	if ($result = $mysqli->query("SELECT * FROM client ORDER BY id_client"))
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
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col9}  : activate to sort column ascending" style="width: 76px;">  {$col9}  </th>
            	   <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col10}  : activate to sort column ascending" style="width: 76px;">  {$col10}  </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col11}  : activate to sort column ascending" style="width: 76px;">  {$col11}  </th>
               <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col12}  : activate to sort column ascending" style="width: 76px;">  {$col12}  </th>
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
                  <th rowspan="1" colspan="1">  {$col9}  </th>
                  <th rowspan="1" colspan="1">  {$col10}  </th>
                 <th rowspan="1" colspan="1">  {$col11}  </th>
                 <th rowspan="1" colspan="1">  {$col12}  </th>
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
                                                                                
  				
  				
        // set up a row for each record
      
        echo "<td>" . $row->id_client . "</td>";
        echo "<td>" . $row->nom . "</td>";
        echo "<td>" . $row->prenom   . "</td>";
        echo "<td>" . $row->adresse . "</td>";
        echo "<td>" . $row->mail . "</td>";
        echo "<td>" . $row->cin . "</td>";
        echo "<td>" . $row->tel . "</td>";
        echo "<td>" . $row->login . "</td>";
        echo "<td>" . $row->role . "</td>";
        echo "<td>" . $row->nb_achat . "</td>";
                     
  				

        echo "<td><a href='modifc1.php?id_client=" . $row->id_client . "'>Modifier</a></td>";
        echo "<td><a href='deleteClient.php?id_client=" . $row->id_client . "'>Delete</a></td>";


















  				
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
  			echo "il n'y a pas de voyages !";
  		}
  	}
                        // show an error if there is an issue with the database query
  	else
  	{
  		echo "Error: " . $mysqli->error;
  	}

                        // close database connection
  	$mysqli->close();
                //echo "<a href="records.php">Add New Record</a>";
                 // $id = $_GET['id'];

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