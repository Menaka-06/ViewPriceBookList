<?php 
class Pricebook_model extends CI_Model{

	public function GetPriceBookList($limit,$start){
        $this->db->select('*')->from('tbl_pricebook');
        $this->db->limit($limit,$start);
        $this->db->order_by('id','desc');
        return $this->db->get()->result();
    }
    public function ViewPriceBookListById($id){
        return $this->db->where(array('pricebookId'=>$id))->get('tbl_pricebook_list')->result();
    
    }
    
}