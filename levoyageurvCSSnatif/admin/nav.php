		<nav class="  navbar navbar-default navbar-fixed-top nav-menu-milieu" >
			
				

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div id="cssmenu" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a  href="../index.php"   role="button" aria-haspopup="true" aria-expanded="false">Accueil  <span class="sr-only"></span></a></li>
						<li class=""><a href="voyages.php"  role="button" aria-haspopup="true" aria-expanded="false">Voyages</a></li>
						<li class=""><a href="contacts.php"  		role="button" aria-haspopup="true" aria-expanded="false">Contacts</a></li>
						<li class=""><a href="newsletters.php"  		role="button" aria-haspopup="true" aria-expanded="false">Newlettres</a></li>
						<li class=""><a href="clients.php"  		role="button" aria-haspopup="true" aria-expanded="false">Utilisateurs</a></li>
						<li class=""><a href="stat.php"  		role="button" aria-haspopup="true" aria-expanded="false">Statistique </a></li>
						
					
					



						<?php	


						if (empty ($_SESSION['logged'])) { 
						echo<<<EOT
						<li class="active sous-menu"> 

							<a  data-toggle="modal" data-target="#myModal" style="text-decoration :none"> 
								S'inscrire 
							</a>
							

											
										<ul> <form class="form-horizontal" method="post" action="inscription.php"><li>
									


												<a href ="connexion.php ">connexion</a>

												</li><li>
												<a href ="inscr.php ">inscription</a>


												</li><li>

									</ul>

						</li>

EOT;
}
else{


								echo " <li class='active sous-menu'>  <a class='btn btn-warning' href='#' data-toggle=\"dropdown\" id=\"navLogin\">Bienvenue "
								;
								if (!empty ($_SESSION['nom'])) echo $_SESSION['nom'] ;


								echo <<<EOT

							</a>

							<ul> <li> 






									<a href="modifinfoperso.php">Modifier votre compte </a>

								</li><li>
									<a href="clientcontact.php">Les contacts </a>

								</li><li>
									<a href="panier.php"> voir panier</a>
								</li><li>
								<form role="form" action="logout.php" method="POST" >


									<input type="submit" name="logout" id="submit" value="Déconnexion" class="btn btn-warning ">

								</form>




								</li>
								</ul>
								</li>

EOT;



						}
?>					



</ul>
</div>
</nav>