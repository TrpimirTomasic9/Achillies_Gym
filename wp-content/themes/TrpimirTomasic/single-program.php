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
        $oProgramVrste = wp_get_post_terms( $post->ID, 'tezina' );
        $oProgramVrsta = "-";
        if(sizeof($oProgramVrste)>0)
        { 
          $oProgramVrsta = $oProgramVrste[0]->name;
          echo '
          <div class="cijelidiv"><div class="program-container">
              <div class="program-container-slika">
                <img src="'.$sIstaknutaSlika.'">
              </div>
              <div class="container programcontainer2" style="text-align:center;">
                <h3>'.$oProgramVrsta.'</h3>
                '.nl2br($post->post_content).'
              </div>
            </div>';
        }

  }
}
?>

<?php
echo '<div class="container-fluid trenricontainer text-center">
		    <div class="trener-item">
			    <h2>Treneri</h2>';
				  echo daj_trenera_programa( $global_post_id );
        echo '</div>
      </div></div>';
?>

<?php
if ( have_posts() )
{
  while ( have_posts() )
  {
    the_post();
        $sIstaknutaSlika = "";

        $args = array(
          'posts_per_page' => -1,
          'post_type' => 'sprava',
          'post_status' => 'publish'
          );
          $sprave = get_posts( $args );
          $sHtml = '<div class="program-container-bottom"><h2>Sprave</h2><div class="program-sprava">';
          $popisSprava = get_post_meta($post->ID, 'sprava_programa', true);

          foreach ($sprave as $sprava)
            {
              $sSpravaNaziv = $sprava->post_title;
              $nSpravaId = $sprava->ID;
              $sSpravaUrl = $sprava->guid;
              $sIstaknutaSlika = get_the_post_thumbnail_url($nSpravaId);
              $spraveArray = explode(', ', $popisSprava);
              $selected = "";
              foreach ($spraveArray as $oSprava) 
              {
                if ($oSprava == $sSpravaNaziv)
                {
                  $sHtml .= '
                  <a href="'.$sSpravaUrl.'">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="'.$sIstaknutaSlika.'" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title text-center">'.$sSpravaNaziv.'</h5>
                      </div>
                    </div>
                  </a>';
                }
              }
            }
            if(sizeof($spraveArray)==1)
            {
              if ($spraveArray[0] == "")
              {
              $sHtml .= '<h2>Nema upisanih sprava!</h2>';
              }
            }
            
            $sHtml .= '</div></div>';

            echo $sHtml;
  }
}
?>

<?php
get_footer();
?>
