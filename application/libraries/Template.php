<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Template {
    function show($view, $data = array()){
        // Get current CI Instance
        $CI = & get_instance();
 
        // Load template views
        $CI->load->view('layout/template.html', $data);
        $CI->load->view($view, $data);
    }
 
}