<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =UTF-8');

class Collages_mod extends CI_Model
{
	private $another;
  function __construct()
  {
    parent::__construct();
    $this->another = $this->load->database('acc',TRUE);
  }
public function getCollage()
    {
      $query = $this->another->get('LOCATION_TYP');
	  if($query->num_rows()>0)
    {
		return $query->result();
    }
    else
    {
      return FALSE;
    }
	$this->another->close();
	}
public function getCollageWhere($id)
    {
        $this->another->where('LOC_NO', $id);
        $query = $this->another->get('LOCATION_TYP');
	if($query->num_rows()>0)
    {
		return $query->result();
    }
    else
    {
      return FALSE;
    }
	$this->another->close();
    }
}