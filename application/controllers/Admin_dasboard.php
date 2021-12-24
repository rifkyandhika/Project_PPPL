<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dasboard  extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
    }
    public function index()
    {
        $data = [
            'title' => 'Dasboard',
            'desc' =>'melihat data dasboard'
        ];
        $page = 'dasboard/index';
        template($page,$data);
    }
}