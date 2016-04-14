<?php

/*
http://jorgeramon.me/2016/in-house-vs-outsourced-software-development-in-professional-services-firms/

http://rest.elkstein.org/2008/01/how-do-i-handle-authentication-in-rest.html
https://dotblogs.com.tw/shadow/2014/05/03/144960
http://www.weblee.co.uk/2009/06/25/secure-jquery-ajax-request/
http://stackoverflow.com/questions/6700822/jquery-how-to-get-the-http-status-code-from-within-the-ajax-error-method
https://teamtreehouse.com/community/running-this-in-localhost-and-keep-getting-a-post-404-not-found
http://stackoverflow.com/questions/22527412/403-forbidden-access-to-codeigniter-controller-from-ajax-request?rq=1


*/


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class test extends CI_Controller {

	public function get()
    {
        $auth = $this->session->userdata('CRUD_AUTH');
        
        if (empty($auth))
        {
            //http://stackoverflow.com/questions/22527412/403-forbidden-access-to-codeigniter-controller-from-ajax-request?rq=1
            //$send = array('token' => $this->security->get_csrf_hash()) + $array;

            $rs=array();
            //echo json_encode($this->jsondata->datawrapper($rs));

        }
        else
        {
            // if (!headers_sent()) {
            //     header('Cache-Control: no-cache, must-revalidate');
            //     header('Expires: ' . date('r'));
            //     header('Content-type: application/json');
            //     //exit(json_encode($send, JSON_FORCE_OBJECT));
            // }

            //$this->load->library("jsondata");
            $var = array();
            //$var['type'] = $type;
            $var['database_name'] = $this->db->database;
            $this->db->select('*');
            $this->db->from('crud_components');
            $query = $this->db->get();
            $rs = $query->result_array();
            echo json_encode($rs);
            	//$this->jsondata->datawrapper($rs));
        }

        
    }
}

?>