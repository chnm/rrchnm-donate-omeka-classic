<?php

class RRCHNMDonatePlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array (
        'public_head',
        'public_body',
        );

    public function hookPublicHead()
    {
        queue_css_url('https://rrchnm.org/donate/donate-style.css');
        queue_js_file('vendor/jquery');
        queue_js_url('https://rrchnm.org/donate/donate-positioning.js');
    }

    public function hookPublicBody() 
    {
        echo file_get_contents('https://rrchnm.org/donate/rrchnm-donate-banner.html');
    }
}
?>