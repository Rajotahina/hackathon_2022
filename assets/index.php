<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <header>
        <div class="container-flex">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-3">
                    <div class="logo">
                        <img src="/Image/logo.png" alt="" srcset="" width="300px">
                    </div>
                </div>
                <!-- nav -->
                <nav class="col-lg-9 liste">
                    <ul class="nav-list">
                        <li class="list"><a href="index.php">Acceuil</a></li>
                        <li class="list"><a href="#">Qui somme nous?</a>
                            <p class="sous-text">
                                Digital Driver est une plateforme de publicité pour vendre et pour acheter tout matériel informatique.
                                Grâce à l'évolution actuel du numérique, nous vous offrons des appareils de haute qualité que vous aurez besoin
                            </p>
                        </li>
                        <li class="deroulant"><a href="#">Nos services
                                <ul class="sous">
                                    <li><a href="service.html">Marché</a></li>
                                    <li><a href="#cmd">Faire des commandes</a></li>
                                </ul>
                        </li>
                        <li class="list"><a href="#contact">contact</a></li>
                        <li class="list"><a href="part.php">Devinir partenaire</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- accueuil -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4 p-5">
                    <h1 style="font-size: 30px;" class="text-white">"Avec digital driver, il est plus facile pour vous de vendre et d'acheter des appareils de haute gamme" 
</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <!-- <div class="col">
                    <img src="/Image/gamer.png" alt="" width="300px">
                </div>
                <div class="col-4">
                    <h1 style="color: white;">LA FACILITE</h1>
                    <div class="text">
                        <p style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium incidunt nam, iure sunt corporis totam? Itaque maxime omnis, tempora iusto rerum esse amet unde reiciendis possimus voluptas hic architecto officiis.</p>
                    </div> 
                </div> -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner" data-bs-intervale="500">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="/Image/gamer.png" alt="" width="300px">
                                    </div>
                                    <div class="col-lg-4">
                                        <h1 style="color: white;">LA FACILITE</h1>
                                        <div class="text">
                                            <p style="color: white;">Trouvez avec digital driver l'ordinateur , tablette graphique, téléphone, accéssoires, qui répond à la configuration que vous cherchez parmis les grandes marques.
                                                Digital Driver réduit votre temps de déplacement grâce à nos activité. Nous prenons en compte vos demandes et vos besoins.
                                                En travaillant avec nous, choisissez le matériel que voulez et passez une commande dès maintenant.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" data-bs-intervale="500">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="/Image/commande.jpg.png" alt="" width="300px">
                                    </div>
                                    <div class="col-lg-4">
                                        <li><img src="/Image/store.png" alt="" width="100px">
                                            <h1 style="color: white;">FAIRE DES COMMANDES</h1>
                                        </li>
                                        <div class="text">
                                            <p style="color: white;">Vous n'avez pas le temps de visiter tous les magasins. Digital Driver vous offre l’opportunité d’acheter et d’avoir une livraison sécurisée. Alors, qu’attendez-vous ? N'hésitez pas à nous contacter pour vos commandes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-intervale="500">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="/Image/partenariat.jpg.png" alt="" width="300px">
                                    </div>
                                    <div class="col-lg-4">
                                        <h1 style="color: white;">Devenir notre partenaire</h1>
                                        <div class="text">
                                            <p style="color: white;">Vous êtes nouveaux dans le marché du numérique ou vous avez besoin de booster la notoriété de votre société. Vous sommes heureux de  collaborer  avec vous. Travaillons ensemble pour le développement du secteur numérique.</p>
                                            <a href="part.php">cliquer ici</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <div class="container-fluid mt-3">
                        <h3 class="text-white">DRIVER DIGITAL</h3>

                    </div>

                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1 style="color: white;">ACTUALITES</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Microsoft lève le voile sur les Surface Pro 9, Surface Laptop 5 et Surface Studio 2+</h1>
                    <p style="color: white;">10 ans après le lancement de la première Surface, le succès de ce format hybride entre tablette et PC n'est plus à prouver. Microsoft en sort une nouvelle version, la Surface Pro 9 qui tourne sous Windows 11, ainsi que le Surface Laptop 5 et (enfin) le Surface Studio 2+.</p>
                    <a href="https://www.usine-digitale.fr/ordinateur-portable/"><input type="submit" value="savoir plus"></a>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <img src="/Image/pc microsoft.jpg" alt="" width="400px" height="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav class="first" id="contact">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-4">
                    <div class="py-4 border px-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="white" fill="currentColor"
                            class="bi bi-telephone" style="color:red; " viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </div>
                
                    <div class="py-3 border px-2 ">
                        <a href="https://mail.google.com/mail/u/0/#inbox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="white" fill="currentColor"
                                class="bi bi-envelope" style="color:green;" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                        </a>
                
                    </div>
                    <a href="https://www.linkedin.com/in/rajo-tahina-andriamanantsoa-17a918242/">
                        <div class="py-3 border px-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="white" fill="currentColor"
                                class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                    </a>
                
                </div>
                
                <div class="py-3 border px-2 ">
                    <a href="https://www.facebook.com/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="white" fill="currentColor"
                            class="bi bi-facebook" style="color: white;" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                </div>
                </a>

                </div>
                <div class="col-md-4">
                    <h1 class="text-white">FAITE VOS COMMANDE ICI!</h1>
                    <div class="form">
                        <form action="config.php" method="POST" id="cmd">
                            <div class="nom">
                                <label for="" class="text-white nom">Nom:</label>
                                <input type="text" name="nom" placeholder="name" class="form-control">
                            </div>
                            <div class="email">
                                <label for="" class="text-white nom">email:</label>
                                <input type="email" name="email" placeholder="email" class="form-control">
                            </div>
                            <div class="object">
                                <label for="" class=" text-white object">object:</label>
                                <input type="text" name="objet" placeholder="objet" class="form-control">
                            </div>
                            <div class="object">
                                <label for="" class="object">object</label>
                                <textarea name="body" id="" class="form-control" cols="60" rows="7"></textarea>
                            </div>
                            <div class="submit">
                                <button type="submit" name="submit" class="btn btn-secondary">envoyer</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>