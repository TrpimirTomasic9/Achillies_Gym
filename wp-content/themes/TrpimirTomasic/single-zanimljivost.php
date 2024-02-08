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

        $sIstaknutaSlika = "";
        if( get_the_post_thumbnail_url($post->ID) )
        {
          $sIstaknutaSlika = get_the_post_thumbnail_url($post->ID);
        }
        $oZanimljivostVrste = wp_get_post_terms( $post->ID, 'zanimljivost_tip' );
        $oZanimljivostVrsta = "-";
        if(sizeof($oZanimljivostVrste)>0)
        {
          $oZanimljivostVrsta = $oZanimljivostVrste[0]->name;
          echo '
          <div class="zanimljivost-container">    
              <div class="zanimljivost-container-slika">
              <div class="pozadinska_boja"></div>
                <img src="'.$sIstaknutaSlika.'">
              </div>
              <div class="container" style="text-align:center;">
              <h3>'.$oZanimljivostVrsta.'</h3>
              '.nl2br($post->post_content).'
              </div>
            </div>';
        }
  }
}
get_footer();
?>

