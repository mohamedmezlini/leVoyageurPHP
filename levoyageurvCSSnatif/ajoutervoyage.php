

<form action="ajvoyage.php" method="post" enctype="multipart/form-data">
  zzzzzzzzzzzzzzzzzzzzzzzz<br>
  pays: <input type="text" name="pays"><br>
  date debut: <input type="date" name="date_d"><br>
  date arivee: <input type="date" name="date_a"><br>
  ville debut: <input type="text" name="ville_d"><br>
  ville arrivée: <input type="text" name="ville_a"><br>
  prix: <input type="text" name="prix"><br>
  disponibilite: <input type="number" name="disponible"><br>
  Send these files:<br />


  <p> <input name="userfile[]" type="file" multiple='multiple' /> </p>
  <

  <input type="submit" value="Send files" />
</form>