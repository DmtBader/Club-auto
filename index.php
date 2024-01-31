<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club auto</title>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
       
        <?php
            include 'banniere.php';

            include 'navbarre.php';
        ?>
    </header>

    <main>
        
        <Div> <img src="http://localhost/Clubauto/Media/vehicule1.webp" alt="plusieurs voiture aligné vu de coté au niveau du sol avec un soleil éclatant perçant les nuages"> </Div>

        <Div><h2>CLUB AUTO <span>LE MEILLEUR DE L'AUTOMOBILE</span></h2></Div>  <!--titre 2 colors-->
      
        <section> <!--1ere section 4 conteneurs-->
           <Div>
                <Div> <img src="http://localhost/Clubauto/Media/clients.webp" alt="clients qui exprime leurs avec un geste de victoire devant un véhicule"></Div>
                <Div>
                    <h3>BIENVENU CHEZ <span>CLUB AUTO</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolore dolorem voluptatibus!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, at eligendi unde iure ipsum, sit, doloribus dolorem voluptatum quidem laborum quaerat cupiditate dolore assumenda in consequuntur. Labore quod consequuntur harum velit suscipit repellat, totam atque quasi nam quis fugit ut?</p>
                </Div>
           </Div>
            <Div>
                <Div>
                    <h3>LE MEILLEUR DE L'AUTOMOBILE</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, magni. Nisi, sed libero laudantium accusamus minus tempore reprehenderit nam, doloribus dignissimos eaque cumque tenetur, quo consectetur dolores beatae voluptatibus aspernatur?</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </Div>
                <Div><img src="http://localhost/Clubauto/Media/entretien.webp" alt="technicien qui nettoie un véhicule avec précision, le regard dans le prolongement du véhicule"></Div>
            </Div>
        </section>

        <section> <!--2eme section background et 2 conteneurs-->
            <Div>
                <h3>Vous souhaitez louer ?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum ratione asperiores quidem aperiam deserunt incidunt, eligendi ad? Magnam dolorem fugiat eum in? Eaque, laudantium accusantium.</p>
            </Div>
            <Div>
                <h3>Vous souhaitez achetez ?</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil consequatur aliquid quaerat molestiae illo doloribus suscipit ut dolorum perspiciatis, ratione omnis ea ducimus asperiores iure.</p>
            </Div>
       </section>

       <section> <!--ici normalement devrai ce trouver du php et requete sql/bdd pour l'affichage des dernier véhicule ajouté
                  on va ce contenter pour l'exercice du html/css avec un hidden en media query pour version mobile, on pourrait faire un slider pour l'affichage mobile-->
            <div><h2>VEHICULES RECENTS</h2></div>
            <div>
                <a href="http://localhost/Clubauto/détail.php">
                    <div>
                        <img src="http://localhost/Clubauto/Media/vehicule2.webp" alt="véhicule audi vu de profils droit">
                        <div>
                            <div><!--div border bottom -->
                                <p>BMW 535I, NAVI, LEATHER, ABS</p>
                                <DIV><p>5 500 €</p></DIV>
                            </div>   
                        </div>
                    </div>
                </a>
                <a href="http://localhost/Clubauto/détail.php">
                    <div>
                        <img src="http://localhost/Clubauto/Media/vehicule2.webp" alt="véhicule audi vu de profils droit">
                        <div>
                            <div><!--div border bottom -->
                                <p>BMW 328I, SPORT LINE BODY KIT</p>
                                <DIV><p>8 000 €</p></DIV>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="http://localhost/Clubauto/détail.php">
                    <div>
                        <img src="http://localhost/Clubauto/Media/vehicule2.webp" alt="véhicule audi vu de profils droit">
                        <div>
                            <div><!--div border bottom -->
                                <p>FORD EXPLORER 2015 4WD</p>
                                <DIV><p>9 000€</p><p>8 200 €</p></DIV>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section><!--4 eme section  1/4/1 conteneur -->

            <div><h2>Pourquoi nous choisir ?</h2></div>
            
            <div>
                <div>
                    <img src="http://localhost/Clubauto/Media/icon1.webp" alt="icone étiquette orange">
                    <div>
                        <p>FINANCEMENT</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus inventore quia fuga fugiat, excepturi esse dicta soluta expedita dolore accusamus ipsa, voluptatem autem similique doloribus!</p>
                    </div>
                </div>
                <div>
                    <img src="http://localhost/Clubauto/Media/icon2.webp" alt="icone compteur automobile orange">
                    <div>
                        <p>RÉACTIVITÉ DE L'ÉQUIPE TECHNIQUE</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, unde dolore consequuntur ratione aperiam enim obcaecati labore excepturi quam, earum id, maxime totam cum tempore?</p>
                    </div>
                </div>
                <div>
                    <img src="http://localhost/Clubauto/Media/icon3.webp" alt="icone bulle de discussion orange">
                    <div>
                        <p>A L'ÉCOUTE DE NOTRE CLIENTÈLE</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus maxime nobis repellat doloribus vel qui laboriosam ipsa illum suscipit, libero voluptatum deserunt aspernatur distinctio fugiat.</p>
                    </div>
                </div>
                <div>
                    <img src="http://localhost/Clubauto/Media/icon4.webp" alt="icone carnet de note orange">
                    <div>
                        <p>SERVICE & MAINTENANCE</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nulla nobis vel soluta quia odit odio ut mollitia fugiat nostrum aut ea, dicta esse quo.</p>
                    </div>
                </div>
            </div>

            <a href="">
                <div>CONTACTEZ NOUS</div>
            </a>

        </section>

        <section> <!--5eme section 1 conteneur avec transparence et background en fond-->
            <div>
                <h2>CLUB AUTO<br><span>VENTE ET LOCATION</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur et vel eaque. Fugit vitae inventore architecto alias velit totam magnam sint dignissimos vero quis, necessitatibus porro cumque, corrupti culpa voluptates? Est qui deleniti nemo cum!</p>
            </div>
        </section> 

        <?php
            include 'footer.php';
        ?>



    </main>

    
</body>
</html>