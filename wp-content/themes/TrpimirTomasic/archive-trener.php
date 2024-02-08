<?php
get_header();
?>

<?php
$sImageUrl = get_template_directory_uri().'/img/background.jpg';
echo '<header class="masthead" style="background-image: url('.$sImageUrl.')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Treneri</h1>
              <span class="subheading"></span>
            </div>
          </div>
        </div>
      </div>
</header>';
?>

<?php
echo '<div class="container-fluid text-center">
		<div class="trener-item">
			    <h2>Borilačke vještine</h2>';
				echo daj_trenere( 'borilacke-vjestine' );
				echo '<h2>Fitness</h2>';
				echo daj_trenere( 'fitness' );
				echo '<h2>Yoga</h2>';
				echo daj_trenere( 'yoga' );
echo '</div></div>';
?>

<?php
get_footer();
?>
