<?php

/** 
 * Navigation links array
 */
$navMenuLinks = array(
    'Home'=>'index.php',
    'Testimonials'=>'testimonials.php',
    'Services'=>'index.php#services',
    'Contact'=>'contact.php',
    'Blog'=>'index.php',
);

class functions
{
    /**
     * Get the current page of the site with '/' and filetype removed
     * 
     * @return string
     */
    public function getCurrentPage()
    {
        $fileTypes = [
            '.html',
            '.php',
        ];

        $sanitisedUri = str_replace($fileTypes, '', $_SERVER[REQUEST_URI]);

        if ($sanitisedUri == '/index') {
            return 'home';
        }
        
        return substr($sanitisedUri, 1); 
    }
}