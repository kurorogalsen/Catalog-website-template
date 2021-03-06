<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trouvez tout ce dont vous avez besoin sur Xeweul store !">

    <meta property="og:image" content="../images/3.jpg">
    <meta property="og:type" content="article">
    <meta property="og:description" content="Trouvez tout ce dont vous avez besoin sur Xeweul store !">
    <meta property="og:locale" content="sn_SN">
    <meta property="og:title" content="Trouvez tout ce dont vous avez besoin sur Xeweul store !">

    <meta property="twitter:image" content="../images/3.jpg">
    <meta property="twitter:description" content="Trouvez tout ce dont vous avez besoin sur Xeweul store !">
    <meta property="twitter:title" content="Trouvez tout ce dont vous avez besoin sur Xeweul store !">

    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../uikit-3.7.1/css/uikit.css">

    <title>Xeweul Store</title>
</head>
<body>
    <header class="container">        
        <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar uk-flex uk-flex-column">

                <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                    <li class="uk-active"><a href="#">Accueil</a></li>
                    <li class="uk-nav-divider"></li>
                    <li class="uk-parent">
                        <a href="./catalogue/index.html">Clothes</a>
                        <ul class="uk-nav-sub">
                            <li><a href="./catalogue/index.html">Men</a></li>
                            <li><a href="./catalogue/index.html">Women</a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="./catalogue/index.html">Jewelery</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="./catalogue/index.html">Electronics</a></li>
                </ul>

            </div>
        </div>
        
        <nav class="uk-navbar-container uk-background-secondary uk-light row" uk-navbar uk-sticky="bottom: #gda">
            <button class="uk-button uk-button-default uk-margin-small-left uk-hidden@l" type="button" uk-toggle="target: #offcanvas-nav-primary"> <span uk-icon="icon: menu; ratio: 1.2"></span></button>

            <div class="uk-navbar-left uk-visible@l">
                <a class="uk-navbar-item uk-logo" href="#">Xeweul Store</a>

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Accueil</a></li>
                    <li>
                        <a href="./catalogue/index.html">Clothing</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="./catalogue/index.html">Men's clothing</a></li>
                                <li><a href="./catalogue/index.html">Women's clothing</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="./catalogue/index.html">Jewelery</a></li>
                    <li><a href="./catalogue/index.html">Electronics</a></li>
                </ul>
            </div>
            
            <div class="uk-navbar-right">
                <div class="uk-navbar-item" style="padding: 0;">
                    <form class=" uk-visible@s" action="javascript:void(0)">
                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Rechercher un produit">
                        <button class="uk-button uk-button-default">Rechercher</button>
                    </form>
                    <div class="row uk-padding-small" style="cursor: pointer;">
                        <form id="panier" action="panier/panier.php" method="POST">
                            <input hidden type="text">
                            <input class="uk-button-primary" type="submit" value="PANIER">
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

<footer class="container column">
        <div class="row row-between .uk-margin-small-bottom col-11 col-sm-9 col-md-8 col-lg-7 col-xl-6">
            <div class="column" style="padding: 20px;" uk-scrollspy="cls:uk-animation-fade; delay: 400">
                <div>Xeweul Store</div>
                <div>Tel: <a href="tel:+221770000000">+221 77 000 00 00</a></div>
                <div>Mail: <a href="mailto:contact@xeweul.sn">contact@xeweul.sn</a></div>
                <div>Adresse: 88 rue du Flo, Dakar, S??n??gal</div>
            </div>
            <hr class="uk-divider-vertical uk-visible@s">
            <div class="column" style="padding: 20px;" uk-scrollspy="cls:uk-animation-fade; delay: 600">
                <div><a href="">Le store</a></div>
                <div><a href="">Politique</a></div>
                <div><a href="">FAQ</a></div>
            </div>
            <hr class="uk-divider-vertical">
            <div class="column" style="padding: 20px;" uk-scrollspy="cls:uk-animation-fade; delay: 600">
                <div>
                    <a href="" class="uk-icon-button uk-margin-small" uk-icon="twitter"></a>
                </div>
                <div>
                    <a href="" class="uk-icon-button uk-margin-small" uk-icon="facebook"></a>
                </div>
                <div>
                    <a href="" class="uk-icon-button uk-margin-small" uk-icon="whatsapp"></a>
                </div>
            </div>
        </div>

        <div class="row uk-margin-small-top">Ce site a ??t?? con??u et d??ploy?? par la <a href="" id="gda"> @Galsen Digital Agency</a> ????</div>
        <a style="position: fixed; bottom: 20px; right: 20px; background-color: black; padding: 10px 5px;" href="#" uk-totop uk-scroll></a>
    </footer>

    <script src="../uikit-3.7.1/js/uikit.js"></script>
    <script src="../js/script-get.js"></script>
    <script src="../uikit-3.7.1/js/uikit-icons.js"></script>
</body>
</html>