
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- start of main container  -->

    <!-- <div>
      <ul class="tabs">
        <li class="active"><a href="#home">Accueil</a></li>
        <li><a href="#mentions">Mentions</a></li>
        <li><a href="#about">propos</a></li>
      </ul>
      <div class="tabs-content">
        <div class="tab-content active" id="home">bonjour</div>
        <div class="tab-content" id="mentions">salut</div>
        <div class="tab-content" id="about">coucou</div>
      </div>
    </div> -->
    <?php wp_head(); ?>

    <!-- start of header -->
      <header>
        <nav class="">
          <li><a href="index.php">Accueil.</a></li>
          <li><a href="">Web.</a></li>
          <li><a href="">Tech.</a></li>
          <li><a href="">Mobile.</a></li>
        </nav>
     </header>


    <!-- end of header -->

      <!-- 1er article -->
    <div class="main container">
    <div class="row ">
      <article class="col-sm-12 col-xs-12">
        <a href="article.php">
          <img src="<?php echo get_bloginfo('template_url') ?>/img/img1.jpeg" alt="bureau d'ordinateur1"/>
          <p class="bonjour"> </p>
        </a>
        <a href="">
          <h2>Les éléments indispensables à considérer avant la création de votre site web</h2>
        </a>
        <p class="p1">par quelqu'un</p>
      </article>

      <!-- 2eme article -->

      <article class="col-sm-12 col-xs-12">
        <a href="article.html">
          <img src="<?php echo get_bloginfo('template_url') ?>/img/img1.jpeg" alt="bureau d'ordinateur2"/>
          <p class="bonjour"> </p>
        </a>
        <a href="">
          <h2>Les éléments indispensables à considérer avant la création de votre site web</h2>
        </a>
        <p class="p1">par quelqu'un</p>
      </article>


      <!-- 3eme article -->

      <article class="col-sm-12 col-xs-12">
        <a href="article.html">
            <img src="<?php echo get_bloginfo('template_url') ?>/img/img1.jpeg" alt="bureau d'ordinateur3"/>
          <p class="bonjour"> </p>
        </a>
        <a href="">
          <h2>Les éléments indispensables à considérer avant la création de votre site web</h2>
        </a>
        <p class="p1">par quelqu'un</p>
      </article>
    </div>
    </div>

    <!-- JS HOVER IMG -->


    <script type="text/javascript">
    var img = document.getElementsByTagName("img");
    var text = document.getElementsByClassName("bonjour");

    for (let i = 0 ; i < img.length ; i++) {
    img[i].addEventListener("mouseover", function() {
      var alt = img[i].alt;
      text[i].textContent = alt;
    }
    );
    };

    for (let i = 0 ; i < img.length ; i++) {
    img[i].addEventListener("mouseout", function() {
    text[i].textContent = "";
    }
    );
    };
    </script>


    <!-- JS DATE -->


    <span id="date"></span> <br>
    <span id="heure"></span> <br>


    <!-- JS compteur -->

    <span>Vous êtes ici depuis : </span><span id="timer"></span><span> seconde(s)</span>

      <!-- pagination -->

    <div class="page">
      <ul class="pagination">
       <li class="active"><a href="#">1</a></li>
       <li><a href="#">2</a></li>
       <li><a href="#">3</a></li>
       <li><a href="#">4</a></li>
       <li><a href="#">5</a></li>
      </ul>
    </div>

    <!-- end of main container  -->

      <?php wp_footer(); ?>
      <?php get_footer(); ?>
  </body>
</html>
