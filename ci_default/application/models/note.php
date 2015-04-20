<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model 
{
	public function all()
	{
		return $this->db->query('SELECT * FROM posts')->result_array();
	}
	// I can't figure out why this method is inserting multiple rows
	// upon submitting the form a few times...
	public function create($note)
	{
		$query = "INSERT INTO posts (post, created_at, updated_at) 
				 VALUES (?, NOW(),NOW())";
		$values = array($note['note']);
		return $this->db->query($query, $values);
	}
}
