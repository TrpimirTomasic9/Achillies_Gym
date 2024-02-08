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
              <h1>Sprave</h1>
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
    <h2>Mišići trbuha</h2>';
    echo daj_sprave( 'misici-trbuha' );
    echo '<h2>Mišići nogu</h2>';
    echo daj_sprave( 'misici-nogu' );
    echo '<h2>Mišići ruku</h2>';
    echo daj_sprave( 'misici-ruku' );
    echo '<h2>Mišići prsa</h2>';
    echo daj_sprave( 'misici-prsa' );
    echo '<h2>Mišići leda</h2>';
    echo daj_sprave( 'misici-leda' );
echo '</div></div>';
?>

<?php
get_footer();
?>
