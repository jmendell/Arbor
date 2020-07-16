<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateResources extends Controller
{
    protected $acf = true;

    public function faqLoop()
    {
        $args  = [
          'post_type' => 'faq',
          'posts_per_page' => -1,
        ];
        $query    = new \WP_Query($args);
        return $query;
    }
}
