<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));	
		$this->load->model(array('dulich_model'));
		$this->load->library('image_lib');
	}
	function login()
	{
		$this->load->view('admin/login_admin');
	}
	function check_login() 
	{          
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $query = $this->dienthoai_model->loginnhanvien($username,md5($password));
            if ($query>0)
            {
                foreach($query as $row)
                {
                    $newdata = array
                    (
                    	'username' => $username,
                    	'password' => $password
                    );
                    $this->session->set_userdata($newdata);              
                    redirect('admin/dashboard');
                }
            }
            else
	        {
	           echo "<script> alert('Đăng nhập không thành công');</script>";
	           echo "<script> window.location.href='../admin/login';</script>";
	        }            
    } 
    function logout()
    {
    	$this->session->unset_userdata('username');
    	redirect('admin/login');
    }
	public function banner()
	{
		if($this->session->userdata('username')!='')
		{
			$data['banner']='active';
			$giaodien['query1']=$this->dulich_model->countnhanvien();
			$giaodien['query2']=$this->dulich_model->countkhachhang();
			$giaodien['query3']=$this->dulich_model->counttour();
			$giaodien['query']=$this->dulich_model->countdangkytour();
			$giaodien['query4']=$this->dulich_model->countkhachsan();
			$giaodien['query5']=$this->dulich_model->countgiamgia();
			$giaodien['query6']=$this->dulich_model->countphuongtien();
			$giaodien['query7']=$this->dulich_model->counttinhthanh();
			$giaodien['subview']=$this->load->view('admin/banner_view',$data,TRUE);
			$this->load->view('admin/main_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function nhanvien()
	{
		if($this->session->userdata('username')!='')
		{
			$data['nhanvien']='active';
			$data['ds']=$this->dulich_model->allnhanvien();
			$giaodien['query1']=$this->dulich_model->countnhanvien();
			$giaodien['query2']=$this->dulich_model->countkhachhang();
			$giaodien['query3']=$this->dulich_model->counttour();
			$giaodien['query']=$this->dulich_model->countdangkytour();
			$giaodien['query4']=$this->dulich_model->countkhachsan();
			$giaodien['query5']=$this->dulich_model->countgiamgia();
			$giaodien['query6']=$this->dulich_model->countphuongtien();
			$giaodien['query7']=$this->dulich_model->counttinhthanh();
			$giaodien['subview']=$this->load->view('admin/nhanvien_view',$data,TRUE);
			$this->load->view('admin/main_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function khachhang()
	{
		if($this->session->userdata('username')!='')
		{
			$data['khachhang']='active';
			$data['ds']=$this->dulich_model->allkhachhang();
			$giaodien['query1']=$this->dulich_model->countnhanvien();
			$giaodien['query2']=$this->dulich_model->countkhachhang();
			$giaodien['query3']=$this->dulich_model->counttour();
			$giaodien['query']=$this->dulich_model->countdangkytour();
			$giaodien['query4']=$this->dulich_model->countkhachsan();
			$giaodien['query5']=$this->dulich_model->countgiamgia();
			$giaodien['query6']=$this->dulich_model->countphuongtien();
			$giaodien['query7']=$this->dulich_model->counttinhthanh();
			$giaodien['subview']=$this->load->view('admin/khachhang_view',$data,TRUE);
			$this->load->view('admin/main_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function themkhachhang()
	{ 
		$this->load->view('admin/khachhang_view_them');
	}
	public function xoakhachhang($dm)
	{
		$this->dulich_model->deletekhachhang($dm);
		redirect("admin/khachhang");
	}
	public function suakhachhang($dm)
	{
		
		$data['data']=$this->dulich_model->findkhachhang($dm);
		$this->load->view('admin/khachhang_view_sua',$data);
	}
	public function xuly_suakhachhang()
	{
		$id=$this->input->post('username');
		$data=array
		(
			'MATKHAU'=>$this->input->post('password'),
			'TENKHACHHANG'=>$this->input->post('tenkhachhang'),
			'DIACHI'=>$this->input->post('diachi'),
			'GIOITINH'=>$this->input->post('gioitinh'),
		);
		$this->dulich_model->updatekhachhang($id,$data);
		redirect("admin/khachhang");
	}
	public function xuly_themkhachhang()
	{
		$dm=array
		(
			'TAIKHOAN'=>$this->input->post('username'),
			'MATKHAU'=>$this->input->post('password'),
			'TENKHACHHANG'=>$this->input->post('tenkhachhang'),
			'DIACHI'=>$this->input->post('diachi'),
			'GIOITINH'=>$this->input->post('gioitinh'),
		);
		$this->dulich_model->insertkhachhang($dm);
		redirect("admin/khachhang");
	}
	public function dulich()
	{
		if($this->session->userdata('username')!='')
		{
			$data['dulich']='active';
			$data['ds']=$this->dulich_model->alltour();
			$giaodien['query1']=$this->dulich_model->countnhanvien();
			$giaodien['query2']=$this->dulich_model->countkhachhang();
			$giaodien['query3']=$this->dulich_model->counttour();
			$giaodien['query']=$this->dulich_model->countdangkytour();
			$giaodien['query4']=$this->dulich_model->countkhachsan();
			$giaodien['query5']=$this->dulich_model->countgiamgia();
			$giaodien['query6']=$this->dulich_model->countphuongtien();
			$giaodien['query7']=$this->dulich_model->counttinhthanh();
			$giaodien['subview']=$this->load->view('admin/dulich_view',$data,TRUE);
			$this->load->view('admin/main_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function dangkydulich()
	{
		if($this->session->userdata('username')!='')
		{
			$data['dangkydulich']='active';
			$data['ds']=$this->dulich_model->alldangkytour();
			$giaodien['query1']=$this->dulich_model->countnhanvien();
			$giaodien['query2']=$this->dulich_model->countkhachhang();
			$giaodien['query3']=$this->dulich_model->counttour();
			$giaodien['query']=$this->dulich_model->countdangkytour();
			$giaodien['query4']=$this->dulich_model->countkhachsan();
			$giaodien['query5']=$this->dulich_model->countgiamgia();
			$giaodien['query6']=$this->dulich_model->countphuongtien();
			$giaodien['query7']=$this->dulich_model->counttinhthanh();
			$giaodien['subview']=$this->load->view('admin/dangkydulich_view',$data,TRUE);
			$this->load->view('admin/main_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function khachsan()
	{
		if($this->session->userdata('username')!='')
		{
			$data['khachsan']='active';
			$data['ds']=$this->dulich_model->allkhachsan();
			$giaodien['query1']=$this->dulich_model->countnhanvien();
			$giaodien['query2']=$this->dulich_model->countkhachhang();
			$giaodien['query3']=$this->dulich_model->counttour();
			$giaodien['query']=$this->dulich_model->countdangkytour();
			$giaodien['query4']=$this->dulich_model->countkhachsan();
			$giaodien['query5']=$this->dulich_model->countgiamgia();
			$giaodien['query6']=$this->dulich_model->countphuongtien();
			$giaodien['query7']=$this->dulich_model->counttinhthanh();
			$giaodien['subview']=$this->load->view('admin/khachsan_view',$data,TRUE);
			$this->load->view('admin/main_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function giamgia()
	{
		if($this->session->userdata('username')!='')
		{
			$data['giamgia']='active';
			$data['ds']=$this->dulich_model->allgiamgia();
			$giaodien['query1']=$this->dulich_model->countnhanvien();
			$giaodien['query2']=$this->dulich_model->countkhachhang();
			$giaodien['query3']=$this->dulich_model->counttour();
			$giaodien['query']=$this->dulich_model->countdangkytour();
			$giaodien['query4']=$this->dulich_model->countkhachsan();
			$giaodien['query5']=$this->dulich_model->countgiamgia();
			$giaodien['query6']=$this->dulich_model->countphuongtien();
			$giaodien['query7']=$this->dulich_model->counttinhthanh();
			$giaodien['subview']=$this->load->view('admin/giamgia_view',$data,TRUE);
			$this->load->view('admin/main_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function phuongtien()
	{
		if($this->session->userdata('username')!='')
		{
			$data['phuongtien']='active';
			$data['ds']=$this->dulich_model->allphuongtien();
			$giaodien['query1']=$this->dulich_model->countnhanvien();
			$giaodien['query2']=$this->dulich_model->countkhachhang();
			$giaodien['query3']=$this->dulich_model->counttour();
			$giaodien['query']=$this->dulich_model->countdangkytour();
			$giaodien['query4']=$this->dulich_model->countkhachsan();
			$giaodien['query5']=$this->dulich_model->countgiamgia();
			$giaodien['query6']=$this->dulich_model->countphuongtien();
			$giaodien['query7']=$this->dulich_model->counttinhthanh();
			$giaodien['subview']=$this->load->view('admin/phuongtien_view',$data,TRUE);
			$this->load->view('admin/main_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function tinhthanh()
	{
		if($this->session->userdata('username')!='')
		{
			$data['tinhthanh']='active';
			$data['ds']=$this->dulich_model->alltinhthanh();
			$giaodien['query1']=$this->dulich_model->countnhanvien();
			$giaodien['query2']=$this->dulich_model->countkhachhang();
			$giaodien['query3']=$this->dulich_model->counttour();
			$giaodien['query']=$this->dulich_model->countdangkytour();
			$giaodien['query4']=$this->dulich_model->countkhachsan();
			$giaodien['query5']=$this->dulich_model->countgiamgia();
			$giaodien['query6']=$this->dulich_model->countphuongtien();
			$giaodien['query7']=$this->dulich_model->counttinhthanh();
			$giaodien['subview']=$this->load->view('admin/tinhthanh_view',$data,TRUE);
			$this->load->view('admin/main_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	} 
}
?>