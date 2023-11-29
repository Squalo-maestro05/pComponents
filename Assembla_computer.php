
<html>
<head>

<title>Ordina PC</title>
</head>

<body>

<?php
  

    if (isset ($_POST['tipocheck'])) 
	{$tipocheck=$_POST['tipocheck'];  
     foreach ($tipocheck as $t)
	 {echo "<p>******************************</p>";  
	  echo "<p>Prova passaggio parametro</p>";  
	  echo "<p> Valore tipo check </p>".$t;  
	  echo "<p>******************************</p>";  
     }
    }
  

  if (isset ($_POST['cognome']))   {$cognome=$_POST['cognome'];}     else {$cognome='';}
  if (isset ($_POST['nome']))      {$nome=$_POST['nome'];}           else {$nome='';}
  if (isset ($_POST['indirizzo'])) {$indirizzo=$_POST['indirizzo'];} else {$indirizzo ='';}
  if (isset ($_POST['Email'])) {$Email=$_POST['Email'];} else {$Email ='';}
  if (isset ($_POST['scelta-cpu']))   {$processore=$_POST['scelta-cpu'];}     else {$processore='';}
  if (isset ($_POST['scelta-gpu']))      {$scheda_video=$_POST['scelta-gpu'];} else {$scheda_video='';}
  if (isset ($_POST['scheda-madre'])) {$scheda_madre=$_POST['scheda-madre'];} else {$scheda_madre ='';}

  echo "Dati inseriti in tabella utente";
  echo "<p> Cognome  : ". $cognome."</p> ";
  echo "<p> Nome     : ". $nome."</p> ";
  echo "<p> Indirizzo: ". $indirizzo."</p> ";
  echo "<p> Email: ". $Email."</p> ";
  echo "Dati inseriti in tabella computer";
  echo "<p> Processore  : ". $processore."</p> ";
  echo "<p> Scheda video     : ". $scheda_video."</p> ";
  echo "<p> Scheda madre: ". $scheda_madre."</p> ";


     $db_host = "127.0.0.1";
     $db_user = "root";              
     $db_password = "";     //rootroot per btnami 
     $db_database = "pcomponents";

     $connessione=mysqli_connect($db_host,$db_user,$db_password,$db_database);

     if (!$connessione)
       {
       die('Attenzione non connesso: ' . mysqli_error());
       }
   $qu= ("insert into tbl_utente(Cognome, Nome, Indirizzo, Email)
          values (
            '$cognome',
            '$nome',
            '$indirizzo',
            '$Email')
      ");
  $qu= ("insert into tbl_components(processore, scheda_video, scheda_madre)
      values (
           '$processore',
           '$scheda_video',
           '$scheda_madre')
  ");
									 
   $risultato = mysqli_query($connessione,$qu);

   if(!$risultato)
	{
		echo('Errore: '.mysqli_error($connessione));
	}
	else
	{ echo "<p>******************************</p>"; 
      echo "<br>";
	  echo "inserimento effettuato con successo";
	}

								 

mysqli_close($connessione);

      
?>
<br><br>
<a href="Pc components.html">Torna alla home</a>

</body>
</html>
