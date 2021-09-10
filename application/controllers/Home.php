<?php 

	class Home extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->load->library('unit_test');
			//START
			$this->unit->active(TRUE);
			
			$result = $this->login("logesh","12345");
			
			$expected_result = true;

			$test_name = "Login Process";

			$this->unit->use_strict(TRUE);

			echo $this->unit->run($result,$expected_result,$test_name,'this login works only for me');
			//END

			$this->load->view('home_view');
		}

		public function login($username,$password){
			if($username=="logesh"&&$password=="12345"){
				return true;
			}else{
				return false;
			}
		}


	}
