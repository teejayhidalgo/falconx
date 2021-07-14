<?php
/**
 * Header Navigation template.
 *
 * @package Falconx
 */

$menu_class = \FALCONX_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'falconx-header-menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );

$logo = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $logo , 'full' );
$image_url = $image[0];
?>

<nav class="container container--pall flex flex-jc-sb flex-ai-c">
    <a href="/" class="header__logo">
      <img src="<?php echo $image_url;?>" alt="Rocket Landing" />
    </a>

    <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
      <span></span>
      <span></span>
      <span></span>
    </a>

    <div class="header__links hide-for-mobile">
    <?php
			foreach ( $header_menus as $menu_item ) {?>
      <a href="<?php echo esc_url( $menu_item->url ); ?>"><?php echo esc_html( $menu_item->title ); ?></a>
      <?php
			}?>
    </div>

    <a href="#" class="button header__cta call hide-for-mobile">CALL 123 4567</a>
    <a href="#" class="button header__cta contact hide-for-mobile">CONTACT US</a>
</nav>

<div class="header__menu has-fade">
  <a href="">Expertise</a>
  <a href="">Why Lorem</a>
  <a href="">Business Outcomes</a>
</div>