<?php
/**
 * Template Name: Page Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
global $dn_options;
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

  <section class="home-banner">

    <div class="home-banner__wrap">
      <div class="container">
        <div class="el__meta">
          <h2 class="el__title wow fadeInUp"><?php the_field('header_title') ?></h2>
          <div class="el__excerpt wow fadeInRight"><?php the_field('header_sub') ?></div>
          <div class="wow fadeInUp">
            <a href="<?php the_field('header_link') ?>" class="el__readmore btn"><span>GET STARTED</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $intro_image = get_field('intro_image'); ?>
  <section id="home-about" class="home-about">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-md-6 col-lg-6 wow fadeInLeft">
          <div class="el__thumb">
            <?php echo wp_get_attachment_image( $intro_image, 'large' ); ?>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 wow fadeInRight">
          <div class="el__meta">
            <div class="sc__header">
              <h2 class="sc__header__title"><?php the_field('intro_title') ?></h2>
              <div class="sc__header__excerpt"><?php the_field('intro_excerpt') ?></div>
            </div>
          </div> <!-- .el__meta -->
        </div>
      </div>
    </div>
  </section>


  <section id="home-mission" class="home-mission">
    <div class="sc__header">
      <div class="container">
        <div class="el__title wow fadeInUp"><?php the_field('mission_title') ?></div>
      </div>
    </div>
    <div class="container">
      <?php
      if( have_rows('mission_items') ): $i=0; ?>
        <div class="row wow fadeInUp">
          <?php while( have_rows('mission_items') ) : the_row(); $i++;
            $sub_image = get_sub_field('image');
            $sub_title = get_sub_field('title');
            $sub_content = get_sub_field('content');
            ?>
            <div class="col-md-6 d-md-flex">
              <div class="el__item">
                <div class="el__item__thumb dnfix__thumb -contain">
                  <?php echo wp_get_attachment_image( $sub_image, 'small' ); ?>
                </div>
                <div class="el__item__meta">
                  <h3 class="el__item__title"><?php echo $sub_title; ?></h3>
                  <div class="el__item__excerpt"><?php echo $sub_content; ?></div>
                </div>
              </div>
            </div> <!-- .col-md-6 -->
          <?php endwhile; ?>
        </div>
      <?php else :
        get_template_part( 'template-parts/content', 'none' );
      endif;
      ?>
    </div>
  </section>

  <section id="home-team" class="home-team">
    <div class="sc__wrap">
      <div class="container">
        <div class="row align-items-center gx-lg-5">
          <div class="col-md-6 wow fadeInLeft">
            <header class="sc__header">
              <h2 class="sc__header__title"><?php the_field('team_title') ?></h2>
              <div class="sc__header__excerpt"><?php the_field('team_sub') ?></div>
            </header>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow fadeInRight">
            <?php
            if( have_rows('team_items') ): $i=0; ?>
              <div class="home-team__slider slick-slider">
                <?php while( have_rows('team_items') ) : the_row(); $i++;
                  $sub_image = get_sub_field('image');
                  $sub_title = get_sub_field('title');
                  // $sub_content = get_sub_field('content');

                  $position = get_sub_field('position');
                  $facebook = get_sub_field('facebook');
                  $telegram = get_sub_field('telegram');
                  $twitter = get_sub_field('twitter');
                  $instagram = get_sub_field('instagram');
                  $youtube = get_sub_field('youtube');

                  ?>
                  <div class="el__item__wrap">
                    <div class="el__item ef--shine">
                      <div class="el__item__thumb">
                        <div class="dnfix__thumb -contan">
                          <?php echo wp_get_attachment_image( $sub_image, 'small' ); ?>
                        </div>
                      </div>
                      <div class="el__item__meta">
                        <div class="el__item__title"><?php echo $sub_title; ?></div>
                        <div class="el__item__sub"><?php echo $position; ?></div>
                        <ul class="el__item__socical">
                          <?php if($facebook): ?>
                            <li><a href="<?php echo $facebook ?>" target="_blank"><span class="icon-facebook-circle"></span></a></li>
                          <?php endif;
                          if($twitter): ?>
                          <li><a href="<?php echo $twitter ?>" target="_blank"><span class="icon-twitter"></span></a></li>
                          <?php endif;
                          if($telegram): ?>
                          <li><a href="<?php echo $telegram ?>" target="_blank"><span class="icon-telegram"></span></a></li>
                          <?php endif;
                          if($instagram): ?>
                          <li><a href="<?php echo $instagram ?>" target="_blank"><span class="icon-instagram"></span></a></li>
                          <?php endif;
                          if($youtube): ?>
                          <li><a href="<?php echo $youtube ?>" target="_blank"><span class="icon-youtube"></span></a></li>
                          <?php endif; ?>
                        </ul>
                      </div>
                    </div>
                  </div> <!-- .el__item__wrap -->

                  <div class="col-md-6 d-md-flex">
                    <div class="el__item">
                      <div class="el__item__thumb dnfix__thumb -contain">
                        <?php echo wp_get_attachment_image( $sub_image, 'small' ); ?>
                      </div>
                      <div class="el__item__meta">
                        <h3 class="el__item__title"><?php echo $sub_title; ?></h3>
                        <div class="el__item__excerpt"><?php echo $sub_content; ?></div>
                      </div>
                    </div>
                  </div> <!-- .col-md-6 -->
                <?php endwhile; ?>
              </div>
            <?php else :
              get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
          </div>
        </div> <!-- .row -->
      </div>
    </div>
  </section>

  <section id="home-partners" class="home-partners wow fadeInUp">
    <div class="container js-loadmore__wrap">
      <h2 class="el__title"><?php the_field('partners_sub') ?></h2>
      <?php
      if( have_rows('partners') ): $i=0; ?>
        <div class="row row-custom js-content-loadmore">
          <?php while( have_rows('partners') ) : the_row(); $i++;
            $sub_image = get_sub_field('image');
            $sub_link = get_sub_field('link');
            ?>
            <div class="el__col col-6 col-sm-3 col-lg-2">
              <a href="<?php echo $sub_link  ?>" class="el__item">
                <div class="el__item__thumb dnfix__thumb -contain">
                  <?php echo wp_get_attachment_image( $sub_image, 'small' ); ?>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      <?php else :
        get_template_part( 'template-parts/content', 'none' );
      endif;
      ?>
    </div>
  </section>

  <section class="home-news wow fadeInUp">
    <div class="container">
      <header class="sc__header text-center -s2">
        <div class="sc__header__title"><?php the_field('new_title') ?></div>
      </header>

      <?php
      $new_cat = get_field('new_cat');

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'cat' => $new_cat,
      );
      $the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
          <div class="home-news__slider slick-slider">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="el__item__wrap">
                <div class="new__item ef--shine">
                  <a href="<?php the_permalink(); ?>" class="new__item__wrap">
                    <div class="new__item__thumb">
                      <div class="dnfix__thumb">
                        <?php the_post_thumbnail('small',array( 'class' => 'img-fluid','alt'   => get_the_title() )); ?>
                      </div>
                    </div>
                    <div class="new__item__meta">
                      <h3 class="new__item__title text__truncate -n2"><?php the_title(); ?></h3>
                    </div>
                  </a>
                </div>
              </div>
            <?php endwhile;?>
          </div>
          <?php
          wp_reset_postdata();
        else :
          get_template_part( 'template-parts/content', 'none' );
        endif; ?>
    </div>
  </section>

  <?php
  $gallery = get_field('gallery');
  if( $gallery ): $i=0; ?>
      <section id="home-gallery" class="home-gallery">
        <div class="container-full">
          <div class="row gx-0 wow fadeInUp pt-lg-5">
            <?php foreach( $gallery as $image_id ): $i++; ?>

              <?php if($i<=10): ?>
                <div class="el__col col-4 col-md-20 col-lg-20">
                  <div class="el__item ef--zoomin" >
                    <a href="<?php echo wp_get_attachment_image_url( $image_id, 'full' ); ?>" data-fancybox="gallery">
                      <div class="el__item__thumb dnfix__thumb">
                        <?php echo wp_get_attachment_image( $image_id, 'small' ); ?>
                      </div>
                    </a>
                  </div>
                </div>
              <?php else: ?>
                <a href="<?php echo wp_get_attachment_image_url( $image_id, 'full' ); ?>" data-fancybox="gallery" class="d-none"></a>
              <?php endif; ?>

            <?php endforeach; ?>
          </div>
        </div>
      </section>
  <?php endif; ?>
<?php endwhile; ?>
<?php get_footer();