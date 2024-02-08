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
              <h1>O nama</h1>
              <span class="subheading">Bez obzira jeste li prvi korisnik teretane ili veteran, mi smo ovdje da pružimo okruženje za vježbanje u kojem svima - i svima - može biti ugodno.</span>
            </div>
          </div>
        </div>
      </div>
</header>';
?>

<?php
echo '<div class="page"><div class="container"> <br/>';
if ( have_posts() )
{
    while ( have_posts() )
    {
        the_post();
        
        $sIstaknutaSlika = "";
        if( get_the_post_thumbnail_url($post->ID) )
        {
            $sIstaknutaSlika = get_the_post_thumbnail_url($post->ID);
        }
        else
        {
            $sIstaknutaSlika = get_template_directory_uri(). '/img/home-bg.jpg';
        }
        echo '<div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="text-align:;">'.the_content().'</div>
                <div class="col-md-3"></div>
            </div>';
    }
}
echo '<br/><br/><br/></div></div>';
?>


<?php
get_footer();
?>
