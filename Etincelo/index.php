<?php require_once("partials/header.php"); ?>

<div class="all">

<!-- Les slides -->

<section>
  <div id="home"></div>
  <div class="carousel">
    <div class="carousel_nav">
      <span class="carousel_prev">
        <img src="picture/icon/prev_carousel.png">
      </span>
      <span class="carousel_next">
        <img src="picture/icon/next_carousel.png">
      </span>
    </div>

      <span class="carousel_slide" id="background1">
        <div class="header_msg">New Single dispo !!</div>
        <a class="header_button" href="#">Voir</a>
      </span>
      <span class="carousel_slide" id="background2">
        <div class="header_msg">Tournée International !! </div>
        <a class="header_button" href="#">Voir Date</a>
      </span>
    </div>
</section>

<!-- La Newsletter -->

<section>
  <div id="newsletter">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 text-center" id="newsletter_p_1">
          <p id="newsletter_p_1_p">Inscrivez-vous pour recevoir les news d'Etincelo. </p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div id="form_newsletter">
              <form action="#" method="post" class="form-inline" role="form">

<!-- MailChimp Form -->

          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input type="email" class="form-control" id="input_newsletter1" placeholder="Entrer votre email">
          </div>
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
              <input type="text" class="form-control" id="input_newsletter2" placeholder="Entrer votre nom">
          </div>
              <input type="submit" id="submit_newsletter" value="Souscrire">
      </form>

    </div>
  </div>
</div>

    </div>
</div>
</section>

<!-- Les News -->

<div class="news_modal_all">
  <div class="window_news_modal">
    <div class="news_close_cross"></div>
    <div class="headpicture_news_modal"><img src="picture/news/5.JPG" alt=""></div>
    <div class="body_news_modal">
    <span class="title_news_modal">Etincelo reprend du service</span>
    <span class="date_news_modal">Le 8 mai 2014</span>
    <span class="content_news_modal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem sequi ex alias officiis minima, cupiditate fugiat. Incidunt ducimus dolorum eius, et deserunt, atque molestiae maiores, perspiciatis vero reprehenderit facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem sequi ex alias officiis minima, cupiditate fugiat. Incidunt ducimus dolorum eius, et deserunt, atque molestiae maiores, perspiciatis vero reprehenderit facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem sequi ex alias officiis minima, cupiditate fugiat. Incidunt ducimus dolorum eius, et deserunt, atque molestiae maiores, perspiciatis vero reprehenderit facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem sequi ex alias officiis minima, cupiditate fugiat. Incidunt ducimus dolorum eius, et deserunt, atque molestiae maiores, perspiciatis vero reprehenderit facilis.</span>
    <div data-id="1" class="news_suiv_prev">
    <span class="suiv_news_modal"><i class="fa fa-angle-double-left fa-3x" id="fleche_gauche_view"></i>Suivant</span>
      <span class="prev_news_modal"><i class="fa fa-angle-double-right fa-3x" id="fleche_droite_view"></i>Precedent</span>
    </div>
    </div>
  </div>
</div>
<section>
<div id="news"></div>

<div id="blog_section">
  <div class="container">
    <div class="row">
      <div class="lead text-center" id="title_section">LES NEWS</div>

    </div>
    <div class="row">
    <?php
      $get_news_id = (empty($_GET['new'])) ? "" : $_GET['new'];
      $etincelo->show_listnew($get_news_id);
    ?>
    </div>
    <div class="pagination_new">
    <?php $etincelo->show_pagination(); ?>
    </div>
  </div>
</div>

</section>

<!-- 1er Fixed -->

<section>
  <div id="paralax_first">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
</section>

<!-- Musique -->

<section>
  <div id="music"></div>
    <div id="music_section">
      <div class="container">
      <div class="row">
        <div class="lead text-center" id="title_section">TON AMOUR POUR MOI</div>
        <div id="content_all_music">
          <div class="col-lg-4 col-sm-4 text_descr_music">
            <p>Ton Amour pour moi est le titre éponyme du premier disque d’Etincelo. Le chant du même nom a été composé pour le rassemblement des familles d’Assise en août 2013 et qui avait pour thème « Qui nous séparera de l’Amour de Dieu ? ».</p>
            <p>L’intégralité des chants ont été composés par Hubert (chanteur), arrangés et interprétés par ETINCELO, et ont été enregistrés au studio Métronome à Beaupréau, proche de Cholet.</p></div>

          <div class="col-lg-4 col-sm-4">
            <div id="album_picture"></div>
          </div>

          <div class="col-lg-4 col-sm-4">
            <div id="list_music" class="pull-left">
              <p>1. Intro'celo &nbsp;&nbsp;<a href="#" title="télécharger la partion"><i class="fa fa-youtube-play fa-lg link_youtube_tapm pull-right" ></i></a><hr id="hr_list"></p>
              <p>2. Les amis de Dieu &nbsp;&nbsp;<a href="#" title="télécharger la partion"><i class="fa fa-youtube-play fa-lg link_youtube_tapm  pull-right"></i></a><hr id="hr_list"></p>
              <p>3. Ton Amour pour moi &nbsp;&nbsp;<a href="#" title="télécharger la partion"><i class="fa fa-youtube-play fa-lg link_youtube_tapm  pull-right"></i></a><hr id="hr_list"></p>
              <p>4. Sachons aimer &nbsp;&nbsp;<a href="#" title="télécharger la partion"><i class="fa fa-youtube-play fa-lg link_youtube_tapm  pull-right"></i></a><hr id="hr_list"></p>
              <p>5. Bienheureuse Marie &nbsp;&nbsp;<a href="#" title="télécharger la partion"><i class="fa fa-youtube-play fa-lg link_youtube_tapm  pull-right"></i></a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div  class="col-lg-12">
            <div id="link_group">
              <p><a href="#" id="link" title="Télécharger les morceaux gratuitement">Télécharger le 1er titre !</a
                >&nbsp;&nbsp;&nbsp;&nbsp;ou&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" id="link" title="Acheter le CD dans la boutique">Acheter dans la boutique !</a></p></div></div>

        </div>
      </div>
  </div>
</section>

<!-- Musique 2  -->

<section>

  <div id="music_section2">
    <div class="container">
      <div class="row">
        <div class="lead text-center" id="title_section">CD BONUS ET AUTRE</div>
        <div class="col-lg-6 col-sm-6">
          <div id="cdbonus"></div>
        </div>

        <div class="col-lg-6 col-sm-6">
          <div id="content_cdbonus">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Fusce et purus ut est interdum cursus id sed libero. Donec et metus orci.
            Integer egestas nunc magna, consequat tempor ligula porta quis.
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
          </div>

          <div id="list_music">

            <p>1. L'armure de Dieu
              <audio preload="auto" controls>
            <source src="music/Le Royaume est en ce lieux master.mp3" />
            </audio><hr id="hr_list"></p>
            <p>2. Esprit de Dieu
              <audio preload="auto" controls>
            <source src="music/Le Royaume est en ce lieux master.mp3" />
            </audio><hr id="hr_list"></p>
            <p>3. Notre père
              <audio preload="auto" controls>
            <source src="music/Le Royaume est en ce lieux master.mp3" />
            </audio><hr id="hr_list"></p>
            <p>4. Marie, je veux te choisir
            <audio preload="auto" controls>
            <source src="music/Le Royaume est en ce lieux master.mp3" />
            </audio></p>
          </div>

          <div id="download_cdbonus">
            <a href="#" id="link" class="cd_bonus_link">Télécharger gratuitement</a>
          </div>
      </div>
    </div>
  </div>

</section>

<!-- 2eme Fixed -->

<section>

  <div id="paralax_seconde">
    <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 text-center">
          <h1 class="text-center" id="h1_quote_luc">
          <i class="fa fa-quote-left fa-lg text-center"></i>&nbsp;&nbsp;Je suis venu apporter un feu sur la terre, et comme je voudrais qu'il soit déjà allumé.&nbsp;&nbsp;<i class="fa fa-quote-right fa-lg text-center"></i></h1>
        </div>
        <div class="col-lg-1"></div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <div id="button_cite"><p> - Luc 12, 49</p></div>
        </div>
      </div>

    </div>
  </div>

</section>

<!-- Vidéo -->

<section>

<div id="gallery"></div>
<div id="video_section">
  <div class="container">

    <div class="row">
      <div class="col-lg-12 lead text-center" id="title_section">VIDEOS</div>
    </div>

    <div class="row">
      <div class="col-lg-7 video_youtube">
        <object width="640" height="360">
          <param name="movie" value="https://www.youtube.com/v/videoseries?listType=playlist&list=PL11m1wfI6tMl7zmtw6fpqTRLXzXdnQ48C&version=3"></param>
          <param name="allowFullScreen" value="true"></param>
          <param name="allowScriptAccess" value="always"></param>
          <embed src="https://www.youtube.com/v/videoseries?listType=playlist&list=PL11m1wfI6tMl7zmtw6fpqTRLXzXdnQ48C&version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360"></embed>
        </object>
      </div>
      <div class="col-lg-5 video_text">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus elementum enim condimentum risus imperdiet pellentesque. Sed ultrices enim sapien, nec sollicitudin velit placerat eget. </p>
        <p>Phasellus molestie libero a tortor sodales, et condimentum ligula faucibus. Donec rutrum nec ligula lobortis auctor. In congue facilisis nulla id hendrerit. Ut at convallis massa. Etiam elementum molestie velit. Donec tellus urna, tempor id nisl in, eleifend congue libero. Sed augue lacus, feugiat eu tincidunt non, ullamcorper eu elit. Nam pretium enim vel augue tempus consectetur. Sed vitae dui vitae elit suscipit dapibus a ut neque</p>
      </div>
    </div>
  </div>
</div>

</section>


<!-- Photo -->

<section>
  <div id="photo">

      <div class="lead text-center" id="title_section">PHOTOS</div>
      <div class="photo_all">
          <div class="container">
      <div class="row">
      <ul id="lightGallery">
        <?php $etincelo->show_picture(); ?>
      </ul>

      </div>
      </div>

      </div>
    </div>
</section>

<!-- 3eme Fixed -->

<section>

  <div id="paralax_troisieme">
    <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 text-center"></div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </div>

</section>

<!-- A propos -->

<section class="presentation-first">
  <div id="about"></div>
  <div class="container">
    <div class="row">
      <div class="lead text-center" id="title_section">ETINCELO ?!</div>
      <div class="col-lg-12 text-center">
        <p>ETINCELO est un groupe de pop louange franciscaine, rassemblant des musiciens qui chantent, jouent et dansent pour Dieu, à la suite de saint François d’Assise.<br>
        Ce groupe a pour origine l’équipe de musiciens au service de la louange du couvent saint François de Cholet depuis 2005.<br>En août 2013, à la demande de plusieurs familles
        désireuses d’évangéliser par la musique, ils décident d’enregistrer un premier disque de louange sous le nom ETINCELO, nom tiré du latin, prononcé à l’italienne et qui
        évoque les étincelles.</p>
      </div>
    </div>
  </div>
</section>

<section class="musicien">
<div class="container">
  <div class="row">
    <div class="lead text-center" id="title_section">MUSICIENS</div>
    <div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/hubert.png" alt="hubert">
        <div class="info_musicien">
          <span class="membre_role">Chanteur</span>
          <span class="membre_desc">Il aime aussi danser, même si de toute évidanse, il n'a jamais appris à le faire correctement…</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/simon.png" alt="simon">
        <div class="info_musicien">
          <span class="membre_role">Guitariste</span>
          <span class="membre_desc">Puisqu'il gratte sa guitare comme au Paradis, vous pouvez l'appeler gratte-Ciel…</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/clemence.png" alt="clemence">
        <div class="info_musicien">
          <span class="membre_role">Chanteuse</span>
          <span class="membre_desc">Elle chante et nous enchante chaque fois qu'elle chante en cœur.</span>
        </div>
      </div>
    </div>

<div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/claire-emmanuelle.png" alt="claire-emmanuell">
        <div class="info_musicien">
          <span class="membre_role">Pianiste</span>
          <span class="membre_desc">Elle agrémente les louanges des humeurs de son piano clair et manuel.</span>
        </div>
      </div>
    </div>

<div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/marc.png" alt="marc">
        <div class="info_musicien">
          <span class="membre_role">Chanteur</span>
          <span class="membre_desc">« Qu'il est blond de louer le Seigneur… »</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/jeremie.png" alt="jeremie">
        <div class="info_musicien">
          <span class="membre_role">Guitariste</span>
          <span class="membre_desc">Il est doté de charismes et de talents multiples, mais il sait aussi faire le jack.</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/astrid.png" alt="astrid">
        <div class="info_musicien">
          <span class="membre_role">Chanteuse</span>
          <span class="membre_desc">La voix la plus maternelle d'Etincelo. Pour le môman, en tout cas.</span>
        </div>
      </div>
    </div>

<div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/joel.png" alt="joel">
        <div class="info_musicien">
          <span class="membre_role">Bassiste</span>
          <span class="membre_desc">Dompteur du groove, des booms et des slaps, et de quelques lions en barres de chocolats.</span>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/madelaine.png" alt="madelaine">
        <div class="info_musicien">
          <span class="membre_role">Chanteuse</span>
          <span class="membre_desc">On la voit partout. Mad' in France. Mad' in Taïwan. Mad' in USA. Et aussi Mad' in Etincelo.</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/antoine.png" alt="antoine">
        <div class="info_musicien">
          <span class="membre_role">Batteur</span>
          <span class="membre_desc">Il est batteur, mais il se revendique aussi moissonneur.</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/francoise.png" alt="francoise">
        <div class="info_musicien">
          <span class="membre_role">Violoniste</span>
          <span class="membre_desc">Aventurière musicale. Et elle se débrouille vraiment comme impro.</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="equipe_team">
        <img src="picture/membre/marcello.png" alt="marcello">
        <div class="info_musicien">
          <span class="membre_role">Touches noires et blanches</span>
          <span class="membre_desc">Actuellement le seul italien autorisé à jouer avec Etincelo.</span>
        </div>
      </div>
    </div>

    </div>
</div>
</section>
<!-- 4eme Fixed-->
<section>

  <div id="paralax_quatrieme">
    <div class="container">
      <div class="row">

        <div class="col-lg-1"></div>

        <div class="col-lg-10 text-center">

        </div>
        <div class="col-lg-1"></div>
      </div>

    </div>
  </div>

</section>

<!-- La Boutique -->

<div id="shop"></div>
<div class="boutique_info_modal">
<div class="boutique_close_cross"></div>
  <div class="boutique_boite_modal">
  <span class="boutique_modal_title">Boutique</span>
  <div class="boutique_modal_livraison">
  <span class="boutique_modal_livraison_title">Pour le paiement, vous pouvez :</span>
  <ul>
    <li>Payer en ligne avec votre carte de crédit via Paypal</li>
    <li>Envoyer votre règlement par la poste à Etincelo 57, rue Pasteur 49300 Cholet, en joignant :
<br>Votre adresse de livraison,
Votre commande sur papier libre,
Votre chèque correspondant à la commande, à l'ordre de Répare mon Église et incluant les frais de port de 1,50€.</li>
  </ul>
  </div>
  <div class="boutique_modal_paiement">
   <span class="boutique_modal_paiement_title">Pour vous procurer le produit, vous pouvez :</span>
<ul>
<li>Vous le procurer dans l'un des points de vente ci-dessous</li>
<li>Vous le faire acheminer par voie postale, moyennant alors des frais de port de 1,50€</li>
</ul>
  </div>

  <div id="boutique_modal_map_left" class="boutique_modal_map_left"></div>
  <div id="boutique_modal_map_right" class="boutique_modal_map_right"></div>
</div></div>

<section class="boutique" id="boutique">
<div class="container">
  <div class="row">
    <div class="lead text-center" id="title_section">
    Boutique
    <span class="boutique_icon_info"></span>

    </div>

    <div class="col-lg-3 col-sm-3">
      <div class="boutique_block">
      <a target="_blank" href="https://www.paypal.com/fr/cgi-bin/webscr?cmd=_flow&SESSION=zwQKI1CZU7yM3ISkQrCfUL16dHGFK0-nBhlXomLGf6s01gO4FeAlAFWNzOW&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198cf7658296ddbf66bbd0b039a3775ce6f">
        <img src="picture/boutique/ton_amour_pour_moi.png" alt="">
        <span class="boutique_title_product">Ton amour pour moi</span>
      </a>
      </div>
    </div>

    <div class="col-lg-3 col-sm-3">
      <div class="boutique_block">
      <a target="_blank" href="https://www.paypal.com/fr/cgi-bin/webscr?cmd=_flow&SESSION=zwQKI1CZU7yM3ISkQrCfUL16dHGFK0-nBhlXomLGf6s01gO4FeAlAFWNzOW&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198cf7658296ddbf66bbd0b039a3775ce6f">
        <img src="picture/boutique/ton_amour_pour_moi.png" alt="">
        <span class="boutique_title_product">Ton amour pour moi</span>
      </a>
      </div>
    </div>

    <div class="col-lg-3 col-sm-3">
      <div class="boutique_block">
      <a target="_blank" href="https://www.paypal.com/fr/cgi-bin/webscr?cmd=_flow&SESSION=zwQKI1CZU7yM3ISkQrCfUL16dHGFK0-nBhlXomLGf6s01gO4FeAlAFWNzOW&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198cf7658296ddbf66bbd0b039a3775ce6f">
        <img src="picture/boutique/ton_amour_pour_moi.png" alt="">
        <span class="boutique_title_product">Ton amour pour moi</span>
      </a>
      </div>
    </div>

    <div class="col-lg-3 col-sm-3">
      <div class="boutique_block">
      <a target="_blank" href="https://www.paypal.com/fr/cgi-bin/webscr?cmd=_flow&SESSION=zwQKI1CZU7yM3ISkQrCfUL16dHGFK0-nBhlXomLGf6s01gO4FeAlAFWNzOW&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198cf7658296ddbf66bbd0b039a3775ce6f">
        <img src="picture/boutique/ton_amour_pour_moi.png" alt="">
        <span class="boutique_title_product">Ton amour pour moi</span>
      </a>
      </div>
    </div>


  </div>
</div>
</section>


<!-- Contact -->

<section>
<div id="contact"></div>
<div class="container">
  <div class="row">
    <div class="lead text-center" id="title_section">Contact</div>
    <div class="col-lg-12 text-center">
      <form class="contact_form" method="POST">
        <input type="text" name="name" class="contact_name"value="" placeholder="Votre Nom"><br>
        <input type="text" name="email" class="contact_email" value="" placeholder="Votre Email"><br>
        <textarea name="content_message" id="contact_content" cols="30" rows="10" placeholder="Votre message"></textarea><br>
        <button  class="contact_submit">Valider</button>
      </form>
    </div>
  </div>
</div>
</section>

</div>
</body>

</html>