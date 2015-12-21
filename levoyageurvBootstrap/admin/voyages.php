


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

						<h1 class="head1"> les voyages  qui existent </h1>
					</div>
	<div class="   "  >

		

		<!-- ================================= le centenu du page ====================== -->






  	
  	<?php
                        // connect to the database
  	include('../php/connect-db.php');

  	$col1="Id"; 
	 $col2="Pays";
    $col3="Images";
    $col4="V depart";
    $col5="V arrivé";
    $col6="Date départ";
    $col7="Date arrivé";
    $col8="Disponibilté";
    $col9="Prix";
    $col10="Modifier";
include ("ajouterVoyage.php");


                        // get the records from the database
  	if ($result = $mysqli->query("SELECT * FROM voyage ORDER BY id_voy"))
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
                                                                                
  				
  				echo "<td>" . $row->id_voy . "</td>";
  				echo "<td>" . $row->pays . "</td>";
  				echo "<td><img src='../images/". $row->image ." ' style=' max-height: 100px;max-width: 50px;'></td>";
  				echo "<td>" . $row->ville_d . "</td>";
  				echo "<td>" . $row->ville_a . "</td>";
  				echo "<td>" . $row->date_d . "</td>";
  				echo "<td>" . $row->date_a . "</td>";
  				echo "<td>" . $row->disponible . "</td>";
  				echo "<td>" . $row->prix . "</td>";
  				echo <<<EOT
  				<td>








    				<a  data-toggle="modal"  data-target="#myvoya{$row->id_voy}" style="text-decoration :none"> 
								voir détail
							</a>

							<!-- Modal -->
							<div class="modal fade" id="myvoya{$row->id_voy}" tabindex="-1" role="dialog" aria-labelledby="myModalLabe">
								<div class="modal-dialog" role="document">
									<div class="modal-content" >
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabe">detail </h4>
										</div>
										<div class="modal-body">
											
											<form action="modifiervoyage.php" method="POST"  enctype="multipart/form-data">

											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col2}</label>
												<div class="col-sm-8">
													<input type="text"class="form-control" name="pays" value="{$row->pays}">							
												</div>
											</div>

                      <div class="form-group">
                        <label for="nom3" class="col-sm-4 control-label">{$col4}</label>
                        <div class="col-sm-8">
                          <input type="text"class="form-control" name="ville_d" value="{$row->ville_d}"required="required">             
                        </div>
                      </div>

                      
                          <input type="number" name="id_voy"  value="{$row->id_voy}" hidden  required="required">             
                       

											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col5}</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="ville_a" value=" {$row->ville_a}" required="required">							
												</div>
											</div>
											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col6}</label>
												<div class="col-sm-8">
													<input type="date"class="form-control" name="date_d" value="{$row->date_d}" required="required">							
												</div>
											</div>

											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col7}</label>
												<div class="col-sm-8">
													<input type="date"class="form-control" name="date_a" value="{$row->date_a}"required="required">							
												</div>
											</div>



											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col8}</label>
												<div class="col-sm-8">
													<input type="number"class="form-control" name="disponible" value="{$row->disponible}" required="required">							
												</div>
											</div>

											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col9}</label>
												<div class="col-sm-8">
													<input type="text" name="prix"class="form-control" value=" {$row->prix}" required="required">							
												</div>
											</div>

											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col3}</label>
												<div class="col-sm-8">
													Send these files:<br />
													<p> <input  name="userfile[]"  class="form-control" type="file" multiple='multiple'  /> 							
													</div>
												</div>

												<div class="form-group">
													<div class="col-sm-12 pull-rigth">
														<input  class="btn btn-warning" type="submit" value="Modifer" />
													</div>
												</div>

												</form>


										</div>
									</div>
								</div>
							</div>

</td>

EOT;




















  				
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