<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {
	public function getCountries()
	{
		$countries=$this->db->get('country')->result_array();
		// echo "<pre>";
		// print_r($countries);
		// echo "</pre>";exit;
		return $countries;
		# code...
	}
	public function getStatesOfCountry($country_id)
	{
		$this->db->where('countryid', $country_id);
		$states=$this->db->get('state')->result_array();
		
		return $states;
		# code...
	}
	public function getCitiesOfState($state_id)
	{
		$this->db->where('stateid', $state_id);
		$cities=$this->db->get('city')->result_array();
		
		return $cities;
		# code...
	}
	public function saveUserData($formData)
	{
		$this->db->insert('admins', $formData);
		# code...
	}
	public function updateUserData($formData,$id)
	{
		$this->db->where('id', $id);

		$this->db->update('admins', $formData);
		# code...
	}
	
	public function getUsers()
	{
		$this->db->select('admins.*, country.country as country_name,state.statename as state_name, city.city as city_name');
		
		$this->db->join('country', 'country.countryid = admins.country_id ', 'left');
		$this->db->join('state', 'state.id = admins.state_id ', 'left');
		$this->db->join('city', 'city.id = admins.city_id ', 'left');
		$query=$this->db->get('admins');
		$users=$query->result_array();
		// echo $this->db->last_query();
		// print_r($users);exit;
		return $users;
		# code...
	}public function getUser($id)
	{
		$this->db->where('id', $id);
		$users=$this->db->get('users')->row_array();
		return $users;
		# code...
	}
	

	

}

/* End of file Common_model.php */
/* Location: ./application/models/Common_model.php */