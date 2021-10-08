<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>League of skins</title>
</head>
<body>
    <div id="home">
        <?php
        @include("header.php");
        ?>
        <section>
            <div class="main-title-container">
                <h1>Liste des Skins</h1>
            </div>
                
            <div class="top-skins-list-container">
                
                <input type="search" placeholder="Rechercher..." class="top-search">
            </div>
            
        </section>
        <section id="all-skins-main-container">
            <div class="champion-skins-main-container">
                <div class="champion-title-container">
                     <h3>Aatrox</h3>
                </div>
            
                <div class="champion-skins-container">
                    <div class="champion-skin-card">
                        <img src="./images/Aatrox/Aatrox_justicier.jpg" alt="Aatrox justicier">
                        <h4>Aatrox justicier</h4>
                    </div>
                    <div class="champion-skin-card">
                        <img src="./images/Aatrox/Aatrox_mecha.jpg" alt="Mecha Aatrox">
                        <h4>Mecha Aatrox</h4>
                    </div>
                    <div class="champion-skin-card">
                        <img src="./images/Aatrox/Aatrox_pecheur.jpg" alt="Aatrox chasseur pecheur">
                        <h4>Aatrox chasseur marin</h4>
                    </div>
                    <div class="champion-skin-card">
                        <img src="./images/Aatrox/Aatrox_lune_de_sang.jpg" alt="Aatrox lune de sang">
                        <h4>Aatrox lune de sang</h4>
                    </div>
                    <div class="champion-skin-card">
                        <img src="./images/Aatrox/Aatrox_lune_de_sang_prestige.jpg" alt=" Aatrox lune de sang Edition Prestige">
                        <h4>Aatrox lune de sang Edition Prestige</h4>
                    </div>
                    <div class="champion-skin-card">
                        <img src="./images/Aatrox/aatrox_heros_de_guerre.jpg" alt="Aatrox héros de guerre">
                        <h4>Aatrox héros de guerre</h4>
                    </div>
                </div>
                
            </div>
            <div class="champion-skins-main-container">
                <div class="champion-title-container">
                  <h3>Ahri</h3>  
                </div>
                <div class="champion-skins-container">
                    <div class="champion-skin-card">
                        <img src="" alt="">
                        <h4>Ahri dynastique</h4>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>