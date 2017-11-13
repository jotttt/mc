<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maru_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php /*the_title( '<h1 class="entry-title">', '</h1>' );*/ ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		 <!--CONTACT BTN-->
        <div class="contact-btn-container">
            <a href="#contact" class="btn btn-primary">Võta ühendust</a>
        </div>

        <!--TOP-NAV-->
    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="#"><span class="logo"></span></a>-->
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
           <div class="nav-logo-container">
            <div class="logo"></div>
          </div>
          <ul class="nav navbar-nav">
            <li><a class="btn btn-black" href="#cafe">Kohvik <span><i class="mug"></i></span></a></li>
            <li><a class="btn btn-black" href="#catering">Catering</a></li>
            <li><a class="btn btn-black" href="#equipment">Inventari rent</a></li>
            <li class="ignore"><a href="#contact"></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!--ESILEHT-->
    <div id="home" class="para bg-0">
      <div class="triangle">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewbox="0 0 1000 890" enable-background="new 0 0 1000 890" xml:space="preserve">
          <polygon points="1000,890 0,545 1000,0"/>
        </svg>
        <div class="chef"></div>
      </div>
      <div class="v-center">
        <p class="center-logo"></p>
        <div class="home-navigation">
          <a class="item one" href="#cafe"><i class="decor"></i>Kohvik <i class="yellow-mug"></i></a>
          <a class="item two" href="#equipment"><i class="decor"></i>Inventari rent</a>
          <a class=" item three" href="#catering"><i class="decor"></i>Catering</a>
        </div>

      </div>
    </div>

    <!--CAFE-->
    <div id="cafe" class="non-para bg-1">
      <!--<span class="logo"></span>-->
      <div class="triangle">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewbox="0 0 1000 890" enable-background="new 0 0 1000 890" xml:space="preserve">
          <polygon points="0,890 1000,545 0,0 "/>
        </svg>
        <div class="text">
          <h2>Marudad maitsed</h2>
          <p>Lennusadama kohvikust MARU avaneb suurejooneline vaade kogu muuseumile, suvisel ajal on avatud ka õdus väliterrass. MARU menüü on kummardus Põhjala ja Eesti rannarahva toidukultuurile, seda iseloomustavad puhtad maitsed, lihtsus ja kaasaaegsus. Kohapeal valmistatakse nii sooje kui ka külmi roogasid. Lisaks laudade broneerimisele saab tellida grupitoitlustust. 60 istekoha ja suvise 100-kohalise väliterrassiga kohvik on avatud muuseumi lahtiolekuaegadel. Kohvikut on võimalik broneerida ka õhtusteks sündmusteks. <a href="#catering">Tutvu võimalustega!</a> </p>
          <div class="buttons">
            <a href="" class="btn btn-white">menüü</a>
            <a href="" class="btn btn-white">galerii</a>
          </div>
        </div>
      </div>
    </div>

    <!--CATERING-->
    <div id="catering" class="para bg-2">
    <!--  <span class="logo"></span>-->
      <div class="triangle">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewbox="0 0 1000 890" enable-background="new 0 0 1000 890" xml:space="preserve">
          <polygon points="1000,890 0,545 1000,0 "/>
        </svg>
        <div class="text">
          <h2>Vahvad üritused</h2>
          <p>MARU cateringi kogemus ulatub aastasse 2012, alustades Lennusadama ja Paksu Margareeta ametliku toitlustajana. Meid iseloomustavad põhjamaised ja puhtad maitsed. Meie käe all saavad teoks eri suuruses ja tegumoes sündmused: vastuvõtud, firmapeod, banketid, sünnipäevad, pulmad, konverentsid, seminarid, piknikud ja grillpeod.</p>
          <p>MARU cateringi eesmärgiks on läbi kvaliteetse tooraine ja esindusliku teeninduse tagada igale kliendile meeldejääv elamus. Oleme pühendunud individuaalsele lähenemisele.</p>
          <div class="buttons">
            <a href="" class="btn btn-white">menüü</a>
            <a href="" class="btn btn-white">galerii</a>
            <a href="" class="btn btn-white">transport</a>
          </div>
        </div>
      </div>
    </div>

    <!--EQUIPMENT-->
    <div id="equipment" class="non-para bg-3">
     <!-- <span class="logo"></span>-->
      <div class="triangle">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewbox="0 0 1000 890" enable-background="new 0 0 1000 890" xml:space="preserve">
          <polygon points="0,890 1000,545 0,0 "/>
        </svg>
        <div class="text">
          <h2>Abiks varustusega</h2>
          <p>Lisaks toitlustusele rendime inventari. Meil on olemas kõik vajalik, et viia läbi üks korralik üritus kuni 500le inimesele. Kui meie inventari nimekirjas pole kõike, mida soovite, siis leiame need <u>koos.</u></p>
          <div class="buttons">
            <a href="" class="btn btn-white">inventar</a>
            <a href="" class="btn btn-white">galerii</a>
          </div>
        </div>
      </div>
    </div>

    <!--CONTACT-->
    <div id="contact" class="para bg-0 no-spy">
     <!-- <span class="logo white"></span>-->
      <div class="triangle">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewbox="0 0 1000 890" enable-background="new 0 0 1000 890" xml:space="preserve">
          <polygon points="0,800 1000,585 1000,345 0,170 "/>
        </svg>
        <div class="text">

          <form action="/action_page.php">

            <div class="group">
              <input type="text" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Nimi</label>
            </div>

            <div class="group">
              <input type="text" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Telefon</label>
            </div>

            <div class="group">
              <input type="text" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>E-mail</label>
            </div>

            <div class="group">
              <textarea required></textarea>
              <span class="highlight textarea"></span>
              <span class="bar"></span>
              <label>Sõnum</label>
            </div>

            <a href="#" class="btn btn-white">Saada</a>

          </form>

        </div>

        <div class="footer">
          <p>Kohvik Maru</p>
          <p>Vesilennuki 6, Tallinn</p>
          <p>maru@lennusadam.eu</p>
          <p>+372 5198765</p>
        </div>
      </div>

    </div>


		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maru-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
