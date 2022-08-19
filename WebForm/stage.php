<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="stage.css" />
        <title>Stage </title>
        <link rel = "icon" href = "images/logo.png"  type = "image/x-icon">
    </head>
    
    <body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <div id="logo">
                        <img id="img1" src="images/EMI.png" alt="Logo EMI"  />
                        <h1>Enquêtes sur entreprises</h1> 
                        <img id="img2" src="images/HCP.png" alt="Logo HCP"  />   
                    </div>
                </div>
                
                <nav id="nav">
                    <ul>
                        <li><a href="#titre_1">IDENTIFICATION DE L'ENTREPRISE</a></li>
                        <li><a href="#titre_2">CARACTERISTIQUES DE L'ENTREPRISE</a></li>
                    </ul>
                    <hr>
                </nav>
            </header>
            
            
            <section>
                <form action="stage.php" method="POST">
                    <div id="identification">
                        <p id="titre_1">I - IDENTIFICATION DE L'ENTREPRISE</p>
                        <div>
                            <p>ID de l'entreprise : </p>
                            <input type="text" id="id" name="id" placeholder="L'identifiant de la société ..."><br>
                            </div>
                        <div>
                            <p>Nom ou raison sociale : </p>
                            <input type="text" id="name" name="name" placeholder="Le nom de la société ..."><br>
                            </div>
                            <div>
                                <p>Adresse : </p>
                                <input type="text" id="adresse" name="adresse" placeholder="L'adresse du siège ..."><br>
                            </div>
                            <div>
                                <p>Ville :</p>
                                <input type="text" id="ville" name="ville" placeholder="La ville du siège ..."><br>
                            </div>
                            <div>
                                <p>Région : </p>
                                <select id="region" name="region">
                                    <option value="1">Tanger-Tétouan-Al Hoceïma</option>
                                    <option value="2">L'Oriental</option>
                                    <option value="3">Fès-Meknès</option>
                                    <option value="4">Rabat-Salé-Kénitra</option>
                                    <option value="5">Bénie Mellal-Khénifra</option>
                                    <option value="6">Casablanca-Settat</option>
                                    <option value="7">Marrakech-Safi</option>
                                    <option value="8">Drâa-Tafilalet</option>
                                    <option value="9">Souss-Massa</option>
                                    <option value="10">Guelmin-Oued Noun</option>
                                    <option value="11">Laâyoune-Sakia El Hamra</option>
                                    <option value="12">Dakhla-Oued Ed-Dahab</option>
                                </select>
                                <br>
                            </div>
                            <div>
                                <p>Province ou préfecture :</p>
                                <input type="text" id="province" name="province" placeholder="La province du siège ..."><br>
                            </div>
                            <div>
                                <p>Commune :</p>
                                <input type="text" id="commune" name="commune" placeholder="La commune du siège ..."><br>
                            </div>
                            <div>
                                <p>Téléphone :</p>
                                <input type="text" id="tele" name="tele" placeholder="Le numéro de téléphone ..."><br>
                            </div>
                            <div>
                                <p>Fax :</p>
                                <input type="text" id="fax" name="fax" placeholder="Le numéro du fax ..."><br>
                            </div>
                            <div>
                                <p>Adresse E-mail : </p>
                                <input type="email" id="email" name="email" placeholder="L'adresse e-mail ...">
                                
                            </div>

                    </div>
                    <div id="caracteristiques">
                        <p id="titre_2"> II - CARACTERISTIQUES DE L'ENTREPRISE</p>
                        <div  id="formejuridique">
                            <p>Forme juridique : </p>
                                <div>
                                <input type="radio" id="SA" name="forme" value="SA" onclick="removextra1()" checked="checked">
                                <label for="SA">SA</label>
                                </div>
                                <div>
                                <input type="radio" id="SARL" name="forme" value="SARL" onclick="removextra1()">
                                <label for="SARL">SARL</label>
                                </div>
                                <div>
                                <input type="radio" id="Individuelle" name="forme" value="Individuelle" onclick="removextra1()">
                                <label for="Individuelle">Entreprise Individuelle</label>
                                </div>
                                <div>
                                <input type="radio" id="Coopérative" name="forme" value="Coopérative" onclick="removextra1()">
                                <label for="Coopérative">Coopérative</label>
                                </div>
                                <div>
                                <input type="radio" id="Autreforme" name="forme" value="Autre">
                                <label for="Autreforme">Autre forme à préciser</label>
                                </div>
                            </div>
                            <div>
                                <p>Numéro du RC : </p>
                                <input type="text" id="RC" name="RC" placeholder="Le numéro du RC ...">
                            </div>
                            <div>
                                <p>Numéro du tribunal :</p>
                                <input type="text" id="tribunal" name="tribunal" placeholder="Le numéro du tribunal ...">
                            </div>
                            <div>
                                <p>Numéro de la taxe professionnelle ( ex Patente ):</p>
                                <input type="text" id="patente" name="patente" placeholder="Le numéro de la taxe professionnelle ...">
                            </div>
                            <div>
                                <p>N°IS ou IR</p>
                                <input type="text" id="ir" name="ir" placeholder="Le numéro IS ou IR ...">
                            </div>
                            <div>
                                <p>N° de l'identifiant fiscal :</p>
                                <input type="text" id="idfiscal" name="idfiscal" placeholder="L'identifiant fiscal ...">
                            </div>
                            <div>
                                <p>N° de l'affiliation à la CNSS :</p>
                                <input type="text" id="cnss" name="cnss" placeholder="Le numéro de la CNSS ...">
                            </div>
                            <div>
                                <p>N° de l'identifiant commun de l'entreprise ICE </p>
                                <input type="text" id="ice" name="ice" placeholder="Le numéro du ICE ...">
                            </div>
                            <div id="datepick">
                                <p>Date de la création de l'entreprise :</p>
                                <input type="date" id="date" name="date" >
                            </div>
                            <div id="lieudeclaration">
                                <p>Lieu de la déclaration de la création de l'entreprise :</p>
                                <div class="choice">
                                <input type="radio" id="CRI" name="lieu" value="CRI" onclick="removextra2()">
                                <label for="CRI">1 - Centre Régional d'Investissmenet ( CRI )</label>
                                </div>
                                <div class="choice">
                                <input type="radio" id="Autrelieu" name="lieu" value="Autre">
                                <label for="Autrelieu">2 - Autre à préciser</label>
                                </div>
                            </div>
                            <div>
                                <p>Activité principale :</p>
                                <select id="activitepr" name="activitepr">
                                    <option value="1">AGRICULTURE, SYLVICULTURE ET PÊCHE</option>
                                    <option value="2">INDUSTRIES EXTRACTIVES</option>
                                    <option value="3">INDUSTRIE MANUFACTURIÈRE</option>
                                    <option value="4">PRODUCTION ET DISTRIBUTION D'ÉLECTRICITÉ, DE GAZ, DE VAPEUR ET D'AIR CONDITIONNÉ</option>
                                    <option value="5">PRODUCTION ET DISTRIBUTION D'EAU ; ASSAINISSEMENT, GESTION DES DÉCHETS ET DÉPOLLUTION</option>
                                    <option value="6">CONSTRUCTION </option>
                                    <option value="7">COMMERCE ; RÉPARATION D'AUTOMOBILES ET DE MOTOCYCLES </option>
                                    <option value="8">TRANSPORTS ET ENTREPOSAGE</option>
                                    <option value="9">HÉBERGEMENT ET RESTAURATION </option>
                                    <option value="10">INFORMATION ET COMMUNICATION </option>
                                    <option value="11">ACTIVITÉS FINANCIÈRES ET D'ASSURANCE</option>
                                    <option value="12">ACTIVITÉS IMMOBILIÈRES</option>
                                    <option value="13">ACTIVITÉS SPÉCIALISÉES, SCIENTIFIQUES ET TECHNIQUES</option>
                                    <option value="14">ACTIVITÉS DE SERVICES ADMINISTRATIFS ET DE SOUTIEN</option>
                                    <option value="15">ADMINISTRATION PUBLIQUE</option>
                                    <option value="16">ENSEIGNEMENT</option>
                                    <option value="17">SANTÉ HUMAINE ET ACTION SOCIALE</option>
                                    <option value="18">ARTS, SPECTACLES ET ACTIVITÉS RÉCRÉATIVES</option>
                                    <option value="19">AUTRES ACTIVITÉS DE SERVICES</option>
                                    <option value="20"> ACTIVITÉS DES MÉNAGES EN TANT QU'EMPLOYEURS ; ACTIVITÉS INDIFFÉRENCIÉES DES MÉNAGES EN TANT QUE PRODUCTEURS DE BIENS ET SERVICES POUR USAGE PROPRE</option>
                                    <option value="21">ACTIVITÉS EXTRA-TERRITORIALES </option>
                                </select>
                            </div>
                            <div>
                                <p>Première activité secondaire :</p>
                                <input type="text" id="activitesec" name="activitesec" placeholder="L'activité secondaire majeure  ...">
                            </div>
                            <div>
                                <p>Gnere du dirigeant :</p>
                                <div >
                                <input type="radio" id="M" name="genre" value="M" checked="checked">
                                <label for="M">1 - Masculin</label>
                                </div>
                                <div>
                                <input type="radio" id="F" name="genre" value="F">
                                <label for="F">2 - Féminin</label>
                                </div>
                            </div>
                            <div>
                                <p>Montant du capital social en DH :</p>
                                <input type="number" id="capital" name="capital" >
                            </div>
                            <div>
                                <p>Part du privé marocain ( en % )  :</p>
                                <input type="number" id="prive" name="prive" min="0" max="100">
                            </div>
                            <div>
                                <p>Part du public marocain ( en % )  :</p>
                                <input type="number" id="public" name="public" min="0" max="100">
                            </div>
                            <div>
                                <p>Part étrangère ( en % )  :</p>
                                <input type="number" id="etranger" name="etranger" min="0" max="100">
                            </div>
                            <div>
                                <p>Part du capital social détenu par les marocain résidents à l'étranger ( en % ) :</p>
                                <input type="number" id="etranger_marocains" name="etranger_marocains" min="0" max="100">
                            </div>
                    </div>
                    <div>
                        <input type="submit" name="submit">
                    </div>
                    
                </form>
            </section>

            <hr>

            <footer>
                <div id="website">
                    <h1>Visitez le site officiel</h1>
                    <div>
                        <img src="images/Website.png" alt="Website Icon">
                        <div>
                            <a href="https://www.hcp.ma">www.hcp.ma</a>
                        </div>
                    </div>
                </div>
                <div id="keep">
                    <h1>Contactez-nous</h1>
                    <p><a href="https://web.facebook.com/HCPMaroc/"><img src="images/facebook.png" alt="Facebook" /></a><a href="https://twitter.com/hcpmaroc"><img src="images/twitter.png" alt="Twitter" /></a><a href="https://www.youtube.com/user/marochcp"><img src="images/youtube.png" alt="youtube" /></a></p>
                </div>
                <div id="about">
                    <h1>Infos</h1>
                    <div>
                        <img src="images/information.png" alt="Information Icon">
                        <div>
                            <p>Cette page n'est pas une page officielle, c'est juste un travail modeste relative au stage.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script>
            // When the user scrolls the page, execute myFunction
            window.onscroll = function() {myFunction()};

            // Get the header
            var header = document.getElementById("nav");

            // Get the offset position of the navbar
            var sticky = header.offsetTop;

            // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
            }

            const new1 = document.createElement("input");
            new1.type = "text" ;
            new1.id = "autreformetext";
            new1.name = "autreformetext";
            new1.placeholder = "Quelle est la forme juridique de l'entreprise ...";

            const new2 = document.createElement("input");
            new2.type = "text" ;
            new2.id = "autrelieutext";
            new2.name = "autrelieutext";
            new2.placeholder = "Veuiller préciser le lieu de la déclaration de l'entreprise ...";

            var btn1 = document.getElementById("Autreforme");
            btn1.onclick =function() {
                var container = document.getElementById("formejuridique") ;
                container.appendChild(new1) ;
            }


            function removextra1(){
                var removable = document.getElementById("autreformetext") ;
                removable.remove();
            }
        
            function removextra2(){
                var removable = document.getElementById("autrelieutext") ;
                removable.remove();
            }


            var btn2 = document.getElementById("Autrelieu");
            btn2.onclick =function() {
                var container = document.getElementById("lieudeclaration") ;
                container.appendChild(new2) ;
            }
        </script>
        <?php
            $conn = mysqli_connect('localhost','user_stage','123456789','entreprises');
            if(!$conn){
              echo("<script> alert('Cannot connect to database')</script>");
            }
            else{
                $id = mysqli_real_escape_string ($conn , $_POST["id"]) ;
                $name = mysqli_real_escape_string ($conn , $_POST["name"]) ;
                $ville = mysqli_real_escape_string ($conn , $_POST["ville"]) ;
                $tele = mysqli_real_escape_string ($conn , $_POST["tele"]) ;
                $email = mysqli_real_escape_string ($conn , $_POST["email"]) ;
                $forme = "" ;
                if(!empty($_POST['forme'])) {
                    $forme = mysqli_real_escape_string ($conn , $_POST["forme"]) ;
                }
                $date = mysqli_real_escape_string ($conn , $_POST["date"]) ;
                $genre = "" ;
                if(!empty($_POST['genre'])) {
                    $genre = mysqli_real_escape_string ($conn , $_POST["genre"]) ;
                }--
                $capitale = mysqli_real_escape_string ($conn , $_POST["capital"]) ;
                $sql = "insert into idcaracteristiques values ('$id','$name','$ville','$tele','$email','$forme','$date','$genre','$capitale')" ;
                mysqli_query($conn,$sql) ;
            }
        ?>
    </body>
</html>