<?php
// Configuración del idioma
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yna Monteza Peru</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <picture>
            <source srcset="./public/images/logito.jpeg" type="image/webp">
            <img src="./public/images/logito.jpeg" alt="logo" class="logo">
        </picture>
        <nav>
            <ul>
                <li><a href="#inicio" id="inicio-link"><?php echo $lang == 'es' ? 'Inicio' : 'Home'; ?></a></li>
                <li><a href="#sobremi" id="sobremi-link"><?php echo $lang == 'es' ? 'Sobre mí' : 'About Me'; ?></a></li>
                <li><a href="#blog" id="blog-link"><?php echo $lang == 'es' ? 'Blog' : 'Blog'; ?></a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn"><?php echo $lang == 'es' ? 'Idioma' : 'Language'; ?></a>
                    <div class="dropdown-content">
                        <a href="?lang=es">Español</a>
                        <a href="?lang=en">English</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <section id="inicio" class="section-inicio">
        <div class="hero">
                <!-- 
                    <h1 id="hero-text"><?php// echo $lang == 'es' ? 'Una Acción a la Vez' : 'One Action at a Time'; ?></h1>
                -->
        </div>
    </section>

    <section id="sobremi" class="section-sobremi">
        <h2 id="sobremi-title"><?php echo $lang == 'es' ? 'Sobre mí' : 'About Me'; ?></h2>
        <div class="about-me-content">
            <p id="sobremi-text">
                <?php
                if ($lang == 'es') {
                    echo 'Mi nombre es Yna Cely Monteza Rodriguez 😊, Tengo 28 años, Soy de Perú. Durante un tiempo residí en Chile, esta experiencia me permitió valorar aún más lo que tenemos en mi país, disfruto explorar nuevas culturas y expandir mis horizontes 🌍✨. 
                    Una de mis experiencias más gratificantes ha sido mi labor como voluntaria enseñando lengua de señas peruana a niños sordos en San Martín, Perú 🤟 ❤️.
                    Actualmente, soy voluntaria del Programa YAV, trabajamos con AETE 🙌. Me mueve mucho la idea de poder crecer espiritual y personalmente, y poder aprender de mi comunidad porque pienso que mi país es hermoso y multicultural 🌳🌿🌈 🤝.
';
                } else {
                    echo 'Mi nombre es Yna Cely Monteza Rodriguez 😊, Tengo 28 años, Soy de Perú. Durante un tiempo residí en Chile, esta experiencia me permitió valorar aún más lo que tenemos en mi país, disfruto explorar nuevas culturas y expandir mis horizontes 🌍✨. 
                    Una de mis experiencias más gratificantes ha sido mi labor como voluntaria enseñando lengua de señas peruana a niños sordos en San Martín, Perú 🤟 ❤️.
                    Actualmente, soy voluntaria del Programa YAV, trabajamos con AETE 🙌. Me mueve mucho la idea de poder crecer espiritual y personalmente, y poder aprender de mi comunidad porque pienso que mi país es hermoso y multicultural 🌳🌿🌈 🤝.
                    ';
                }
                ?>
            </p>
            <img src="./public/images/yna.jpg" alt="Yna Monteza" class="yna-photo">
        </div>
    </section>

    <section id="blog">
        <h2 id="blog-title"><?php echo $lang == 'es' ? 'Mi orientación en Máncora' : 'My Orientation in Máncora'; ?></h2>
        <div id="blog-content">
            <div id="blog-<?php echo $lang; ?>">
                <p>
                    <?php
                    if ($lang == 'es') {
                        echo 'Fue una semana de muchos aprendisajes donde abordamos diferentes temas de interés para nuestro año de voluntariado. Al mismo tiempo que tuve la oportunidad de ser espectadora de preciosos amaneceres con vista al mar e inolvidables atardeceres. Me levantaba muy temprano para caminar por la orilla de la playa, sobre la arena, con los pies descalzos, sintiendo la brisa del mar, escuchando el sonido de las olas, y el canto de las aves. En algunas ocasiones, vimos delfines pasando frente a nosotras, un espectáculo precioso y mágico. Al mediodía, incluso fuimos testigos de ballenas que pasaban saltando, Wao, casi lloré de la emoción de ver esa majestuosidad frente a mis ojos, pensé que estaba soñando, nunca me imaginé ver ballenas; no podía creer lo que estaba viendo, que regalo más hermoso de la vida, me pone feliz el solo recordarlo. Estas experiencias me hicieron sentir una conexión profunda con los océanos, con el mar, ¡porque nosotros somos tierra!, ¡somos fuego!, ¡somos mar!, ¡somos aire!, somos los cuatro elementos que componen la naturaleza, y si descuidamos uno de estos 4 elementos, pues descuidamos todo, porque todo es parte de un todo, de un conjunto de maravillas, por lo tanto, merece y debe ser cuidada, protegida y amada. 
                        Estamos llamados a cuidar la naturaleza; así como la cultura Moche, que veían en el mar, la majestuosidad de la soberanía, de un creador, pero también la oportunidad de poder desarrollar su cultura.
                        Reflexioné sobre todo lo que ella nos regala. Si cuidamos de la naturaleza, ella nos devolverá con aire puro, hermosas vistas y más vida. Si cuidamos el mar podemos seguir disfrutando de estos bailes de ballenas, del salto de los delfines, y de todo lo mágico que te puedas imaginar. Esta conexión me hizo valorar la calidad de vida que la naturaleza puede ofrecernos, y como no, regresar con una mentalidad renovada. Al conectarme con este lugar, sentí que también conecté más conmigo misma y con Dios. Realmente fue una experiencia exquisita, ame cada minuto allí
                        ';
                    } else {
                        echo "It was a week of many learnings where we addressed different topics of interest for our volunteer year. At the same time, I had the opportunity to be a spectator of beautiful sunrises overlooking the sea and unforgettable sunsets. I got up very early to walk along the shore of the beach, on the sand, with bare feet, feeling the sea breeze, listening to the sound of the waves, and the song of the birds. On some occasions, we saw dolphins passing in front of us, a beautiful and magical spectacle. At noon, we even witnessed whales jumping past. Wow, I almost cried from the emotion of seeing that majesty in front of my eyes. I thought I was dreaming. I never imagined seeing whales. I couldn't believe what I was seeing. What a beautiful gift of life. It makes me happy just to remember it. These experiences made me feel a deep connection with the oceans, with the sea, because we are earth! We are fire! We are sea! We are air! We are the four elements that make up nature, and if we neglect one of these 4 elements, then we neglect everything, because everything is part of a whole, of a set of wonders, therefore it deserves and must be cared for, protected and loved.
                        We are called to care for nature; as well as the Moche culture, who saw in the sea, the majesty of sovereignty, of a creator, but also the opportunity to develop their culture.
                        I reflected on everything that nature gives us. If we take care of nature, it will give us back  pure air, beautiful views and more life. If we take care of the sea we can continue enjoying these whale dances, the leaping of dolphins, and all the magic you can imagine. This connection made me value the quality of life that nature can offer us, and of course, return with a renewed mentality. By connecting with this place, I felt that I also connected more with myself and with God. It was truly an exquisite experience, I loved every minute there
                        ";
                    }
                    ?>
                </p>
            </div>
        </div>
    </section>

    <footer>
        <p><?php echo $lang == 'es' ? 'Síguenos en:' : 'Follow us on:'; ?></p>
        <a href="https://www.facebook.com/profile.php?id=100008287744982"><img src="facebook-icon.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/ynamonteza?igsh=MTVxdTJ2M2FjeW9ibA%3D%3D"><img src="instagram-icon.png" alt="Instagram"></a>
    </footer>
</body>
</html>
