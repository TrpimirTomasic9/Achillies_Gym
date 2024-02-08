<?php
    get_header();
    $global_post_id;
?>
    <?php
if ( have_posts() )
{
  while ( have_posts() )
  {
    the_post();
        $sIstaknutaSlika = "";
        $sNaslov = "test";

        $global_post_id = $post->ID;

        $sIstaknutaSlika = "";
        if( get_the_post_thumbnail_url($post->ID) )
        {
          $sIstaknutaSlika = get_the_post_thumbnail_url($post->ID);
        }
        $oSpravaVrste = wp_get_post_terms( $post->ID, 'grupa_misica' );
        $oSpravaVrsta = "-";
        if(sizeof($oSpravaVrste)>0)
        {
          $oSpravaVrsta = $oSpravaVrste[0]->name;
          echo '
          <div class="sprava-container">
              <div class="sprava-container-slika">
                <div class="pozadinska_boja"></div>
                <img src="'.$sIstaknutaSlika.'">
              </div>
              <div class="container" style="text-align:center;">
              <h3>'.$oSpravaVrsta.'</h3>
              '.nl2br($post->post_content).'
              </div>
            </div>';
        }
  }
}
?>

<?php
echo '<div class="container-fluid programicontainer text-center">
		    <div class="trener-item">
			    <h2>Programi</h2>';
				  echo daj_sprave_programa( $global_post_id );
        echo '</div>
      </div>';
?>

<?php
get_footer();
?>

