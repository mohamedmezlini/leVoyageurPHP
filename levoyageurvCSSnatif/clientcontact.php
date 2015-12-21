



<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php  include("front/head.php");  ?>



  </head>
  <body class="page1" id="top">
    <!--==============================header=================================-->
<?php  


include ("front/nav.php"); 
//include ("front/carousel.php"); 
include ("front/aprescarousel.php"); 


 ?>


      <!--==============================Content=================================-->
      
      <div class="container content-body">  
        
        <section class="row">
        
          <!--============================== Calendar =================================-->
      <div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

            <h1 class="head1">Les contacts</h1>
          </div>

<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">
 
		

		<!-- ================================= le centenu du page ====================== -->






  	
  	<?php
                        // connect to the database
  	include('php/connect-db.php');

  	$col1="Id"; 
	$col2="Id client";
    $col3="Mail";
    $col4="Objet";
    $col5="Sujet";
    $col6="Répondre";
    $col7="Supprimer";
    $col8="etat";


 $l=$_SESSION['id_client'];
                        // get the records from the database
  	if ($result = $mysqli->query("SELECT * FROM contact where idclt='$l'"))
  	{
                                // display records if there are records to display
  		if ($result->num_rows > 0)
  		{
                                        // display records in a table
  			echo <<<EOT

         <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
            <thead>
               <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" {$col1} : activate to sort column descending" style="width: 138px;"> {$col1} </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col2}  : activate to sort column ascending" style="width: 219px;">  {$col2}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col3}  : activate to sort column ascending" style="width: 99px;">  {$col3}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col4}  : activate to sort column ascending" style="width: 43px;">  {$col4}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="   {$col5}  : activate to sort column ascending" style="width: 43px;">  {$col5}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col8}  : activate to sort column ascending" style="width: 91px;">  {$col8}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col6}  : activate to sort column ascending" style="width: 91px;">  {$col6}  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="  {$col7}  : activate to sort column ascending" style="width: 91px;">  {$col7}  </th>
              </tr>
            </thead>
            <tfoot>
               <tr>
                  <th rowspan="1" colspan="1">  {$col1}  </th>
                  <th rowspan="1" colspan="1">  {$col2}  </th>
                  <th rowspan="1" colspan="1">  {$col3}  </th>
                  <th rowspan="1" colspan="1">  {$col4}  </th>
                  <th rowspan="1" colspan="1">  {$col5}  </th>
                   <th rowspan="1" colspan="1">  {$col8}  </th>
                  <th rowspan="1" colspan="1">  {$col6}  </th>
                  <th rowspan="1" colspan="1">  {$col7}  </th>
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
                                                                                
  				
          echo "<td>" . $row->id_con . "</td>";
          echo "<td>" . $row->idclt . "</td>";
          echo "<td>" . $row->mail . "</td>";
          echo "<td>" . $row->objet . "</td>";
          echo "<td>" . $row->sujet . "</td>";
          echo "<td>" . $row->etat . "</td>";
           echo "<td><a href='contact.php?idclt=" . $row->idclt . "'>repondre</a></td>";
           echo "<td><a href='deletecontact.php?id=" . $row->id_con . "'>Supprimer</a></td>";
                                           



















  				
  				echo "</tr>";
  			}

  			echo "</tbody>
         </table>
   
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















          </div>
     
        </section>

<?php 

include("front/news.php");
  ?>



</div>


<?php  
include("front/footer.php"); 
 ?>


</body>
</html>

