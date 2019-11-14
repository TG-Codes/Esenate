<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {



	 function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->helper('form', 'url');
        $this->load->library('session');
        $this->load->helper('download');

    }


	// This handles the pages
	public function view ($page = 'home')
	{
		if( !file_exists('application/views/'.$page.'.php'))
		{
			show_404();
		}
		
		$this->load->view('menu');
		$this->load->view($page);
		
	}

	// verify payments
	public function verify ()
	{

		$result = array();

		$reference = $_POST['reference'];
		$email = $_POST['email'];
		$amount = $_POST['amount'] / 100 ;
		//$trxn_key = md5( $reference . time() . $email . rand() );

		$customers['reference']  = $_POST['reference'];
		$customers['email']  = $_POST['email'];
		$customers['amount']  = $_POST['amount'] /100 ;
		$customers['count'] = 1;
		$customers['trxn_key'] = $reference;

		$url = 'https://api.paystack.co/transaction/verify/'.$reference;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt(
		  $ch, CURLOPT_HTTPHEADER, [
		    'Authorization: Bearer '.PAYSTACK_SECRET_KEY]
		);
		$request = curl_exec($ch);
		if(curl_error($ch)){
		 echo 'error:' . curl_error($ch);
		 }
		curl_close($ch);

		if ($request) {
		  $result = json_decode($request, true);
		}

		if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {
			// insert into the db
			$query = $this->Home_model->insert($customers);

		  if ($query) 
		  {
		  		$response = array('status' => 'success',
						   'transaction_key' => $trxn_key
						    );
		      //$response['status'] = 'success';
		      //$response['transaction_key'] = $trxn_key;
		  }
		  else 
		  {
		    $response['status'] = 'Unable to add to the Db';
		  }

		}else{
			$response['status'] = 'Error';
		}

		echo json_encode($response);

	}

	// download file from the server with encryption 

	public function download () {

		$trxn_key = $_GET['cvbs'];

		//verify the transaction reference
		if ($query = $this->Home_model->check_key($trxn_key)) {
			
			$fetch = $this->Home_model->fetch($trxn_key);
			$count = $fetch[0]->count;

			if ($count == 1) {
				// update 
				$update = $this->Home_model->update($trxn_key);

				// request download 
				if ($update == TRUE) {
					
					$data = file_get_contents("/home/gpelema/public_html/download/50_Betting_secrets_full_version.pdf"); // Read the file's contents
					//$name = 'readme.txt';

					force_download('The_bet_strategies_full_version.pdf', $data);
				}
				else{

					$response['status'] = 'Unable to Download';		
				}

			}
			else{
				$response['status'] = 'Your Download link has expired.';
				
			}

		}
		else {
				$response['status'] = 'Download key not valid.';
		}

		echo json_encode($response);

		redirect(base_url());

	}

	// free copy dwonload
	public function free_copy()
	{
	    $data = file_get_contents("/home/gpelema/public_html/download/50_Betting_secrets_free_version.pdf"); // Read the file's contents
		force_download('The_bet_strategies_free_version.pdf', $data);
	}

}
