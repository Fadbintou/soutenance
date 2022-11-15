

<?php
//connexion a la base de donnée
$db= new PDO('mysql:host=localhost;dbname=miafe_kondji;','root','');
if(isset($_POST['submit'])){
   /*VERIFICATION DES CHAMPS VIDES*/
  if (!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['Email']) AND !empty($_POST['Tel']) AND !empty($_POST['Date']) AND !empty($_POST['Servises']) AND !empty($_POST['Message'])){
    // RECUPERATION DES DONNEE DANS UNE VARIABLE
    // var_dump($_POST['Nom']);
   $nom = htmlspecialchars($_POST['Nom']);
   $prenom = htmlspecialchars($_POST['Prenom']);
   $email = htmlspecialchars($_POST['Email']);  
   $tel = htmlspecialchars($_POST['Tel']); 
   $date= htmlspecialchars($_POST['Date']);
   $services = htmlspecialchars($_POST['Services']);
   $message =htmlspecialchars($_POST['Message']);
   $req = $db->prepare("INSERT INTO rendez-vouz (nom,prenom,email,tel,dte,servi,msg)VALUES (?,?,?,?,?,?,?)");
   $req->execute(array($nom,$prenom,$email,$date,$tel,$servvices,$message));

        if ( $req->rowCount() > 0){
                echo "votre demande a été envoyer " ;

        }else{
            echo "NON";
        }

  }else{
        echo "<script>alert('Veuillez remplir tous les champs!')</script>";
    }  
}





?>