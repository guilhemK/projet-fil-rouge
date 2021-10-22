<?php
$title="fiche-produit";
@include("head.php");
?>
<body>
    <div id="product">
        <?php
        @include("header.php");
        ?>
        <section>
            <div class="product-skin-card">
                <div class="product-img-skin">
                    <img src="./images/Aatrox/Aatrox_lune_de_sang_prestige.jpg" alt="aatrox lune de sang Edition Prestige">
                </div>
                <div class="product-text-skin">
                    <h2>Aatrox lune de sang Edition Prestige</h2>
                </div>
            </div>
            <div class="price-skin-container">
                <p class="price-skin"><span>Prix :</span> 10 €</p>
            </div>
            <div class="buy-button-container">
                <a href="">Ajouter au panier</a>
            </div>
        </section>
        <section>
            <div class="payment-means-main-container">
                <div class="payment-means-container">
                    <div class="payment-means">
                        <p>Carte Bleu</p>
                    </div>
                    <div class="payment-means">
                        <p>PayPal</p>
                    </div>
                    <div class="payment-means">
                        <p>Virement</p>
                    </div>
                </div>
                <div class="use-terms-container">
                    <p>Conditions d'utilisations :</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </section>
    </div>
</body>