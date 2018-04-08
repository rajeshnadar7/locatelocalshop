<?php 

class Admin_product extends CI_Model
{
	function skucheck($sku)
	{
		 $query = $this->db->get_where('catalog_product',array('sku'=> $sku));
		 $rowcount = $query->num_rows();
		 if($rowcount){
		 	return true;
		 }else{
		 	return false;
		 }
	}
 
	function addproduct($data)
	{
		if(!$this->skucheck($data['sku']) && $this->session->userdata("admin")['user_id'] ){
		$query = $this->db->insert('catalog_product',$data);
		$affected_rows = $this->db->affected_rows();
			if($affected_rows){
				return true;
			}
			else
			{
			 	return false;
			}	
		}
		else
		{
			return false;
		} 

	}

	function updateproduct($data)
	{
		if($this->skucheck($data['sku']) && $this->session->userdata("admin")['user_id'] ){
		  $this->db->where('sku', $data['sku']);		  
		  $query = $this->db->update('catalog_product',$data);
		  $affected_rows = $this->db->affected_rows();
			if($affected_rows){
				return true;
			}
			else
			{
			 	return false;
			}	
		}
		else
		{
			return false;
		} 

	}

	function deleteproduct($data)
	{
		if($this->session->userdata("admin")['user_id'] ){
		  $this->db->where('entity_id', $data);		  
		  $query = $this->db->delete('catalog_product');
		  $affected_rows = $this->db->affected_rows();
			if($affected_rows){
				return true;
			}
			else
			{
			 	return false;
			}	
		}
		else
		{
			return false;
		} 

	}


}

?>