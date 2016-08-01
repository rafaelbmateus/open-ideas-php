<?php defined ('BASEPATH') or exit ('No direct script access allowed');

class Api extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
	}
  public function index() {
		$this->data['result'] = $this->call('GET', 'http://www.openideas.com.br:3000/api/v1/users');
    $this->load->view('result_api', $this->data);
  }

  // Method: POST, PUT, GET etc
  // Data: array("param" => "value") ==> index.php?param=value
  function call($method, $url, $data = false){
      $curl = curl_init();

      if ($method == "POST") {
        curl_setopt($curl, CURLOPT_POST, 1);
        if ($data) {
          curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
      }elseif ($method == 'PUT') {
        curl_setopt($curl, CURLOPT_PUT, 1);
      }else{
        if ($data) {
          $url = sprintf("%s?%s", $url, http_build_query($data));
        }
      }

      // Optional Authentication:
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($curl, CURLOPT_USERPWD, "username:password");

      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

      $result = curl_exec($curl);
      curl_close($curl);

      return $result;
  }
}
