<?php
class user_Model extends   Model{
	public $table="users";
	public function __construct(){
		 parent::__construct();
    }
	public function login(){
		$user=$_POST['user'];
		$pass=md5($_POST['password']);
		$where=array('user_name'=>$user,'pass'=>$pass);
		$this->select($this->table,$where);
		if($this->num_rows()==0){
         return false;
		}else{
		return true;
		}	
	}
	public function getListRole(){

		$this->select('roles');
		if($this->num_rows()==0)
		{
			return '';
		}
		return $this->result;
	}

	public function getListAccount(){

		$this->select($this->table);
		if($this->num_rows()==0)
		{
			return '';
		}
		return $this->result;
	}
	public function  delete($id)
	{

		$sql= "Delete from users where id=$id";

		$this->query($sql);
		if(mysql_affected_rows() <=0)
		{
			return false;
		}
		echo $sql; die();
		return true;
	}
}
?>