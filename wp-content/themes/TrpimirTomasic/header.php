<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Achillies Gym</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyHdX09dcHIBfl_Laz7L_W77lzvKz6Q3I&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
    </style>
    <script>
      let map;
      function initMap() {
        //const myLatLng = { lat: 45.81713422462684, lng: 15.976978341607031 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 8,
            center: { lat: 45.81713422462684, lng: 15.976978341607031 },
        });
        const marker = new google.maps.Marker({
            position: { lat: 45.81713422462684, lng: 15.976978341607031 },
            map,
            title: "Hello World!"
        });
        new google.maps.Marker({
            position: { lat: 45.816646771484834, lng: 16.00006144330335 },
            map,
            title: "Hello World!"
        });
        new google.maps.Marker({
            position: { lat: 45.804886317491196, lng: 15.984524429228696 },
            map,
            title: "Hello World!"
        });
        new google.maps.Marker({
            position: { lat: 45.59429627069257, lng: 18.770362243367025 },
            map,
            title: "Hello World!"
        });
        new google.maps.Marker({
            position: { lat: 45.201030142807575, lng: 18.141914874676033 },
            map,
            title: "Hello World!"
        });
        marker.addListener("click", () => {
            map.setZoom(4);
            map.setCenter(marker.getPosition());
        });
        }
    </script>

  </head>
  <body>
	<!-- Navigacija -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <img class="navbar-logo" src="http://localhost/achilles_gym/logo.png" alt="logo">
                
                <a class="navbar-brand" href="index.php"><?php echo get_bloginfo(); ?></a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php
                        $args = array(
                            'theme_location'  =>  'glavni-menu',
                            'menu_id'       =>  'achilles_gym-glavni-menu',
                            'menu_class'    =>  'navbar-nav ml-auto',
                            'container'     =>  'div',
                            'container_class' =>  'collapse navbar-collapse',
                            'container_id'  => 'navbarReponsive'
                        );
                        wp_nav_menu( $args );
                    ?>   
                </div>
            </div>
        </nav> 
