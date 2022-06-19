<?php

//Functions EOS

//*************URL theme [ get_template_directory_uri() ]
define('SITEPATH', '/wp-content/themes/eos_theme/');


//************* Login_redirect
function admin_default_page()
{
  return '/wp-admin';
}
add_filter('login_redirect', 'admin_default_page');


//************* Admin Login Logo
function tf_wp_admin_login_logo()
{ ?>
  <style type="text/css">
    body.login {
      background-image: url('<?php echo SITEPATH; ?>assets/img/slide/slide-1.jpg');
    }

    #login {
      margin-top: 100px !important;
      background-color: #0c1031;
      padding: 0% 0 0 !important;
      padding: 20px !important;
      box-shadow: 0 0 15px rgb(0, 0, 0, 0.8) !important;
      border-radius: 5px;
    }

    #login h1 a {
      background-image: url('<?php echo SITEPATH; ?>assets/img/logo.png');
      background-size: 150px;
      width: 150px;
      height: 60px;
    }

    #login .galogin-powered {
      display: none;
    }
  </style>
<?php }
add_action('login_enqueue_scripts', 'tf_wp_admin_login_logo');


//************* Admin Login Logo Link URL
function tf_wp_admin_login_logo_url()
{
  return home_url();
}
add_filter('login_headerurl', 'tf_wp_admin_login_logo_url');


//************* Admin Login Logo's Title
function tf_wp_admin_login_logo_title($headertext)
{
  $headertext = esc_html__(get_bloginfo('name'), 'plugin-textdomain');
  return $headertext;
}
add_filter('login_headertext', 'tf_wp_admin_login_logo_title');


//************* Hide admin bar for users
function remove_admin_bar()
{
  show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

//************* URL from breadcrumbs
function url_active()
{
  return explode("/", $_SERVER['REQUEST_URI']);
}
add_action('url_active', 'url_active');


//************* Remove tags support from posts
function myprefix_unregister_tags()
{
  unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'myprefix_unregister_tags');


//************* Add thumbnails
add_theme_support('post-thumbnails', array('post'));


//************* Add Menu
function register_my_menu()
{
  register_nav_menu('eos-nav', __('eos NAV'));
}
add_action('init', 'register_my_menu');


//************* Change Menu li id
function my_li_id_handler($id, $item, $args)
{
  $id = $item->post_name;
  return $id;
}
add_filter('nav_menu_item_id', 'my_li_id_handler', 10, 3);

//***************CLIENTS SLIDER */

function clients_slider()
{ ?>
  <div class="clients-slider swiper">
    <div class="swiper-wrapper align-items-center">
      <div class="swiper-slide"><img src="<?php echo SITEPATH; ?>assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo SITEPATH; ?>assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo SITEPATH; ?>assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo SITEPATH; ?>assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo SITEPATH; ?>assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
<?php }
add_action('clients_slider', 'clients_slider');


//***************PAGE PHP & SOLUTIONS */

function is_page_solutions()
{
  if (
    is_page('netuno') ||
    is_page('agillis') ||
    is_page('nautillus') ||
    is_page('zapia') ||
    is_page('polis')
  ) {
    return true;
  } else {
    return false;
  }
}
add_action('is_page_solutions', 'is_page_solutions');

function is_page_php()
{
  if (
    is_page('empresa') ||
    is_page('trabalhe') ||
    is_page('contato')
  ) {
    return true;
  } else {
    return false;
  }
}
add_action('is_page_php', 'is_page_php');
