<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
$logo_img = get_field('logo_footer', 'option');
?>

  <footer class="footer">
    <div class="container position-relative">
      <div class="el__header">
        <div class="el__title wow fadeInLeft">Let's get to <br class="mbipad"><strong>work</strong></div>
        <div class="text-center wow fadeInRight">
          <a href="" class="el__btn"><span>GET STARTED</span></a>
        </div>
      </div>
      <div class="row gx-0">

        <div class="col-lg-2 col-6">
          <div class="footer__item">
            <div class="footer__logo">
              <a href="<?php echo site_url(); ?>">
                  <?php echo wp_get_attachment_image( $logo_img, 'full' ); ?>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-6 order-lg-2">
          <div class="footer__item -contact text-end">
            <p class="footer__item__title">Keep In Touch</p>
            <a href="mailto:contact@dcventures.fund"><?php the_field('email', 'option') ?></a>
            <ul class="footer__socical ms-auto">
              <li><a href="<?php the_field('facebook', 'option') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('assets/img/facebook.svg') ?>" alt=""></a></li>
              <li><a href="<?php the_field('twitter', 'option') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('assets/img/twitter.svg') ?>" alt=""></a></li>
              <li><a href="<?php the_field('telegram', 'option') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('assets/img/telegram.svg') ?>" alt=""></a></li>
              <li><a href="<?php the_field('linkedin', 'option') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('assets/img/linkedin.svg') ?>" alt=""></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-8 col-md-12">
          <div class="footer__item">
            <?php
              wp_nav_menu(
              array(
                 'theme_location'  => 'footer',
                 'container'       => 'ul',
                 'container_class' => '',
                 'menu_id'         => '',
                 'menu_class'      => 'footer__list',
              ));
            ?>
          </div>

          <div class="copyright">
            <p><?php the_field('copyright', 'option'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <nav id="menu__mobile" class="nav__mobile">
      <div class="nav__mobile__content">
        <?php
          wp_nav_menu(
          array(
             'theme_location'  => 'primary',
             'container'       => 'ul',
             'container_class' => '',
             'menu_id'         => '',
             'menu_class'      => 'nav__mobile--ul',
          ));
        ?>
      </div>
  </nav>
</div> <!-- end .wrapper -->
<?php wp_footer(); ?>
</body>
</html>
