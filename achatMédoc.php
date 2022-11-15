<?php
// if(isset($_POST["valider"])){
//     $db= new PDO('mysql:host=localhost;dbname=miafe_kondji;','root','');
//     if(isset($_POST['submit'])){
//         $image=$_FILES['image']['name'];
//         $destination='images/'.$image;
//         $imagePath = pathinfo($destination,PATHINFO_EXTENSION);
//         $valid_extension =array("jpg","png","gif");
//      $req=$db->prepare("INSERT INTO image (image)VALUES (?)");
//      $req->execute(array($_FILES['image']['name'],));
//         if(!in_array(strtolower( $imagePath), $valid_extension)){
//             //condition  
//         }
//         if(!move_uploaded_file($_FILES['image']['tmp_name'],$destination )){
//             //condition  
//         }
//     }
//     // $req=$db->prepare("INSERT INTO image (nom,taille,type,bin)VALUES (?,?,?,?)");
//     // $req->execute(array($_FILES["image"]["nom"],$_FILES["image"]["taille"],$_FILES["image"]["type"],file_get_contents($_FILES["image"]["tmp_name"])));
// }

?>
<?php 
include("cnx.php");

            if(isset($_POST['valider'])){
                $image=$_FILES['image']['tmp_name'];
                $trajet="images/".$_FILES['image']['name'];

                move_uploaded_file($image,$trajet);
                $req = $conn->prepare("INSERT INTO image (image) values (':image')");
                $req->execute(array($_FILES['image']['name'],));
                if ( $req->rowCount() > 0){
                                     echo "votre demande a été envoyer " ;
                    
                         }else{
                               echo "NON";
                           }
                // $stmt->bindParam(':image', $trajet);
                // $stmt->exec(array($_FILES['image']['name'],));
                //     echo "Insertion des donnés validés";
            }
             ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="médoc.css">
</head>
<body>
    <div class="topbar" >
        <div>
            <div class="contact">
                <a href="mailto:tadjidini@gmail.com">tadjidini@gmail.com  &nbsp; &nbsp;</a>
                <a href="tel:+228 90925266/97591542">+228 90925266</a>

            </div>
            <div>

            </div>
        </div>
    </div>
    <nav class="navbar">
        <a href="#" class="logo">MIA FE KONDJI</a>
        <div class="nav-link ">
            <ul>
                <li><a class="nav-link scrollto " href="index.php">Accueil</a></li>
                <li><a href="#" class="active">Achat Médicament</a></li>
                <li><a href="#"> Achat Kit chirurgicale</a></li>
                    <li><a href="#">formation</a></li>
                    <li> <a href="#">Dons</a></li>
              </ul>
        </div>
    </nav>
    
    <section class="breadcrumbs">
      <div class="container">

        <div class="unique">
          <h2>Achat Médicament</h2>
            <a href="https://wa.me/+228 92 61 41 48">contacter nous par Whatsapp
                <img src="img/icons8_whatsapp_32.png" alt="" class="logo">
            </a>
          
            
        </div>

      </div>
    </section>
    <section class="inner-page">
        
        <div class="container">
          <div id="conseils">
            <h3>5 Règles pour l'achat de vos  médicamant</h3>
            
            <ul>
                <li>envoyer une photo claire de l'ordonnance</li>
                <li>les produits qui doivent étres acheter doivent etres mise en évidence </li>
                <li> n'oublier pas d'appeler pour confirmation </li>
                <li> le payement se fais a la reception du produit par le client </li>
                <li>la totalité de la somme pas de crédit</li>
                <br>
                <form Method="POST" action="" enctype="multipart/form-data"> 
                    <input type="file" name="image"> <br/>
                    <input type="submit" name ="valider" value="Envoyer">
                </form>
            </ul>
                
        </div>
        </div>
      </section>
</body>
</html>
