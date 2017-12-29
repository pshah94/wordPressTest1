<?php
/*
Plugin Name: when is Uttrayan
*/
function uttryan_shortcodes_init()
{
    function uttryan_shortcode($atts = [], $content = null)
    {
        $currDate =  new DateTime();

        $uttryanDate =  new DateTime("2018-01-14"); 
        $diff = $currDate->diff($uttryanDate);
        
        $content .=  $diff->days;
        return $content;
    }
    add_shortcode('daysToUttryan-plugin', 'uttryan_shortcode');
}
add_action('init', 'uttryan_shortcodes_init');

?>