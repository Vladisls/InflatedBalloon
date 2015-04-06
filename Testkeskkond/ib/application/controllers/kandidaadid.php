<?php
class kandidaadid extends CI_Controller {
	public function index() {
		echo "Hello world";
		$this->load->model("kandidaadid_model");
		$kandidaadid = $this->kandidaadid_model->get_kandidaadid();
		$data["Kandidaadid"] = $kandidaadid;
		$this->load->view('kandidaadid/index', $data);
	}
	public function view() {
		echo "hello world";
	}
}