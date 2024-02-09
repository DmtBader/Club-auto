<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="CluB auto" />
    <meta name="description" content="le meilleur de l'automobile en location vente." />
    <meta name="keywords" content="automobile,vente,location" />
    <meta name="robots" content="noindex">
    <title>Club auto</title>
        <?php
            include 'link.php';
        ?>
</head>

<body>
    <header>
        <Div>
            <?php
                include 'banniere.php';
            ?>
        </Div>
        <Div class="imgHead imgnav">
            <?php
                include 'navbarre.php';
            ?>
        </Div>

        <Div class="bgBlack centerV padB20 padT20 FLar"><h2 class="ftwhite marL">CLUB AUTO <span class="ftOrange">LE MEILLEUR DE L'AUTOMOBILE</span></h2></Div>
    </header>

    <main>
        <section class="contBanH">
            <div class="grid2c gap3 marLR marSec1">
                <Div class="centerX2"> <img class="imgcont2" src="http://localhost/Clubauto/Media/clients.webp" alt="clients qui exprime leurs avec un geste de victoire devant un véhicule"></Div>
                <Div class="">
                    <h3 class="marB20 b700 FxL">BIENVENU CHEZ <span class="ftOrange">CLUB AUTO</span></h3>
                    <p class="marB20 b700 FS">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolore dolorem voluptatibus!</p>
                    <p class="b600 op3 FS Os">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, at eligendi unde iure ipsum, sit, doloribus dolorem voluptatum quidem laborum quaerat cupiditate dolore assumenda in consequuntur. Labore quod consequuntur harum velit suscipit repellat, totam atque quasi nam quis fugit ut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quisquam magni inventore et ipsa beatae.</p>
                </Div>
           
            
                <Div class="">
                    <h3 class="borbot marB20 padB20 b700 FxL">LE MEILLEUR DE L'AUTOMOBILE</h3>
                    <p class="marB20 b600 op2 Fli Os">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, magni. Nisi, sed libero laudantium accusamus minus tempore reprehenderit nam, doloribus dignissimos eaque cumque tenetur, quo consectetur dolores beatae voluptatibus aspernatur?</p>
                    <ul class="Puce ftOrange gap4 b600 Fli op">
                        <li><span class="ftBlack">Lorem ipsum dolor sit amet.</span> </li>
                        <li><span class="ftBlack">Lorem ipsum dolor sit amet.</span> </li>
                        <li><span class="ftBlack">Lorem ipsum dolor sit amet.</span> </li>
                        <li><span class="ftBlack">Lorem ipsum dolor sit amet.</span> </li>
                        <li><span class="ftBlack">Lorem ipsum dolor sit amet.</span> </li>
                    </ul>
                </Div>
                <Div class="centerX2"><img class="imgcont2" src="http://localhost/Clubauto/Media/entretien.webp" alt="technicien qui nettoie un véhicule avec précision, le regard dans le prolongement du véhicule"></Div>
            </div>
        </section>

        <section class="imgsec2 centerX2 Tsec2">
            <div class="grid2c gap3 marLR">
                <Div class="bgorange Pad50">
                    <h3 class="marB20 B800 FLar">Vous souhaitez louer ?</h3>
                    <p class="ftwhite FxS">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum ratione asperiores quidem aperiam deserunt incidunt, eligendi ad? Magnam dolorem fugiat eum in? Eaque, laudantium accusantium Lorem ipsum dolor sit amet. Lorem .</p>
                </Div>
                <Div class="bgRed Pad50">
                    <h3 class="marB20 B800 FLar">Vous souhaitez achetez ?</h3>
                    <p class="ftwhite FxS">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil consequatur aliquid quaerat molestiae illo doloribus suscipit ut dolorum perspiciatis, ratione omnis ea ducimus asperiores iure. Lorem ipsum dolor sit amet</p>
                </Div>
            </div>
       </section>

       <section class="bgBlack centerX2 incolumn"> 
            <div class="marLR marB8 marT30">
                <div class="centerX2 borbotO"><h2 class="ftwhite padB20 b700 FxxL">VEHICULES RECENTS</h2></div>
                <div class="grid3c gap3 marT20 b600 FS">
                    <a href="http://localhost/Clubauto/détail.php">
                        <div>
                            <img class="imgcont2 marB8" src="http://localhost/Clubauto/Media/vehicule2.webp" alt="véhicule audi vu de profils droit">
                            <div class="bgGray3 Pad20 ">
                                <div class="ftwhite inLine borbot">
                                    <p class="marR30">BMW 535I, NAVI, LEATHER, ABS</p>
                                    <div class="bgBlue secblue centerX2 marB20"><p>5 500 €</p></div>
                                </div>   
                            </div>
                        </div>
                    </a>
                    <a href="http://localhost/Clubauto/détail.php">
                        <div>
                            <img class="imgcont2 marB8" src="http://localhost/Clubauto/Media/vehicule2.webp" alt="véhicule audi vu de profils droit">
                            <div class="bgGray3 Pad20">
                                <div class="ftwhite inLine borbot">
                                    <p class="marR30">BMW 328I, SPORT LINE BODY KIT</p>
                                    <div class="bgBlue secblue centerX2 marB20"><p>8 000 €</p></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://localhost/Clubauto/détail.php">
                        <div>
                            <img class="imgcont2 marB8" src="http://localhost/Clubauto/Media/vehicule2.webp" alt="véhicule audi vu de profils droit">
                            <div class="bgGray3 Pad20">
                                <div class="ftwhite inLine borbot"><!--div border bottom -->
                                    <p class="marR30">FORD EXPLORER 2015 4WD</p>
                                    <div class="bgBlue secblue centerX2 incolumn marB20"><p class="ftLine ftBlack FxS">9 000€</p><p>8 200 €</p></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="centerX2 incolumn">
            <div class="marLR marTB40">
                <div class="centerX2 marB80 b700 FLar"><h2>Pourquoi nous choisir ?</h2></div>
                
                <div class="grid4c marB50">
                    <div class="inLine">
                        <img class="iconeBan" src="http://localhost/Clubauto/Media/icon1.webp" alt="icone étiquette orange">
                        <div class="marLR20">
                            <p class="marB10 B800 FSs">FINANCEMENT</p>
                            <p class="b600 Fli op2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus inventore quia fuga fugiat.</p>
                        </div>
                    </div>
                    <div class="inLine">
                        <img  class="iconeBan" src="http://localhost/Clubauto/Media/icon2.webp" alt="icone compteur automobile orange">
                        <div class="marLR20">
                            <p class="marB10 B800 FSs">RÉACTIVITÉ DE L'ÉQUIPE TECHNIQUE</p>
                            <p class="b600 Fli op2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, unde dolore consequuntur.</p>
                        </div>
                    </div>
                    <div class="inLine">
                        <img  class="iconeBan" src="http://localhost/Clubauto/Media/icon3.webp" alt="icone bulle de discussion orange">
                        <div class="marLR20">
                            <p class="marB10 B800 FSs">A L'ÉCOUTE DE NOTRE CLIENTÈLE</p>
                            <p class="b600 Fli op2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus maxime nobis repellat.</p>
                        </div>
                    </div>
                    <div class="inLine">
                        <img  class="iconeBan" src="http://localhost/Clubauto/Media/icon4.webp" alt="icone carnet de note orange">
                        <div class="marLR20">
                            <p class="marB10 B800 FSs">SERVICE & MAINTENANCE</p>
                            <p class="b600 Fli op2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nulla nobis vel soluta quia.</p>
                        </div>
                    </div>
                </div>
                <a  class="centerX2" href="http://localhost/Clubauto/contact.php">
                    <div class="bgBlue ftwhite round2 secblue2 centerX2 b600 FS">CONTACTEZ NOUS</div>
                </a>
            </div>
        </section>

        <section class="imgsec3 centerV">
            <div class="marLR marTB60">
                <div class="bgorange op timgsec5 Pad50">
                    <h2 class="marB10 b700 FxxL">CLUB AUTO<br>
                    <span class="ftwhite SpanDelM">VENTE ET LOCATION</span></h2>
                    <p class="b600 Fli">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur et vel eaque. Fugit vitae inventore architecto alias velit totam magnam sint dignissimos vero quis, necessitatibus porro cumque, corrupti culpa voluptates? Est qui deleniti nemo cum!</p>
                </div>
            </div>
        </section> 

        <?php
            include 'footer.php';
        ?>

        <script src="http://localhost/Clubauto/Script/scripts.js"></script>

    </main>

    
</body>
</html>