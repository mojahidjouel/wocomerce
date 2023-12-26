<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/bootstrap-5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/style.css">
  <?= wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>  
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">                          
          <nav class="navbar navbar-expand-sm navbar-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav sociel float-start">
                    <li class="nav-item">
                    <a href="<?= home_url() ?>">
                        <?php
                            $logo_id=get_theme_mod('custom_logo');
                            $logo=wp_get_attachment_image_src($logo_id, 'full');
                            if(has_custom_logo()){
                        ?>
                                <img src="<?= esc_url($logo[0]); ?>" alt="<?php bloginfo('name') ?>" style="width:200px;" class="">
                        <?php }else{ ?>
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="Youngone (en-US)" width="150" height="45">
                        <?php } ?>
                    </a></li>
                    
                    <?php wp_nav_menu(array('theme_location'=>'main_menu','container'=>"",)) ?>

                    <!-- <li class="region-select region-select--header">
                      <strong>English</strong> |
                      <a href="http://www.youngone.co.kr/" class="region-link">한국어</a>
                      </li>
                      <li class="close">
                      <a class="js-nav-toggle" href="https://youngonecorporation.com/#">
                      <svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg>
                      </a>
                      </li> -->
                    <form class="d-flex">
                    <button class="btn btn-dark px-5 text-white mojahid" type="submit">CONTACT</button>
                    </form>
                  </ul>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
            </nav>
          </div>
        </div> 
      </div>

        