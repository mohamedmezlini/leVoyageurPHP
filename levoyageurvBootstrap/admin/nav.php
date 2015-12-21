		<nav class="  navbar navbar-default navbar-fixed-top nav-menu-milieu" >
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"> <span class=" fa fa-2x fa-plane">leVoyageur </span></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a  href="../index.php"   role="button" aria-haspopup="true" aria-expanded="false">Accueil  <span class="sr-only">(current)</span></a></li>
						<li class=""><a href="voyages.php"  role="button" aria-haspopup="true" aria-expanded="false">Voyages</a></li>
						<li class=""><a href="contacts.php"  		role="button" aria-haspopup="true" aria-expanded="false">Contacts</a></li>
						<li class=""><a href="newsletters.php"  		role="button" aria-haspopup="true" aria-expanded="false">Newlettres</a></li>
						<li class=""><a href="clients.php"  		role="button" aria-haspopup="true" aria-expanded="false">Utilisateurs</a></li>
						<li class=""><a href="stat.php"  		role="button" aria-haspopup="true" aria-expanded="false">Statistique </a></li>
						
					</ul>
					


					<ul class="nav navbar-nav pull-right">

						<?php	
						$inscription = <<<EOT
						<li > 

							<a  data-toggle="modal" data-target="#myModal" style="text-decoration :none"> 
								S'inscrire 
							</a>

							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Sinscrire </h4>
										</div>
										<div class="modal-body">




											<form class="form-horizontal" method="post" action="inscription.php">

												<div class="form-group">
													<label for="nom3" class="col-sm-2 control-label">Nom</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="nom3" placeholder="Nom" name="nom" required="required">
													</div>
												</div>

												<div class="form-group">
													<label for="prenom3" class="col-sm-2 control-label">Prénom</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="prenom3" placeholder="Prenom" name="prenom" required="required">
													</div>
												</div>

												<div class="form-group">
													<label for="login3" class="col-sm-2 control-label">login</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="login3" placeholder="Nom Utilisateur" name="login" required="required">
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
													<div class="col-sm-10">
														<input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="Email" required="required">
													</div>
												</div>
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="mdp" required="required">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">confirmer Password</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" id="inputconfimPassword3" placeholder="confirmer Password" required="required">
													</div>
												</div>


												<div class="form-group">
													<label for="tel3" class="col-sm-2 control-label">tel</label>
													<div class="col-sm-10">
														<input type="tel" class="form-control" name="tel" id="tel3" placeholder="tel" required="required">
													</div>
												</div>


												<div class="form-group">
													<label for="cin3" class="col-sm-2 control-label">CIN</label>
													<div class="col-sm-10">
														<input type="number" class="form-control" name="cin" id="cin3" placeholder="CIN" required="required">
													</div>
												</div>


												<div class="form-group">
													<label for="adresse3" class="col-sm-2 control-label">Adresse</label>
													<div class="col-sm-10">
														<input type="text" name="adresse" class="form-control" id="Adresse3" placeholder="Adresse" required="required">
													</div>
												</div>


												<div class="form-group">
													<label for="datenais3" class="col-sm-2 control-label">date Naissance</label>
													<div class="col-sm-10">
														<input type="date" class="form-control" name="date_nais" id="datenais3" placeholder="date Naissance" required="required">
													</div>
												</div>



	</form>

											





										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-warning">Save</button>
										</div>
									</div>
								</div>
							</div>

						</li>

EOT;
						if (empty ($_SESSION['logged'])) { 

							
							echo $inscription;
						}



						?>



						<li class="dropdown" id="menuLogin">

							<?php
							if (empty ($_SESSION['logged'])) {


								echo " <button class=\"dropdown-toggle    btn btn-warning fa fa-user\" href=\"#\" data-toggle=\"dropdown\" id=\"navLogin\">Login</button>


								<div class=\"dropdown-menu\" style=\"padding:17px;\">
									<form action=\"login1.php\" method=\"POST\" class=\"form\" id=\"formLogin\"> 
										<input class=\"form-control\" placeholder=\"username\" value=\""; 

										if (!empty ($_SESSION['nom'])) 	 
											echo $_SESSION['nom'];



										echo "\" id=\"username\" type=\"text\"  name=\"username\"> 
										<input class=\"form-control\"  name=\"password\" id=\"password\" type=\"password\" placeholder=\"Password\"><br>
										<button type=\"submit\" class=\"btn btn-default\" id=\"btnLogin\" class=\"btn\">Login</button>
										<p>
											"; 

											if (!empty ($_SESSION['ERREUR'])) 	echo $_SESSION['ERREUR'];



											echo "
										</p>
									</form>

									
								</div>
								"		;

							}
							else{


								echo " <button class=\"dropdown-toggle    btn btn-warning fa fa-user\" href=\"#\" data-toggle=\"dropdown\" id=\"navLogin\">Bienvenue "
								;
								if (!empty ($_SESSION['nom'])) echo $_SESSION['nom'] ;


								echo <<<EOT
							</button>




							<div  class="dropdown-menu col-lg-8" style="padding:17px;">

								<div class="lienpc">
									<a href="../modifinfoperso.php"> Modifier votre compte </a>

								</div>
								<div class="lienpc">
									<a href="../panier.php"> voir panier</a>
								</div>

								<form role="form" action="logout.php" method="POST" >


									<input type="submit" name="logout" id="submit" value="Déconnexion" class="btn btn-info ">

								</form>

							</div>

EOT;



						}


						?>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
