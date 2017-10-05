# WordPress-Functions
Collection of regularily used code snippets for WordPress to enhance both the front end and dashboard.

1. Replace the Howdy greeting in the Dashboard
When I first started developing WordPress themes, the moment my Client would enter the Dashboard they would instantly say. "Can we change the Howdy to something else?" Finally i started adding this snippet and the issue was resolved.

function replace_howdy ( $wp_admin_bar ) {
    $avatar = get_avatar( get_current_user_id(), 15 );
    if ( ! $wp_admin_bar->get_node( 'my-account' ) )
        return;
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => sprintf( 'Greetings: %s', wp_get_current_user()->display_name ) . $avatar,
    ) );
}
add_action( 'admin_bar_menu', 'replace_howdy' );

2. Brand The Dashboard Admin Footer
When developing a WordPress website for a client I always add this snippet.

function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Development &amp; Customization Provided By: <a href="http://www.redsealcreative.com" target="_blank">RedSeal Creative Inc.</a></span>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin');
