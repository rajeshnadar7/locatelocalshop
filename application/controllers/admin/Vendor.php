<?php 

class Vendor extends CI_Controller
{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/admin_vendor');
        $this->load->helper('url_helper');
    }

    public function vendorregister()
	{
	  $data=$this->input->post();
	  $result=array();
	  if(!empty($data))
	  {

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[vendor.email]');
        $this->form_validation->set_rules('mobile', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('address_1', 'Address 1', 'required');
        $this->form_validation->set_rules('address_2', 'Address 2', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('display_name', 'Display Name', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode ', 'required|regex_match[/^[0-9]{6}$/]');
        $this->form_validation->set_rules('category', 'Category ', 'required');

       	  if ($this->form_validation->run() == TRUE){
       	  	   unset($data['password_conf']);
		  	  	if($this->admin_vendor->vendorregister($data))
			  	{
			  		$result['status']=1;
			  	}
			  	else
			  	{
			  		$result['status']=0;
			  	}
		  }
		  else
  	 	 {
	  		$result['status']=validation_errors();
	     }
	  }	
	  else
	  {
	  	$result['status']=2;
	  }	
	  echo json_encode($result);
	  exit;
	}

	public function vendorprofileupdate()
	{

	  $data=$this->input->post();
	  $result=array();
	  if(!empty($data))
	  {

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('address_1', 'Address 1', 'required');
        $this->form_validation->set_rules('address_2', 'Address 2', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode ', 'required|regex_match[/^[0-9]{6}$/]');
        $this->form_validation->set_rules('display_name', 'Display Name', 'required');
        $this->form_validation->set_rules('category', 'Category ', 'required');
       	if ($this->form_validation->run() == TRUE){
		  	  	if($this->admin_vendor->vendorprofileupdate($data))
			  	{
			  		$result['status']=1;
			  	}
			  	else
			  	{
			  		$result['status']=0;
			  	}
		}
	    else
  	 	{
	  		$result['status']=validation_errors();
	    }
	  }	
	  else
	  {
	  	$result['status']=2;
	  }	
	  echo json_encode($result);
	  exit;
	

	}

	public function vendorprofiledelete()
	{
	   $data=$this->uri->segment(5);
	  $result=array();
	  if(!empty($data))
	  {

    	  	if($this->admin_vendor->vendorprofiledelete($data))
		  	{
		  		$result['status']=1;
		  	}
		  	else
		  	{
		  		$result['status']=0;
		  	}
	
	  }	
	  else
	  {
	  	$result['status']=2;
	  }	
	  echo json_encode($result);
	  exit;
	

	}

}

?>