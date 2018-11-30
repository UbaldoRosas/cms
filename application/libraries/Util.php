<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Util
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function has_logged($var = 'default')
	{	

		if($var == 'default')
		{
			if(!$this->ci->session->userdata('logged'))
				redirect(base_url(),'refresh');
        }
        
		if($var == 'post')
		{
			if(!$_POST)
				redirect(base_url(),'refresh');
			if(!$this->ci->session->userdata('logged'))
				redirect(base_url(),'refresh');
        }
        
		if($var == 'log')
		{
			if($this->ci->session->userdata('logged'))
				redirect(base_url().'dashboard','refresh');
        }
        
		if($var == 'admin')
		{
			if(!$this->ci->session->userdata('logged'))
				redirect(base_url(),'refresh');
			if($this->ci->session->userdata('nivel') === 'user')
				redirect(base_url().'dashboard','refresh');
        }
        
	}

}

/* End of file Util.php */
