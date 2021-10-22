<?php
$title="commandes";
@include("head.php");
?>
    <div id="order">
        <?php
        @include("header.php");
        ?>
        <section>
            <div class="main-title-container">
                <h2>Liste de mes Skins</h2>
            </div>
                
            <div class="top-skins-list-container">  
                <input type="search" placeholder="Rechercher..." class="top-search">
                <div class="dropdown">
                    <span>Champions</span>
                    <ul class="dropdown-content">
                      <li><a href="">AATROX<a></li>  
                      <li><a href="">AHRI</a></li> 
                    </ul>
                </div>
            </div>
            
        </section>
        <section id="all-skins-main-container">
            <div class="champion-skins-main-container">
                <div class="champion-title-container">
                        <h3>AATROX</h3>
                </div>
            
                <div class="champion-skins-container">
                    <a href="./ordered-product.php">
                        <div class="champion-skin-card">
                            <div class="champion-img-container">
                                <img src="./images/Aatrox/Aatrox_justicier.jpg" alt="Aatrox justicier">
                            </div>
                            <h4>Aatrox justicier</h4>
                        </div>
                    </a>
                    
                    <a href="./ordered-product.php">
                        <div class="champion-skin-card">
                            <div class="champion-img-container">
                                <img src="./images/Aatrox/Aatrox_mecha.jpg" alt="Mecha Aatrox">
                            </div>
                            <h4>Mecha Aatrox</h4>
                        </div>
                    </a>
                    <a href="./ordered-product.php">
                        <div class="champion-skin-card">
                            <div class="champion-img-container">
                                <img src="./images/Aatrox/Aatrox_pecheur.jpg" alt="Aatrox chasseur pecheur">
                            </div>
                            <h4>Aatrox chasseur marin</h4>
                        </div>
                    </a>
                    <a href="./ordered-product.php">
                        <div class="champion-skin-card">
                            <div class="champion-img-container">
                                <img src="./images/Aatrox/Aatrox_lune_de_sang.jpg" alt="Aatrox lune de sang" class="skin-img">
                            </div>
                            <h4>Aatrox lune de sang</h4>
                        </div>
                    </a>
                    <a href="./ordered-product.php">
                        <div class="champion-skin-card">
                            <div class="champion-img-container">
                                <img src="./images/Aatrox/Aatrox_lune_de_sang_prestige.jpg" alt=" Aatrox lune de sang Edition Prestige">
                            </div>
                            <h4>Aatrox lune de sang Edition Prestige</h4>
                        </div>
                    </a>
                    <a href="./ordered-product.php">
                        <div class="champion-skin-card">
                            <div class="champion-img-container">
                                <img src="./images/Aatrox/aatrox_heros_de_guerre.jpg" alt="Aatrox héros de guerre">
                            </div>
                            <h4>Aatrox héros de guerre</h4>
                        </div>
                    </a>
                </div>
                
            </div>
            <div class="champion-skins-main-container">
                <div class="champion-title-container">
                    <h3>AHRI</h3>  
                </div>
                <div class="champion-skins-container">
                    <a href="./ordered-product.php">
                        <div class="champion-skin-card">
                            <div class="champion-img-container">
                                <img src="" alt="">
                            </div>
                            <h4>Ahri dynastique</h4>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>