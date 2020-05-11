<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{
	private $b_Check = false;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','session'));	
		$this->load->model(array('dulich_model'));
	}
	public function login()
	{
		$data['title']='Đăng nhập';
		$this->load->view('page/login',$data);
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
    	redirect('main/home');
	}
	public function checklogin()
	{
		$username = $this->input->post('username');
       	$password = $this->input->post('password');
        $query = $this->dulich_model->loginkhachhang($username,$password);
            if($query)
            {
                foreach($query as $row)
                {
                    $newdata = array('username' => $username);
                    $this->session->set_userdata($newdata);              
                    
                }
                redirect('main/home');
            }
            else
	        {
	            return false;   
	        }    
	}
	public function register()
	{
		$data['title']='Đăng ký';
		$this->load->view('page/register',$data);
	}
	public function home()
	{
		if($this->session->userdata('username')!='')
		{
			$danhdau['home']='active';
			$data['dsdm1']=$this->dulich_model->allkhachsan();
			$data['dsdm2']=$this->dulich_model->findtour6();
			$giaodien['header']=$this->load->view('home/header_2',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/main',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$danhdau['home']='active';
			$data['dsdm1']=$this->dulich_model->allkhachsan();
			$data['dsdm2']=$this->dulich_model->findtour6();
			$giaodien['header']=$this->load->view('home/header',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/main',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
	public function dangkytour($id)
	{
		if($this->session->userdata('username')!='')
		{
			$data['data']=$this->dulich_model->findtour($id);
			$this->load->view('page/dangkytour_view',$data);
		}
		else
		{
			echo 1;
			return false;
		}
	}
	public function tour()
	{
		if($this->session->userdata('username')!='')
		{
			$danhdau['tour']='active';
			$data['dsdm']=$this->dulich_model->alltour();
			$giaodien['header']=$this->load->view('home/header_2',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/tour',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$danhdau['tour']='active';
			$data['dsdm']=$this->dulich_model->alltour();
			$giaodien['header']=$this->load->view('home/header',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/tour',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
	public function xuly_dangkytour()
	{
		$dm=array
		(
			'TAIKHOAN'=>$this->input->post('makhachhang'),
			'MATOUR'=>$this->input->post('matour'),
			'PHUONGTHUCTHANHTOAN'=>$this->input->post('phuongthuc'),
		);
		$this->dulich_model->insertdangkytour($dm);
		redirect("main/home");
	}
	public function gallery()
	{
		if($this->session->userdata('username')!='')
		{
			$danhdau['gallery']='active';
			$giaodien['header']=$this->load->view('home/header_2',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/gallery',NULL,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$danhdau['gallery']='active';
			$giaodien['header']=$this->load->view('home/header',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/gallery',NULL,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
public function contact()
	{
		if($this->session->userdata('username')!='')
		{
			$danhdau['gallery']='active';
			$giaodien['header']=$this->load->view('home/header_2',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/contact',NULL,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$danhdau['gallery']='active';
			$giaodien['header']=$this->load->view('home/header',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/gallery',NULL,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
	public function chitiettour($id)
	{
		if($this->session->userdata('username')!='')
		{
			$danhdau['']='active';
			$data['data']=$this->dulich_model->findtour($id);
			$giaodien['header']=$this->load->view('home/header_2',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/chitiettour_view',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$danhdau['']='active';
			$data['data']=$this->dulich_model->findtour($id);
			$giaodien['header']=$this->load->view('home/header',$danhdau,TRUE);
			$giaodien['footer']=$this->load->view('home/footer',NULL,TRUE);
			$giaodien['body']=$this->load->view('page/chitiettour_view',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
}