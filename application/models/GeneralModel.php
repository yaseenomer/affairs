<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class GeneralModel extends CI_Model {
    public function fillDrop($table , $key , $display , $params , $msg='', $sel='' , $fl=0)
	{
		 $myoptions = "<option value=''>".$msg."</option>";
		 $this->db->select($key.','.$display);
		if($fl === 0)
		foreach($params as $k => $value)
		{
			  $this->db->where($k,$value);
		}
		else
		$this->db->where($params[0]);
		
		$result = $this->db->get($table)->result();
		foreach($result as $r)
		{
			if( $sel == $r->$key )
			$myoptions.="<option value=".$r->$key." selected='true'>".$r->$display."</option>";
			else
			$myoptions.="<option value=".$r->$key.">".$r->$display."</option>";
		}
		return $myoptions;
	}
	
	public function getEmps($colid){
		$this->db->where('COL_NO' , $colid);
		$res = $this->db->get('EMPLOYEES_DETAILS')->result();
		$myoptions = "<option value=''>اختر الموظف</option>";
		foreach($res as $r ){
			$display = iconv('windows-1256', 'utf-8' , $r->EMP_NAME);
			$myoptions.="<option value=".$r->EMP_NO.">".$display."</option>";
		}
		return $myoptions;
	}
	
	public function getCollege($colid){
		$this->db->where('LOC_NO', $colid);
		return $this->db->get('LOCATION_TYP')->row();
	}
	
	
}