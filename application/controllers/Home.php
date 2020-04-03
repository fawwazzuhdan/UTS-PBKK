<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('supplier_model');
		$this->load->model('pelanggan_model');
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->model('penjualan_model');
		$this->load->library('session');


		// Check Session Login
		if (!isset($_SESSION['logged_in'])) {
			if ($this->session->userdata('logged_in') != true) {
				echo "session is not set";
				//echo $this->session->set_userdata('user_id');
			} else {
				echo "session is set";
			}
			redirect(site_url('auth/login'));
		}
	}

	function index()
	{
		redirect(site_url('home/dashboard'));
	}

	function dashboard()
	{
		$data['suppliers'] = $this->supplier_model->count_total();
		$data['customers'] = $this->pelanggan_model->count_total();
		$data['products'] = $this->produk_model->count_total();
		$data['categories'] = $this->kategori_model->count_total();
		$data['penjualan_harian'] = $this->penjualan_daily();
		$data['penjualan_bulanan'] = $this->penjualan_daily(true);
		$this->load->view('home/dashboard', $data);
	}

	private function penjualan_daily($bulanan = false)
	{
		$today = date("Y-m-d", strtotime("today"));
		$yesterday = date("Y-m-d", strtotime("-1 day"));
		if ($bulanan) {
			$yesterday = date("Y-m-d", strtotime("-30 day"));
		}

		$filter['DATE(sales_transaction.date) >='] = $yesterday;
		$filter['DATE(sales_transaction.date) <='] = $today;

		$penjualans = $this->penjualan_model->get_filter($filter, url_param());
		return $penjualans;
	}
}
