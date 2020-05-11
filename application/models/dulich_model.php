<?php
class dulich_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/*=============================================================================================*/
	public function allkhachhang()
	{
		return $this->db->get('KHACHHANG')->result_array();
	}
	public function countkhachhang()
	{
		$query1 = $this->db->query("SELECT * FROM KHACHHANG");
       return $query1;
	}
	public function insertkhachhang($dm=array())
	{
		$this->db->insert('KHACHHANG',$dm);
	}
	public function deletekhachhang($id)
	{
		$this->db->where("TAIKHOAN",$id);
		$this->db->delete('KHACHHANG');
	}
	public function updatekhachhang($id,$dm=array())
	{
		$this->db->where("TAIKHOAN",$id);
		$this->db->update('KHACHHANG',$dm);
	}	
	public function findkhachhang($id)
	{
		$this->db->where('TAIKHOAN',$id);
		return $this->db->get('KHACHHANG')->row();
	}
	/*=============================================================================================*/
	public function allnhanvien()
	{
		return $this->db->get('NHANVIEN')->result_array();
	}
	public function countnhanvien()
	{
		$query1 = $this->db->query("SELECT * FROM NHANVIEN");
       return $query1;
	}
	public function insertnhanvien($dm=array())
	{
		$this->db->insert('NHANVIEN',$dm);
	}
	public function deletenhanvien($id)
	{
		$this->db->where("MANHANVIEN",$id);
		$this->db->delete('NHANVIEN');
	}
	public function updatenhanvien($id,$dm=array())
	{
		$this->db->where("MANHANVIEN",$id);
		$this->db->update('NHANVIEN',$dm);
	}	
	public function findnhanvien($id)
	{
		$this->db->where('MANHANVIEN',$id);
		return $this->db->get('NHANVIEN')->row();
	}
	/*=============================================================================================*/
	public function allkhachsan()
	{
		return $this->db->get('KHACHSAN')->result_array();
	}
	public function countkhachsan()
	{
		$query1 = $this->db->query("SELECT * FROM KHACHSAN");
       return $query1;
	}
	public function insertkhachsan($dm=array())
	{
		$this->db->insert('KHACHSAN',$dm);
	}
	public function deletekhachsann($id)
	{
		$this->db->where("TENKHACHSAN",$id);
		$this->db->delete('KHACHSAN');
	}
	public function updatekhachsan($id,$dm=array())
	{
		$this->db->where("TENKHACHSAN",$id);
		$this->db->update('KHACHSAN',$dm);
	}	
	public function findkhachsan($id)
	{
		$this->db->where('TENKHACHSAN',$id);
		return $this->db->get('KHACHSAN')->row();
	}

	/*=============================================================================================*/
	public function allgiamgia()
	{
		return $this->db->get('GIAMGIA')->result_array();
	}
	public function countgiamgia()
	{
		$query1 = $this->db->query("SELECT * FROM GIAMGIA");
       return $query1;
	}
	/*=============================================================================================*/
	public function allphuongtien()
	{
		return $this->db->get('PHUONGTIEN')->result_array();
	}
	public function countphuongtien()
	{
		$query1 = $this->db->query("SELECT * FROM PHUONGTIEN");
       return $query1;
	}
	/*=============================================================================================*/
	public function alldangkytour()
	{
		return $this->db->get('DANGKYTOUR')->result_array();
	}
	public function countdangkytour()
	{
		$query1 = $this->db->query("SELECT * FROM DANGKYTOUR");
       return $query1;
	}
	public function insertdangkytour($dm=array())
	{
		$this->db->insert('DANGKYTOUR',$dm);
	}
	public function deletedangkytour($id)
	{
		$this->db->where("MATOUR",$id);
		$this->db->delete('DANGKYTOUR');
	}
	public function updatedangkytour($id,$dm=array())
	{
		$this->db->where("MATOUR",$id);
		$this->db->update('DANGKYTOUR',$dm);
	}	
	public function finddangkytour($id)
	{
		$this->db->where('MATOUR',$id);
		return $this->db->get('DANGKYTOUR')->row();
	}
	/*=============================================================================================*/
	public function alltour()
	{
		return $this->db->get('TOUR')->result_array();
	}
	public function counttour()
	{
		$query1 = $this->db->query("SELECT * FROM TOUR");
       return $query1;
	}
	public function findtour($id)
	{
		$this->db->where('MATOUR',$id);
		return $this->db->get('TOUR')->row();
	}
	public function findtour6()
	{
		$this->db->order_by("MATOUR","desc");
		$this->db->limit(6,0);
		return $this->db->get('TOUR')->result_array();
	}
	/*=============================================================================================*/
	public function alltinhthanh()
	{
		return $this->db->get('TINH_TP')->result_array();
	}
	public function counttinhthanh()
	{
		$query1 = $this->db->query("SELECT * FROM TINH_TP");
       return $query1;
	}
	/*=============================================================================================*/
	public function loginnhanvien($username,$password) 
    {
        $this->db->select('MANHANVIEN, MATKHAU');
        $this->db->from('NHANVIEN');
        $this->db->where('MANHANVIEN', $username);
        $this->db->where('MATKHAU',$password);
        $this->db->limit(1);
        $query = $this->db->get();           
        if($query->num_rows()==1)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
   	} 
   	public function loginkhachhang($username,$password) 
    {
        $this->db->select('TAIKHOAN, MATKHAU');
        $this->db->from('KHACHHANG');
        $this->db->where('TAIKHOAN', $username);
        $this->db->where('MATKHAU',$password);
        $this->db->limit(1);
        $query = $this->db->get();           
        if($query->num_rows()==1)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
   	}               
}
?>