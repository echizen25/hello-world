<?php


	class Helloworld extends CI_Controllers{


		
		function index()
		{

			$this->load->model('helloworld_model');

			$data['result'] = $this->helloworld_model-><span class="sql">getData</span>();
			$data['page_title'] = "HELLO WORLD!";

			$this->load->view('helloworld_view',$data);

			}


		}

	?>