<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_departement  extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Departemen',
            'desc' =>'melihat data depatemen'
        ];
        $page = 'departement/index';
        template($page,$data);
    }
}