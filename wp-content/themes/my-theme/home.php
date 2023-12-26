<?php
    /**
     * The main Template file
     */

    get_header();
?>

        <div class="container-fluid pg">
          <div class="row">
            <?php
              $args=array('post_type'=>'home_post','posts_per_page'=>1,'meta_key'=>"_top",'meta_value'=>'1');
              $loop=new WP_Query($args);
              $i=0;
              while($loop->have_posts()){
              $loop->the_post();
            ?>
            <div class="col-sm-12 p-0 m-0">
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" style="width:100%;" height="500px">
                  <div class="content">
                    <h1><?php the_title() ?></h1>
                      <p><?php the_content() ?></p>
                </div>
            </div>
            <?php $i++; } ?>            
        </div>
      </div>

        <div class="container-fluid">
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
             // $args=array('post_type'=>'home_post','posts_per_page'=>1,'meta_key'=>"_top",'meta_value'=>'1');
              $args=array('post_type'=>'home_post','posts_per_page'=>6,'meta_query'=>array(
                array(
                  'key'=>'_top','compare'=>'NOT EXISTS'
                ),
                array(
                  'key'=>'_full_width','compare'=>'NOT EXISTS'
                )
              ));
              $loop=new WP_Query($args);
              $i=0;
              while($loop->have_posts()){
              $loop->the_post();
            ?>

          <div class="col-sm-6">
              <div class="card">
                <img src="<?= get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="">
                  <div class="card-body text-block">
                    <h4><?php the_title() ?></h4>
                  </div>
              </div>
                  <span class="card-text"><?php the_content() ?></span>
              </div>
            <?php $i++; } ?>
            </div>
          </div>

          <div class="container-fluid pg">
            <div class="row">
            <?php
              // $args=array('post_type'=>'home_post','posts_per_page'=>1,'meta_key'=>"_top",'meta_value'=>'1');
              $args=array('post_type'=>'home_post','posts_per_page'=>1,'meta_query'=>array(
                array(
                  'key'=>'_top','compare'=>'NOT EXISTS'
                ),
                array(
                  'key'=>'_full_width','value'=>'1'
                )
              ));
              $loop=new WP_Query($args);
              $i=0;
              while($loop->have_posts()){
              $loop->the_post();
            ?>

          <div class="col-sm-12 p-0 m-0">
              <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Notebook" style="width:100%;" height="500px">
                <div class="content">
                  <h1><?php the_title() ?></h1>
                  <?php the_content() ?>
                </div>
            </div>
          <?php $i++; } ?>
        </div>
      </div>

          <div class="row row-cols-1 row-cols-md-2 g-4 pg">
          <?php
             // $args=array('post_type'=>'home_post','posts_per_page'=>1,'meta_key'=>"_top",'meta_value'=>'1');
              $args=array('post_type'=>'home_post','posts_per_page'=>4,'offset'=>6,'meta_query'=>array(
                array(
                  'key'=>'_top','compare'=>'NOT EXISTS'
                ),
                array(
                  'key'=>'_full_width','compare'=>'NOT EXISTS'
                )
              ));
              $loop=new WP_Query($args);
              $i=0;
              while($loop->have_posts()){
              $loop->the_post();
          ?>
          <div class="col-sm-6">
              <div class="card">
                <img src="<?= get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="">
                  <div class="card-body text-block">
                    <h4><?php the_title() ?></h4>
                  </div>
              </div>
                  <span class="card-text"><?php the_content() ?></span>
            </div>
          <?php $i++; } ?>
         
          </div>
      </div>

  <?php
    get_footer();
  ?>
          