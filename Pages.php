<?php
class Pages extends CI_Controller{
	public function view($page='home')
	{
		 if ( ! file_exists(APPPATH.'views/'.$page.'.php'))

		{
			echo 'not found';
			show_404();
		}
		$data['title']=ucfirst($page);//capitaliz the first letter
		$this->load->view('templates/header',$data);
		$this->load->view($page,$data);
		$this->load->view('templates/footer',$data);
	}
}
?>