


<?php 
  	$col1="Id"; 
	$col2="Pays";
    $col3="Images";
    $col4="V depart";
    $col5="V arrivé";
    $col6="Date départ";
    $col7="Date arrivé";
    $col8="Disponibilté";
    $col9="Prix";
    $col10="Ajouter";
echo <<<EOT




    				<a  data-toggle="modal"  data-target="#myvoyaoo" style="text-decoration :none"> 
								Ajouter Voyage
							</a>

							<!-- Modal -->
							<div class="modal fade" id="myvoyaoo" tabindex="-1" role="dialog" aria-labelledby="myModalLabe">
								<div class="modal-dialog" role="document">
									<div class="modal-content"  style="height: 445PX;">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabe">Ajouter Voyage</h4>
										</div>
										<div class="modal-body">
											
											<form action="ajvoyage.php" method="POST"  enctype="multipart/form-data">

											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col2}</label>
												<div class="col-sm-8">
													<input type="text"class="form-control" name="pays" >							
												</div>
											</div>

                      <div class="form-group">
                        <label for="nom3" class="col-sm-4 control-label">{$col4}</label>
                        <div class="col-sm-8">
                          <input type="text"class="form-control" name="ville_d" required="required">             
                        </div>
                      </div>

                      
                        

											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col5}</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="ville_a"  required="required">							
												</div>
											</div>
											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col6}</label>
												<div class="col-sm-8">
													<input type="date"class="form-control" name="date_d"  required="required">							
												</div>
											</div>

											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col7}</label>
												<div class="col-sm-8">
													<input type="date"class="form-control" name="date_a" required="required">							
												</div>
											</div>



											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col8}</label>
												<div class="col-sm-8">
													<input type="number"class="form-control" name="disponible"  required="required">							
												</div>
											</div>

											<div class="form-group">
												<label for="nom3" class="col-sm-4 control-label">{$col9}</label>
												<div class="col-sm-8">
													<input type="text" name="prix"class="form-control"  required="required">							
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

EOT;
 ?>