<?php
class Model{
	public $conn;
	public  $result;
	//public static $data;
	public $data;
	//Theo tu hieu
	//Thi nhung bien $this->connn, or result. Thi nieu thay vi declare tren dau thi cung
	//co the su dung truc tiep goi trong cau lenh, luc do nhung bien nay giong nhu bien toan cuc
	//Nen gio declare tren dau de de nhin
    public function __construct(){//kết nối

		$this->conn=mysql_connect(__HOST,__USER,__PASS) or die ("Không thể kết nối server");
		mysql_select_db(__DB_NAME,$this->conn) or die("Không thể kết nối CSDL News");
		mysql_query("set names 'utf8'");
}
	public function disconnect(){//ngắt kết nối
		if($this->conn){
			@mysql_close($this->conn);
		}
	}
	public function query($sql){//truy vấn
		$this->result=mysql_query($sql,$this->conn);
	}
	public function num_rows(){//đếm số dòng trả về từ câu lệnh truy vấn
		if($this->result){
		    $rows=mysql_num_rows($this->result);
		}
		else{
		    $rows=0;
		}
		return $rows;
	}
	public function fetch()
	{
		if($this->result)
		{
			if($this->num_rows()!=0){
				while($row=mysql_fetch_array($this->result)){
					$this->data[]=$row;
					//Do $this->data la 1 mang nen khi gan $this->data vao 1 ket qua
					//thi luc do no xe add ket qua moi vao mang $this->data nay==> Muon
					//reset phai unset($this->data) de reset tro ve gia tri ban dau
				}
			}else{
				$this->data=0;

			}
		}
		return $this->data;

	 }
	public function select($table, $where='')
	{

		if($where != "")
		{
			if(is_array($where))
			{
				foreach($where as $k => $v)
				{
					//$sql[]= "$k='$v'";
					$sql[]= "$k=$v";
				}
				// Mỗi khoảng trắng sẽ là một phần tử trong mảng<br />
				$where=implode(" and ",$sql);
				$where="where $where";
			}
			else
			{
				$where="where $where";
			}
		}
		$sql="select * from $table $where";

		$this->query($sql);
	}
}
?>