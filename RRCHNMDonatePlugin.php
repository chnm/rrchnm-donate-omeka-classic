<?php

class RRCHNMDonatePlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array (
        'public_head',
        );

    public function hookPublicHead()
    {
        queue_css_url('https://rrchnm.org/donate/donate-style.css');
        queue_js_url('https://rrchnm.org/donate/donate-positioning.js');
    }
}
?>