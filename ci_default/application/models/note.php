<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model 
{
	public function all()
	{
		return $this->db->query('SELECT * FROM posts')->result_array();
	}

	public function create($note)
	{
		$query = "INSERT INTO posts (post, created_at, updated_at) 
				 VALUES (?, NOW(),NOW())";
		$values = array($note['note']);
		return $this->db->query($query, $values);
	}
}
