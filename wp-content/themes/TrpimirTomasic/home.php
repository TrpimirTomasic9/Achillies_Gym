<?php
get_header();
$sImageUrl = get_template_directory_uri().'/img/background.jpg';
echo '<header class="masthead" style="background-image: url('.$sImageUrl.')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">ss
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Achillies Gym</h1>
              <span class="subheading">Mjesto na kojem možete odraditi siguran i ugodan trening te na taj način ostati aktivni i jačati svoj imunitet u borbi protiv virusa.</span>
            </div>
          </div>
        </div>
      </div>
</header>';
?>

<?php

echo '<h2 class="zanimljivosti">Zanimljivosti!</h2>';
echo '<div class="zanimljivost-item">';
				  echo daj_zanimljivosti( 'fitnes' );
echo '</div>';
?>

<?php
get_footer();
?>
