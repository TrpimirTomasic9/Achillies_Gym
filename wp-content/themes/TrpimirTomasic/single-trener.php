<?php
  get_header();
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
        $oTrenerVrste = wp_get_post_terms( $post->ID, 'tip' );
        $oTrenerVrsta = "-";
        if(sizeof($oTrenerVrste)>0)
        {
          $oTrenerVrsta = $oTrenerVrste[0]->name;
          echo '
          <div class="trener-container">
              <div class="trener-container-slika">
                <img src="'.$sIstaknutaSlika.'">
              </div>
              <div class="container" style="text-align:center;">
              <h3>'.$oTrenerVrsta.'</h3>
              '.nl2br($post->post_content).'
              </div>
            </div>';
        }
  }
}
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
          'post_type' => 'program',
          'post_status' => 'publish'
          );
          $programi = get_posts( $args );
          $sHtml = '<h3 class="programi_naslov">Programi: </h3><div class="programi_container"><div class="program-trener">';
          $popisPrograma = get_post_meta($post->ID, 'program_trenera', true);
          
          foreach ($programi as $program)
            {
              $sProgramNaziv = $program->post_title;
              $nProgramId = $program->ID;
              $sProgramUrl = $program->guid;
              $sIstaknutaSlika = get_the_post_thumbnail_url($nProgramId);
              $programiArray = explode(', ', $popisPrograma);
              $selected = "";
              foreach ($programiArray as $oProgram) 
              {
                if ($oProgram == $sProgramNaziv)
                {
                  $sHtml .= '
                  <a href="'.$sProgramUrl.'">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="'.$sIstaknutaSlika.'" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title text-center">'.$sProgramNaziv.'</h5>
                      </div>
                    </div>
                  </a>';
                }
              }
            }
            if(sizeof($programiArray)==1)
            {
              if ($programiArray[0] == "")
              {
              $sHtml .= '<h2>Nema upisanih programa!</h2>';
              }
            }
            
            $sHtml .= '</div>';

            echo $sHtml;
        
  }
}
?>

<?php
get_footer();
?>

