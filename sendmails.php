<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sendmails extends CI_Controller {

     function index()
{
    $this->load->view('input');
    
}
    function check()
{
    $this->load->library('email');
    $this->load->helper('path');
    $name = $this->input->post('name');
    $toemail =  $this->input->post('toemail');
    $fromemail =  $this->input->post('fromemail');
    $one = $this->input->post('one');
    
    $this->load->library('email');
    $this->email->from($fromemail,$name);
    $this->email->to($toemail);
    $this->email->subject('Test');
    $this->email->message($one);
     //$path = set_realpath('C:\Users\lenovo\Downloads');
    //$this->email->attach($path . 'arduino_notebook_v1-1.pdf');
    if ($this->email->send())
        echo "Mail Sent!";
    else
        echo "There is error in sending mail!";
}
}
?>