<?php
function configemail()
{
    $config = [
        'protocol' => 
        ''
    ];
}

function template($page= null, $data= null)
{
    $ci = get_instance();
    $ci->load->view('admin/template/header',$data);
    $ci->load->view('admin/template/topbar',$data);
    $ci->load->view('admin/template/sidebar',$data);
    $ci->load->view('admin/',$page, $data);
    $ci->load->view('admin/template/footer',$data);
}