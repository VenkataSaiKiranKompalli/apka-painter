<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dompdf_test extends CI_Controller {
 
    /**
     * Example: DOMPDF 
     *
     * Documentation: 
     * http://code.google.com/p/dompdf/wiki/Usage
     *
     */
    function index() {   
        // Load all views as normal
        //$dompdf->set_option('isHtml5ParserEnabled', true);
        $this->load->view('welcome_message');
        // Get output html
        $html = $this->output->get_output();
         
        // Load library
        $this->load->library('dompdf_gen');
         
        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
        //or without preview in browser
        //$this->dompdf->stream("welcome.pdf");
    }
}