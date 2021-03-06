<?php require 'config/contact_db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <!-- header start here -->
    <header class="header">

        <div class="fas fa-bars" id="menu-btn"></div>

        <a href="#home" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/FelixDevCode" class="fab fa-twitter"></a>
            <a href="https://www.linkedin.com/feed/" class="fab fa-linkedin"></a>
            <a href="https://github.com/feixeth/" class="fab fa-github"></a>
        </div>

    </header>
    <main>
        <!-- header finish here -->

        <!-- home start here -->
        <section class="home" id="home">

            <div class="image" data-aos="fade-down">
                <img src="./assets/profil.jpg" alt="">
            </div>

            <div class="content" data-aos="fade-down">
                <h3>Hey, i'm Félix !</h3>
                <span data-aos="fade-right">Apprentis dev à vie &#128525;</span>
                <p data-aos="fade-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aperiam autem consequuntur illo impedit quas rem totam. Eum magnam non quas voluptatem. Aliquam, sit.</p>
                <a href="#about" class="btn" data-aos="fade-right">About me</a>
            </div>

        </section>
        <!-- home stop here -->

        <!-- about start here -->
        <section class="about" id="about" data-aos="fade-up">

            <h1 class="heading"><span>biographie</span></h1>

            <div class="biography">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam nemo praesentium provident quaerat
                    similique? Libero.</p>

                <div class="bio">
                    <h3><span>Name : </span> De Gaudenzi Félix</h3>
                    <h3><span>Mail : </span>degaudenzi.felix@gmail.com</h3>
                    <h3><span>Adress : </span>Grenoble, 38000, FRANCE</h3>
                    <h3><span>Phone : </span>(+33)06-45-47-06-26</h3>
                    <h3><span>Age : </span>29 (Birthdate->12/01/1993)</h3>
                    <h3><span>Actual goal : </span>looking for a company</h3>
                </div>

                <a href="./assets/CVFELIX2022.pdf" class="btn">Download my CV</a>
                
            </div>

            <div class="skills" id="skills">

                <h1 class="heading"><span> Skills </span></h1>

                <div class="progress">
                    <div class="bar" data-aos="fade-right"> <h3><span>HTML </span><span>95%</span></h3></div>
                    <div class="bar" data-aos="fade-left"> <h3><span>CSS </span><span>70%</span></h3></div>
                    <div class="bar" data-aos="fade-right"> <h3><span>Javascript </span><span>55%</span></h3></div>
                    <div class="bar" data-aos="fade-left"> <h3><span>Bootstrap </span><span>60%</span></h3></div>
                    <div class="bar" data-aos="fade-right"> <h3><span>PHP </span><span>40%</span></h3></div>
                    <div class="bar" data-aos="fade-left"> <h3><span>SQL </span><span>35%</span></h3></div>
                    <div class="bar" data-aos="fade-right"> <h3><span>NoSQL </span><span>25%</span></h3></div>
                    <div class="bar" data-aos="fade-right"> <h3><span>SASS </span><span>25%</span></h3></div>
                    <div class="bar" data-aos="fade-left"> <h3><span>Symfony </span><span>15%</span></h3></div>
                    <div class="bar" data-aos="fade-right"> <h3><span>PHPUnit </span><span>15%</span></h3></div>
                </div>
            </div>
            <div class="edu-exp" data-aos="fade-right">

                <h1 class="heading"> <span>Education & Experiences</span></h1>

                <div class="row">
                    <div class="box-container">
                        <h3 class="title">Experiences</h3>

                        <div class="box">
                            <span>( 2021 - 2022 )</span>
                            <h3>Technicien d'exploitation - AirLiquide</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi consectetur, culpa cupiditate deserunt dicta dolore doloremque ea facilis iste nemo nihil omnis, quae rem repellat sint, sit temporibus vel!</p>
                        </div>
                        <div class="box">
                            <span>( 2018 - 2020 )</span>
                            <h3>Conducteur de maintenance - STMicroelectronics</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi consectetur, culpa cupiditate deserunt dicta dolore doloremque ea facilis iste nemo nihil omnis, quae rem repellat sint, sit temporibus vel!</p>
                        </div>
                    </div>

                    <div class="box-container">
                        <h3 class="title">Education</h3>

                        <div class="box">
                            <span>( 2022 - Actually )</span>
                            <h3>Alternance Developpeur Web</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi consectetur, culpa cupiditate deserunt dicta dolore doloremque ea facilis iste nemo nihil omnis, quae rem repellat sint, sit temporibus vel!</p>
                        </div>
                        <div class="box">
                            <span>( 2010 - 2012 )</span>
                            <h3>CAP ELEEC</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi consectetur, culpa cupiditate deserunt dicta dolore doloremque ea facilis iste nemo nihil omnis, quae rem repellat sint, sit temporibus vel!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                                    <!-------- about stop here -------->
                                    <!------- portfolio section start -------->

            <section class="portfolio" id="portfolio" data-aos="fade-up">

                <h1 class="heading"><span>Portfolio</span></h1>
                <div class="box-container">

                    <div class="box">
                        <img src="./assets/pokemonlike.png" alt="minigamescreen" data-aos="zoom-in">
                        <h3>Mini Pokemon HTML/Javascript</h3>
                        <span><a href="https://github.com/feixeth/pokemon_like_js">Lien GitHub</a></span>
                    </div>

                    <div class="box">
                        <img src="./assets/cassebrique.png" alt="minigamescreen" data-aos="zoom-in">
                        <h3>Casse-brique HTML/Javascript</h3>
                        <span><a href="https://github.com/feixeth/bricks_breaker">Lien GitHub</a></span>
                    </div>

                    <div class="box">
                        <img src="./assets/selecteur.png" alt=""  data-aos="zoom-in">
                        <h3>Selecteur photo HTML/Javascript</h3>
                        <span><a href="#github">Lien GitHub</a></span>
                    </div>

                    <div class="box">
                        <img src="./assets/chifoumi.png" alt=""  data-aos="zoom-in">
                        <h3>Chifoumi</h3>
                        <span><a href="#github">Lien GitHub</a></span>
                    </div>
                </div>

            </section>

        <!-- portfolio section stop -->
        <!-- contact section start -->

        <section class="contact" id="contact" data-aos="fade-up">
            <h1 class="heading">Contactez-moi<span></span></h1>
            <form action="" method="post">
                <div class="flex">
                    <input type="text" name="name" placeholder="votre nom" class="box" required>
                    <input type="number" name="number" placeholder="votre numero" class="box" min="0" required>
                </div>
                <input type="email" name="email" placeholder="votre e-mail" class="box" required>
                <textarea name="message" id="message" cols="30" rows="10" class="box" placeholder="votre message" required></textarea>
                <input type="submit" class="btn" value="Send message" name="send">
            </form>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-phone"></i>
                    <h3>Telephone</h3>
                    <p>+645470626</p>
                </div>

                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p>degaudenzi.felix@gmail.com</p>
                </div>

                <div class="box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Adresse</h3>
                    <p>Grenoble, 38000, FRANCE</p>
                </div>
            </div>
        </section>
</main>
<footer data-aos="fade-up">
    <div class="credit"> &copy; copyright @ <?php echo date('Y');?> by <span>De Gaudenzi</span> </div>
</footer>
        <!-- contact section end -->




<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <script>
            AOS.init({
                duration:900,
                delay:400
            })

        </script>
</body>
</html>
