<!DOCTYPE html>
<html>
  <head>
    <title>Qwinto</title>
    <script language='javascript'>
      public function chCase($nom) {
      window.location.replace("http://localhost:8765/sheets/changeCase/1/10/55
      }

      public function jetD($num) {
      
      }
      </script>
  </head>
  <body>
    <table border=1>
      <?php
	 for ($j = 0; $j < 30; $j = $j + 10){		 
			   echo '<tr>';
			   for ($i = $j + 1; $i < $j + 11 ; $i++){
						  echo '<td>';
						  if ($i != 1 && $i != 2 && $i != 11 && $i != 20 && $i != 29 && $i != 30){
						  $nom = "case".$i;
						  if (isset($cases->$nom)){
			   echo "<button id='$nom' onclick=>".$cases->$nom."</button>";
	 }
	 }
	 echo '</td>';
	 }
	 echo '</tr>';
	 }	   
	 echo '</table>';
	 echo "<button id='bouDes'>Jet de dés</button>";
	 if (isset($cases->de1)) {echo $cases->de1." ";} 
      if (isset($cases->de2)) {echo $cases->de2." ";} 
      if (isset($cases->de3)) {echo $cases->de3." ";} 
      ?>
  </body>
</html>
