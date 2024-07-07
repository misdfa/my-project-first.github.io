<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stomatolg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stomatolg' ); ?></a>
	<div class="callback-popup mfp-hide mfp-with-anim" id="callback-popup">
		<div class="callback-header">
			<div class="callback-logo">
				<img src="images/logo.svg" alt="Dental Tooth">
			</div>
			<button title="Close" type="button" class="mfp-close-custom">
				<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.977032 19.0005C0.72675 19.0005 0.476467 18.9053 0.28631 18.7137C-0.0954366 18.3319 -0.0954366 17.713 0.28631 17.3313L17.3313 0.28631C17.713 -0.0954366 18.3319 -0.0954366 18.7137 0.28631C19.0954 0.668056 19.0954 1.28696 18.7137 1.66895L1.66895 18.7137C1.47736 18.9041 1.22708 19.0005 0.977032 19.0005V19.0005Z" fill="#F0DFDF"/>
					<path d="M18.0232 19.0005C17.7729 19.0005 17.5229 18.9053 17.3325 18.7137L0.28631 1.66895C-0.0954366 1.28696 -0.0954366 0.668056 0.28631 0.28631C0.668056 -0.0954366 1.28696 -0.0954366 1.66895 0.28631L18.7137 17.3313C19.0954 17.713 19.0954 18.3319 18.7137 18.7137C18.5221 18.9041 18.2721 19.0005 18.0232 19.0005Z" fill="#F0DFDF"/>
				</svg>					
			</button>
		</div>
		<div class="callback-body">
			<div class="form-wrap">
				<h3 class="callback-form-title">Получить консультацию</h3>
				<div class="wpcf7">
					<form class="wpcf7-form init">
						<p><span class="wpcf7-form-control-wrap"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Ваше имя" type="text"></span></p>
						<p><span class="wpcf7-form-control-wrap"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-phonemask" placeholder="Ваш телефон" type="text" name="phone"></span></p>
						<p><input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Отправить"><span class="wpcf7-spinner"></span></p>
					</form>
				</div>
				<div class="form-agree">
					Нажимая кнопку, я даю свое согласие на обработку моих персональных данных
				</div>
			</div>
		</div>
	</div>

	<header class="header">
		<div class="header-top">
			<div class="container">
				<div class="header-top-row">
					<div class="header-top-location">
						<img src="images/location.svg" alt="Адрес">
						<span>ул. Протопского 28А город Алматы</span>
					</div>

					<div class="header-top-right">
						<a href="tel:77776544454" class="header-top-phone">
							<img src="images/phone.svg" alt="Телефон">
							<span>+7 (777) 654 44 54</span>
						</a>
						<a href="malito:info@dentaltooth.kz" class="header-top-email">
							<img src="images/envelope.svg" alt="Email">
							<span>info@dentaltooth.kz</span>
						</a>

						<div class="header-top-social">
							<a href="#">
								<img src="images/twitter.svg" alt="Twitter">
							</a>
							<a href="#">
								<img src="images/instagram.svg" alt="Instagram">
							</a>
							<a href="#">
								<img src="images/vk.svg" alt="Vk">
							</a>
						</div>
					</div>
					<div class="hamburger">
						<img src="images/hamburger.svg" alt="Hamburger">
					</div>
				</div>
			</div>
		</div>

		<div class="header-bottom">
			<div class="container">
				<div class="header-bottom-row">
					<a href="#" class="header-logo">
						<img src="images/logo.svg" alt="Dental Tooth">
						<?php the_custom_logo();?>
					</a>
					<nav class="menu-nav">
						<ul>
							<li><a href="#">Главная</a></li>
							<li><a href="#">Услуги</a></li>
							<li><a href="#">Наши специалисты</a></li>
							<li><a href="#">Отзывы</a></li>
							<li><a href="#">Блог</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</nav>
					<a href="#callback-popup" class="header-bottom-btn" data-effect="mfp-zoom-in">Получить консультацию</a>
				</div>
			</div>
		</div>

		<div class="mobile-menu">
			<div class="mobile-menu-header">
				<div class="mobile-menu-title">Меню</div>
				<div class="mobile-menu-close"><img src="images/close.svg" alt="Закрыть меню"></div>
			</div>
			<div class="mobile-menu-body">
				<a href="tel:77776544454" class="header-top-phone">
					<img src="images/phone.svg" alt="Телефон">
					<span>+7 (777) 654 44 54</span>
				</a>
				<a href="malito:info@dentaltooth.kz" class="header-top-email">
					<img src="images/envelope.svg" alt="Email">
					<span>info@dentaltooth.kz</span>
				</a>

				<div class="header-top-social">
					<a href="#">
						<img src="images/twitter.svg" alt="Twitter">
					</a>
					<a href="#">
						<img src="images/instagram.svg" alt="Instagram">
					</a>
					<a href="#">
						<img src="images/vk.svg" alt="Vk">
					</a>
				</div>

				<nav class="mobile-menu-nav">
					<ul>
						<li><a href="#">Главная</a></li>
						<li><a href="#">Услуги</a></li>
						<li><a href="#">Наши специалисты</a></li>
						<li><a href="#">Отзывы</a></li>
						<li><a href="#">Блог</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>







<!--	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$stomatolg_description = get_bloginfo( 'description', 'display' );
			if ( $stomatolg_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $stomatolg_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'stomatolg' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</header>
