function update_dashboard_footer () 
{
    echo '<span id="footer-thankyou">Development &amp; Customization Provided By: <a href="http://www.yourdomain.com" target="_blank">Your Company Name</a></span>';
}
 
add_filter('admin_footer_text', 'update_dashboard_footer');
