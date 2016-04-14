<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends Admin_Controller {
//class Dashboard extends CI_Controller {

    public function index() {
        $this->load->model('crud_auth');
        $this->load->model('admin/admin_menu');

        $var = array();
        
        $var['main_menu'] = $this->admin_menu->fetch();
        $var['main_content'] = $this->load->view('admin/common/dashboard',$var,true);
        
        $this->load->model('admin/admin_footer');
        $var['main_footer'] = $this->admin_footer->fetch();

        $this->load->view('layouts/admin/default', $var);
    }

    public function get()
    {
        $auth = $this->session->userdata('CRUD_AUTH');
        
        if (empty($auth))
        {
            //http://stackoverflow.com/questions/22527412/403-forbidden-access-to-codeigniter-controller-from-ajax-request?rq=1
            //$send = array('token' => $this->security->get_csrf_hash()) + $array;

            $rs=array();
            echo json_encode($this->jsondata->datawrapper($rs));

        }
        else
        {
            // if (!headers_sent()) {
            //     header('Cache-Control: no-cache, must-revalidate');
            //     header('Expires: ' . date('r'));
            //     header('Content-type: application/json');
            //     //exit(json_encode($send, JSON_FORCE_OBJECT));
            // }

            $this->output->set_status_header('404');
            exit();

            $this->load->library("jsondata");
            $var = array();
            $var['database_name'] = $this->db->database;
            $this->db->select('*');
            $this->db->from('crud_components');
            $query = $this->db->get();
            $rs = $query->result_array();
            echo json_encode($this->jsondata->datawrapper($rs));
        }

        
    }

}