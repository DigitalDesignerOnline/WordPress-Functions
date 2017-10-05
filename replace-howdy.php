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
