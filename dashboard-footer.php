function update_dashboard_footer () 
{
    echo '<span id="footer-thankyou">Development &amp; Customization Provided By: <a href="http://www.redsealcreative.com" target="_blank">RedSeal Creative Inc.</a></span>';
}
 
add_filter('admin_footer_text', 'update_dashboard_footer');
