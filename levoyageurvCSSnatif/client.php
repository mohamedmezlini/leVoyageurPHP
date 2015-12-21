<?php

// première étape : désactiver le cache lors de la phase de test
ini_set("soap.wsdl_cache_enabled", "0");

// lier le client au fichier WSDL
$clientSOAP = new SoapClient('HelloYou.wsdl');

// executer la methode getHello
echo $clientSOAP->getHello('Marc','Assin');

?>