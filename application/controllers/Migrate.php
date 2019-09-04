<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 31/8/2019
 * Time: 4:00 PM
 */

class Migrate extends CI_Controller
{
    public  function  __construct()
    {
        parent::__construct();
        $this->load->library('migration');
    }

    public function index()
    {
        //var_dump("hellow");
       // die();


        if ($this->migration->current() === FALSE)
        {
//            show_error($this->migration->error_string());
        }
        else{
            // success
            show_error("<p style='color: red;'>Now you have to re-enter or re-create the all accounts...</p>",
                200, "<h1 style='color: green;'>Data migrated Successfully!</h1>");
        }
    }

}
