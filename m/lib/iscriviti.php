<?php

class iscriviti{
   public function insert(){
       $id = session_id();
       
		/*if($cap == '' || $nome == '' || $cognome == '' || 
		   $indirizzo == '' || $data == '' || $tel == '' ||
		   $email == '' || $psw == '' || $cf == ''){ */

      //IP O LOCALHOST
      $host ='localhost';
      $dbname='ciakchep_gianmarcoapp';
      $user='ciakchep_gianmarco';
      $pass='ADf3zhoHcp+T';

      $hostdbname="mysql:host=".$host.";dbname=".$dbname.";charset=utf8;";
   
      try{
         //CONNESSIONE DB
         $conn = new PDO($hostdbname, $user, $pass);}
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Connessione Fallita!";
         die();}

         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         //echo "Connessione Riuscita!";
         //EOF CONNESSIONE DB

         $select = "SELECT * FROM clienti";

      //SELECT DB
      try{
         $stmt = $conn->prepare($select);
         $stmt->execute();
         }
        
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Connessione Fallita!";
         die();}
         
  if($_SERVER['REQUEST_METHOD']=='POST'){
	
	  /* //DEBUG POST
	    
	    echo $cap = $_POST['cap'];
		echo $nome = $_POST['nome'];
		echo $cognome = $_POST['cognome'];
		echo $indirizzo = $_POST['indirizzo'];
		echo $data = $_POST['data'];
		echo $tel = $_POST['tel'];
		echo $email = $_POST['email'];
		echo $psw = $_POST['psw'];
		echo $cf = $_POST['cf'];
		
		
		 $cap = urldecode($_POST['cap']);
		 $nome = urldecode($_POST['nome']);
		 $cognome = urldecode($_POST['cognome']);
		 $indirizzo = urldecode($_POST['indirizzo']);
		 $data = urldecode($_POST['data']);
		 $tel = urldecode($_POST['tel']);
		 $email = urldecode($_POST['email']);
		 $psw = urldecode($_POST['psw']);
		 $cf = urldecode($_POST['cf']);
		
		*/
            
         $cap = $_POST['cap'];
		 $nome = $_POST['nome'];
		 $cognome = $_POST['cognome'];
		 $indirizzo = $_POST['indirizzo'];
		 $data = $_POST['data'];
		 $tel = $_POST['tel'];
		 $email = $_POST['email'];
		 $psw = $_POST['psw'];
		 $cf = $_POST['cf'];
		 
         //print_r(json_encode($_POST));

  }
		 
		 
    if($_SERVER['REQUEST_METHOD']=='GET'){
	
	  /* //DEBUG GET
	    
	    echo $cap = $_GET['cap'];
		echo $nome = $_GET['nome'];
		echo $cognome = $_GET['cognome'];
		echo $indirizzo = $_GET['indirizzo'];
		echo $data = $_GET['data'];
		echo $tel = $_GET['tel'];
		echo $email = $_GET['email'];
		echo $psw = $_GET['psw'];
		echo $cf = $_GET['cf']; */
            
	     $cap = $_GET['cap'];
		 $nome = $_GET['nome'];
		 $cognome = $_GET['cognome'];
		 $indirizzo = $_GET['indirizzo'];
		 $data = $_GET['data'];
		 $tel = $_GET['tel'];
		 $email = $_GET['email'];
		 $psw = $_GET['psw'];
		 $cf = $_GET['cf'];
		 
        //print_r(json_encode($_GET));

    }
		 
/*		 if($_SERVER['REQUEST_METHOD']=='POST'){

		 
        $cap = json_decode(file_get_contents('php://input'), true);
        print_r($cap);
        echo $cap["cap"];
        
        $nome = json_decode(file_get_contents('php://input'), true);
        print_r($nome);
        echo $nome["nome"];
        
        $cognome = json_decode(file_get_contents('php://input'), true);
        print_r($cognome);
        echo $cognome["cap"];
        
        $indirizzo = json_decode(file_get_contents('php://input'), true);
        print_r($indirizzo);
        echo $indirizzo["indirizzo"];
        
        $data = json_decode(file_get_contents('php://input'), true);
        print_r($data);
        echo $data["data"];
        
        $tel = json_decode(file_get_contents('php://input'), true);
        print_r($tel);
        echo $tel["tel"];
        
        $email = json_decode(file_get_contents('php://input'), true);
        print_r($email);
        echo $email["email"];
        
        $psw = json_decode(file_get_contents('php://input'), true);
        print_r($psw);
        echo $psw["psw"];
        
        $cf = json_decode(file_get_contents('php://input'), true);
        print_r($cf);
        echo $cf["cf"];} */
                    
         //Connessione Al DB Chiusa!
         //EOF SELECT DB
         
      //ESEMPIO GENERICO
     // $insert = "insert into clienti (id, cap, nome, cognome, indirizzo, data, tel, email, psw, cf) values (null, 00154, 'Giorgio', 'Simeoni', 'Via dei ronchi', '03/08/1972', '+393384368910', 'simeoni@gmail.com', 'password', 'smngrg71e08h201t')";

        $insert = "insert into clienti (id, cap, nome, cognome, indirizzo, data, tel, email, psw, cf) values (null, $cap, '$nome', '$cognome', '$indirizzo', '$data', '$tel', '$email', '$psw', '$cf')";

      //INSERT DB
      try{
         $stmt2 = $conn->prepare($insert);
         $stmt2->execute();}
        
      catch(PDOException $e){
         echo $e->getMessage();
         echo "<br />" . "Iscrizione Fallita!";
         die();}
                    
         $conn = null;
         }}

?>