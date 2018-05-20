<?php
	
	Class dbora
	{
		
		function connect($strUser,$strPassword,$strTns)
		{
				$this->objConnect = oci_connect($strUser,$strPassword,$strTns);
		}

		/**** function commit record ****/
        
		function Commit()
		{
				return oci_commit($this->objConnect); 
		}

		/**** function rollback record ****/
        
		function RollBack()
		{
				return oci_rollback($this->objConnect); 
		}

		/**** function insert record ****/
        
		function InsertRecord()
		{
				$strSQL = "INSERT INTO $this->strTable ($this->strField) VALUES ($this->strValue) ";
				$objParse = oci_parse($this->objConnect, $strSQL);
				$objExecute = oci_execute($objParse, OCI_DEFAULT);
				if($objExecute)
				{
					$this->Commit();
				}
				else
				{
					$this->RollBack();
				}
				return $objExecute;
		}

		/**** function select record ****/
        
		function SelectRecord()
		{
				$strSQL = "SELECT * FROM $this->strTable WHERE $this->strCondition ";
				$objParse = oci_parse($this->objConnect, $strSQL);
				oci_execute($objParse, OCI_DEFAULT);
				return oci_fetch_array($objParse);
		}
##################### not use for me ######################

		/**** function update record (argument) ****/
        
		/*function UpdateRecord($strTable,$strCommand,$strCondition)
		{
				$strSQL = "UPDATE $strTable SET  $strCommand WHERE $strCondition ";
				$objParse = oci_parse($this->objConnect, $strSQL);
				$objExecute = oci_execute($objParse, OCI_DEFAULT);
				if($objExecute)
				{
					$this->Commit();
				}
				else
				{
					$this->RollBack();
				}
				return $objExecute;
		}*/

		/**** function delete record ****/
        
	/*	function DeleteRecord()
		{
				$strSQL = "DELETE FROM $this->strTable WHERE $this->strCondition ";
				$objParse = oci_parse($this->objConnect, $strSQL);
				$objExecute = oci_execute($objParse, OCI_DEFAULT);
				if($objExecute)
				{
					$this->Commit();
				}
				else
				{
					$this->RollBack();
				}
				return $objExecute;
		}*/

		/*** end class auto disconnect ***/
        
		/*function __destruct() {
				return oci_close($this->objConnect);
	    }
	    */
	}			
?>
