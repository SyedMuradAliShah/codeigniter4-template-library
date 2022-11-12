<?php

namespace App\Controllers;

use App\Libraries\Template; // Loading Template Library


class Home extends BaseController
{
    public function index()
    {
        /**
         * Here we are loading view file without passing any data using template.
         * 
         */

        return Template::Home("homepage");
    }

    public function about()
    {
        /**
         * Here we are loading view file with data using template.
         * 
         */

        $data = [
            'title' => 'About Us',
            'description' => 'This is the about us page.'
        ];

        return Template::Home("about_us", $data);
    }


    public function admin()
    {
        /**
         * Here we are loading view file with other another template using the `Home` function, also passing data.
         * 
         */
        
        $data = [
            'title' => 'Admin Login',
            'description' => 'This is admin login page.'
        ];

        return Template::Home("login", $data, 'admin_side');
    }

    public function admin_dashboard()
    {
        /**
         * Here we are loading view file with other another template using a separate template function, also passing data.
         * 
         */
        
        $data = [
            'title' => 'Hello Admin',
            'description' => 'Welcome to your dashboard.'
        ];

        return Template::Admin("dashboard", $data);
    }
}
