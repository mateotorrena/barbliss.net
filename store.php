<!DOCTYPE html>
<html>
    <head>
        <title>The Barbliss</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="stylead.css" />
        <script src="javascript.js"></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <link><a href="index.html">HOME</a></link>
                    <link><a href="store.php">STORE</a></link>
                    <link><a href="about.html">ABOUT</a></link>
                    <a href="logout.php" class="btn btn-warning">Logout</a>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">The Barbliss</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">SNACKS</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Cheesy Burger</span>
                    <img class="shop-item-image" src="Burger.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">PIZZA</span>
                    <img class="shop-item-image" src="pizza.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">FRIES</span>
                    <img class="shop-item-image" src="fries.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Bundle Meal</span>
                    <img class="shop-item-image" src="Icon_Bundle-Meals.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">Drinks</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Blue Lagoon Cocktail</span>
                    <img class="shop-item-image" src="cocktails.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Fruity Tequila Drink</span>
                    <img class="shop-item-image" src="fruity.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="Burger.jpg" width="100" height="100">
                        <span class="cart-item-title">Cheesy Burger</span>
                    </div>
                    <span class="cart-price cart-column">$19.99</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="1">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="fries.jpg" width="100" height="100">
                        <span class="cart-item-title">Fries</span>
                    </div>
                    <span class="cart-price cart-column">$9.99</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="2">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$39.97</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">The Barbliss</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.youtube.com/" target="_blank">
                            <img src="Youtube Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://open.spotify.com/?" target="_blank">
                            <img src="Spotify Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebookfacebook.com" target="_blank">
                            <img src="Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>