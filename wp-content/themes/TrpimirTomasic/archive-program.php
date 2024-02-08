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
              <h1>Programi</h1>
              <span class="subheading"></span>
            </div>
          </div>
        </div>
      </div>
</header>';
?>

<?php
echo '<div class="container-fluid text-center">
		<div class="program-item">
			    <h2>Početni programi</h2>';
				echo daj_programe( 'pocetni' );
				echo '<h2>Srednji programi</h2>';
				echo daj_programe( 'srednji' );
				echo '<h2>Iskusni programi</h2>';
				echo daj_programe( 'iskusni' );
				echo '<h2>Ahilejski programi</h2>';
				echo daj_programe( 'ahilejski' );
echo '</div></div>';
?>

<?php
get_footer();
?>
