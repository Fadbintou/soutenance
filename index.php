
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" href="style.css">
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
        <div class="nav-link">
            <ul>
                <li class="active"><a href="#hero">Accueil</a></li>
                <li><a  href="#services">Services</a></li>
                <li><a  href="#departments">Departements</a></li>
                <li><a  href="#doctors">Docteurs</a></li>
                <li><a  href="#contact">contact</a></li>
                <li><a  href="achatMédoc.php">Achat médicament</a></li>
                <li><a  href="#about">A propos</a></li>
              </ul>
        </div>
        <a href="#appointment" class="appointment-btn">RENDEZ-VOUS</a>
        <img src="img/icons8_menu_32.png" alt="" class="burger">
    </nav>
    <section id="hero" class="second-block">
        <div class="container">
          <h1>BIENVENUE A MIA FE KONDJI</h1>
          <h2>VOTRE HOPITAL EN LIGNE</h2>
          <a href="#about" class="btn-get">Allons-y</a>
        </div>
    </section>
    <section  class="containerr">
        <div class="pop">
         <div class="content">
          <h3>Pourquoi choisire MIA FE KONDJI ?</h3>
              <p>
                Vous êtes en Europe, partout dans le monde. Vous avez des parents au Togo, des médecins chevronner sont disponible pour prendre soin de la santé de vos parents, enfants, personnes âgées, les proches. Tous les jours de la semaine nôtres équipes est disponible pour vous servire.
              </p>
          </div>
         </div>
         <div class=box> 
           <div class="popbox">
            <div class="content">
              <h4>Qu'est-ce que nous offrons</h4>
              <p>Bien évidement il y’a plusieurs centres de santé, avec nous vous gagner en temps, plus de fils d’attente interminable, plus de frustration concernent une consultation.</p>
            </div>
           </div> 
            <div class="popbox">
                  <div class="content">
                    <h4>Assistance <br>à domicile  </h4>
                    <p>Nous effectuons des soins a domicile selon vos souhait, surveillance à tout  bout  de champs, nous efectuons les controles de tensions et de glycémie.Des suivispour les personnes agées </p>
                  </div>
            </div> 
            <div class="popbox">
                  <div class="content">
                    <h4>Ordonnance prescription</h4>
                    <p>On vous a prescrit des produits,votre proche est dans un cas critique plus besoins de vous promener de pharmacie en pharmacie a la recherche des produits nous nous en occupons pour vous .</p>
                  </div>
                  </div>
            </div>
          </div> 
      </section>
       <!-- ======= Services Section ======= -->
       <section id="services" class="services">
        <div class="container">
  
          <div class="section-title">
            <h2>Services</h2>
            <p>Nous sommes dans le domaine de la médecine en général,nous travaillons avec des spécialiste dans diférent domaines faite nous confiance.notre défi est de veuillez a votre bien etre </p>
          </div>
        <div class="containner-serv">
          <div class="row1">
            <div class="card first">
              <div class="icon-box">
                <h4>Médecine generale</h4>
              </div>
            </div>
  
            <div class="card first">
              <div class="icon-box">
                <h4>Diabétologie</h4>
              </div>
            </div>
  
            <div class="card first">
              <div class="icon-box">
                <h4>Pédiatrie</h4>
              </div>
            </div>
            <div class="card first">
              <div class="icon-box">
                <h4>Ophtalmologie</h4>
              </div>
            </div>
            <div class="card first">
              <div class="icon-box">
                <h4>Neurologie</h4>
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="card second">
              <div class="icon-box">
                <h4>Chirurgie</h4>
              </div>
            </div>
            <div class="card second">
              <div class="icon-box">
                <h4>Dermatologie</h4>
              </div>
            </div>
            <div class="card second">
              <div class="icon-box">
                <h4>Cardiologie</h4>
              </div>
            </div>
  
            <div class="card second">
              <div class="icon-box">
                <h4>Dentiste</h4>
              </div>
            </div>
  
            <div class="card second">
              <div class="icon-box">
                <h4>Orthopediste</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
<!-- =======Section rendez vous ======= -->
<section id="appointment" class="appointment section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Programmer votre rendez-vous</h2>
          <p>Il est possible sur notre plateforme  de programer votre rendez vous compte tenus de votre disponibilité.Nous somme disponible pour vous servir .Vous devez juste renplir notre formulaire </p>
        </div>

    <div class="form-container">
      <form Method="POST" action="">
          <div class="form-group">
              <div class="form-item">
                  <input type="text" placeholder="Nom"  name="Nom">
              </div>
              <div class="form-item">
                  <input type="text" placeholder="Prénom"  name="Prenom">
              </div>
          </div>
          <div class="form-group">
             
              <div class="form-item">
                  <input type="email" placeholder="Email"  name="Email">
              </div>
              <div class="form-item">
                <input type="tel" placeholder="Téléphone"  name="Tel">
             </div>
          </div>
        <div class="form-group">
          <div class="form-item">
            <input type="date" placeholder="date" cols="30" rows="10"  name="Date">
        </div>
        <div class="form-item" >
          <select name="Services" id="doctor" class="form-select">
            <option value="">Selectionner un departement</option>
            <option value="">Medécine generale</option>
            <option value="">Pédiatrie</option>
            <option value="">Dermatologie</option>
          </select>
        </div>
      </div>
          <div class="message-form-item">
              <textarea name="Message" id="" cols="30" rows="10" placeholder="Message"></textarea>
          </div>
          
          <div class="submit-button">
               <button type="submit" name="submit">Envoyer</button> 
        
          </div>
      </form>
  </div>
</section>





    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Nos Departements</h2>
          <p>Nous avons des départements spéciphique grace a nos partenariat avec plusieurs acteurs de la place nous vous presentons quelle que un</p>
        </div>

        <div class="depart-cardiologie">
          <div class="globale-contener">
         
          <div class="depart-img">
            <img src="img/departments-1.jpg" alt="">
          </div>
          <h2> Cardiologie</h2>
          </div>
          <div class="globale-contener">
            
            <div class="depart-img">
              <img src="img/departments-2.jpg" alt="">
            </div>
            <h2> Neurologie</h2>
          </div>
          <div class="globale-contener">
              
              <div class="depart-img">
                <img src="img/departments-3.jpg" alt="">
              </div>
              <h2>Diabétologie</h2>
           </div>
           <div class="globale-contener">
              
            <div class="depart-img">
              <img src="img/departments-4.jpg" alt="">
            </div>
            <h2>Pédiatrie</h2>
         </div>
         <div class="globale-contener">
            <div class="depart-img">
              <img src="img/departments-5.jpg" alt="">
            </div>
            <h2>Ophtamologie</h2>
         </div>
        </div>
      </div>
      </section>
      <section id="doctors" class="doctors">
        <div class="container">
  
          <div class="section-title">
            <h2>Docteurs</h2>
          <p>Notre equipe est composer de docteurs compétent et  dévouer a leur metier.Ils sont là pour vous servire  </p>
        </div>
  
          <div class="row">
            <div class="cnt-docfirst">
            <div class="ctn-doc">
              <div class="member">
                <div class="detail"><img src="img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Medical Officer</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                </div>
              </div>
            </div>
  
            <div class="ctn-doc">
              <div class="member">
                <div class="detail"><img src="img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Medical Officer</span>
                  <br>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                </div>
              </div>
            </div>
          </div>
          <div class="cnt-docsecond">
            <div class="ctn-doc">
              <div class="member">
                <div class="detail"><img src="img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Medical Officer</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                </div>
              </div>
            </div>
  
            <div class="ctn-doc">
              <div class="member">
                <div class="detail"><img src="img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Medical Officer</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                </div>
              </div>
            </div>
          </div>
          </div>
  
        </div>
      </section>
      <section id="faq" class="faq section-bg">
        <div class="cntr">
  
          <div class="section-title">
            <h2>Nos patiens traiter</h2>
            <p>nous avons des témoignages  de nos patients traiter chez nous,ils sont satisfait de notre service et de notre accopagnement tout au long de leur traitement.</p>
          </div>
  
      </section>
      <section id="testimonials" class="testimonials">
        <div class="container">
  
          
        </div> 
      </section>
      <section id="about" class="about">
        <div class="container-fluid">
  
          <div class="row">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <video controls class="glightbox mb-4"  width="500" height="700"> 
            <source src="demo.mp4" type="video/mp4"> 
           </video>
            </div>
  
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
              <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
              <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>
  
              <div class="icon-box">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
  
              <div class="icon-box">
                <div class="icon"><i class="bx bx-gift"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
  
              <div class="icon-box">
                <div class="icon"><i class="bx bx-atom"></i></div>
                <h4 class="title"><a href="">Dine Pad</a></h4>
                <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
              </div>
  
            </div>
          </div>
  
        </div>
      </section>
      <section id="gallery" class="gallery">
        <div class="container">
  
          <div class="section-title">
            <h2>Notre équipements</h2>
            <p>Nous avons des équipements pour  prendre soindevotre santé.</p>
          </div>
        </div>
  
        <div class="container-gal">
          <div class="pictur">
            <div> 
                <div>
                  <img src="img/gallery/gallery-1.jpg" alt="" class="img-flui">
                </div>
               <div>
                <img src="img/gallery/gallery-2.jpg" alt="" class="img-flui">
               </div>
            </div>
            <div>
              <div>
                <img src="img/gallery/gallery-3.jpg" alt="" class="img-flui">
              </div>
              <div>
                <img src="img/gallery/gallery-4.jpg" alt="" class="img-flui">
              </div>
             
            </div>
            <div>
              <div>
                <img src="img/gallery/gallery-5.jpg" alt="" class="img-flui">

              </div>
              <div>
                <img src="img/gallery/gallery-6.jpg" alt="" class="img-flui">
              </div>
            </div>
            <div>
              <div>
                <img src="img/gallery/gallery-7.jpg" alt="" class="img-flui">

              </div>
              <div>
                <img src="img/gallery/gallery-8.jpg" alt="" class="img-flui">
              </div>
            </div>
            
          </div>
        </div>
       
      </section>
      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Zanguéra klikamé 500m du payage</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>MiafeKondji@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+228 92 61 41 48 /97 59 15 42</p>
                <p>+228 90 97 56 66 /90 61 16 34 </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="saisir votre  nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="saisir votre email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="objet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>   
    <footer id="footer">

      <div class="footer">
          <div class="ftcontainer">
  
            <div class="fs-cnfot">
              <h3>MIA FE KONDJI</h3>
              <p>
                Nous sommes a Zanguéra klikamé <br>
                route atchiadé gnigban 500 métre<br>
                 du payage <br><br>
                <strong>tel:</strong> +228 92 61 41 48<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>
  
            <div class="sc-cnt">
            <h3>Autres srvices</h3>
              <p>Les analyses</p>
              <p>Consultation prénatale</p>
              <p>intervention chyrirgicale</p>
              <p>suivit a domicile</p>
  
            </div>
  
            <div class="s">
              <h3>Nos reseaux sociaux</h3>
              <br>
              <br>
  
        <div >
         
        </div>
        <div>
         
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
              
          </div>
        </div>
      </div>
  
    </footer>  

</body>
    <script>
        const burger = document.querySelector(".burger")
        const navlink = document.querySelector(".nav-link")
        burger.addEventListener('click',()=>{
            navlink.classList.toggle('mobile-menu')
        })
    </script>
</html>