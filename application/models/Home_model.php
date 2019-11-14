<?php

class Home_model extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // insert verified payments
    public function insert ($customers)
    {
    	return $this->db->insert('customers', $customers);
    }

    // check transaction key
	public function check_key($trxn_key){

	$condition = "trxn_key = ". "'" . $trxn_key ."'";
	$this->db->select('*');
	$this->db->from('customers');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() ==1) {
		return TRUE;
	}else{
		return FALSE;
		}
	}

	// fetch number of download

	public function fetch ($trxn_key) {
		$condition = "trxn_key = ". "'" . $trxn_key ."'";
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() ==1) {
			return $query->result();
		}else{
			return FALSE;
			}
	}

	// update
	public function update ($trxn_key) {
		$condition = "trxn_key = ". "'" . $trxn_key ."'";
		$this->db->set('count','0 ');
		$this->db->where($condition);
		$this->db->update('customers');

		if ($this->db->affected_rows() > 0)
			{
			  return TRUE;
			}
			else
			{
			  return FALSE;
			}
	}
}
?>