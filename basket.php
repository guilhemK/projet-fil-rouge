<?php
$title="panier";
@include("head.php");
?>
<body>
    <div id="basket">
        <?php
        @include("header.php");
        ?> 
        <div class="main-basket-container">
            <section class="product-to-pay">
                <div class="title-product-to-pay">
                    <h2>Panier</h2>
                </div>
                <div class="line-product">
                    <div>
                        <p>Produit :  <span class="basket-product"> Aatrox lune de sang Edition Prestige</span></p>
                    </div>
                    <div>
                        <p>Prix :   <span class="basket-product">20€</span></p>
                    </div>
                </div>
                <div class="line-product">
                    <div>
                        <p>Produit :   <span class="basket-product">Mecha Aatrox</span></p>
                    </div>
                    <div>
                        <p>Prix :   <span class="basket-product">7€</span></p>
                    </div>
                </div>
                <div class="line-product">
                    <div>
                        <p>Produit :   <span class="basket-product">Aatrox lune de sang</span></p>
                    </div>    
                    <div>
                        <p>Prix : <span class="basket-product">10€</span></p>
                    </div>
                </div>
                <div class="buy-product-to-pay">
                    <button class="button-buy">Acheter</button>
                </div>
            </section>
            <section class="pay">
                <div class="title-pay">
                    <h2>Paiement</h2>
                </div>
                <div class="column-list-price-container">
                    <div>
                        <ul class="ul-price">
                            <li class="li-price">Produit :  <span class="name-product">Aatrox lune de sang Edition Prestige</span></li>
                            <li class="li-price">Prix : 20€</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="ul-price">
                            <li class="li-price">Produit :  <span class="name-product">Mecha Aatrox</span></li>
                            <li class="li-price">Prix : 7€</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="ul-price">
                            <li class="li-price">Produit :  <span class="name-product">Aatrox lune de sang</span></li>
                            <li class="li-price">Prix : 10€</li>
                        </ul>
                    </div>
                </div>
                    <div class="total-container">
                        <p>Total :  37€</p>
                    </div>
                <div class="buy-pay">
                    <button class="button-buy">Payer</button>
                </div>
            </section>
        </div>
    </div>
</body