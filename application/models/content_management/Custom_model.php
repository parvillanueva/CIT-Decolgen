<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Taipei');

	class Custom_model extends CI_Model{ 
		protected $sql;
		protected $WhereClause;
		function get_data_excel($table, $select,$counter,$query = null){
				$this->db->select($select);
				$this->db->from($table);
				if($query != null){
					$this->db->where($query);
				}
				$q = $this->db->get();
				return $q->result();
		}

		function menu_main_with_pkg($package_name){
			$this->db->where('menu_package', $package_name);
			$this->db->where_in('menu_status', array(1, 0));
			$query = $this->db->get('cms_menu');
			return $query->num_rows();
		}

		function menu_sub_with_pkg($package_name){
			$this->db->where('package', $package_name);
			$query = $this->db->get('cms_menu_sub');
			return $query->num_rows();
		}

		function check_pkg($package_name){
			$count = $this->menu_main_with_pkg($package_name);
			return $count;
		}
		function get_menu_list($table,$select, $query){
			$this->db->select($select);
            $this->db->from($table);
            $this->db->where($query);
            $this->db->join('cms_menu_roles','cms_menu_roles.menu_id = cms_menu.id','left');
            $this->db->order_by('menu_orders','asc');
            $result = $this->db->get();
            return $result->result();

		}

		function update_menu_data($table,$data,$query){
			$this->db->where($query);
			$this->db->update($table, $data);
			$updated_status = $this->db->affected_rows();
			if($updated_status):
			    return "success";
			else:
			    return "failed";
			endif;
		}

		function delete_user_role($table, $id) {
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('id', $id);
			
			$query = $this->db->get();

			$role_name = "";
			foreach ($query->result() as $row) {
				$role_id = $row->id;
				$role_name = $row->name;
			}

			$this->db->select('*');
			$this->db->from("cms_users");
			$this->db->where('role', $role_id);
			$query = $this->db->get();
			$result = [];

			if ($query->num_rows() > 0) {
				$result = ['message' => $role_name." is currently in use by user.", 'in_use' => 1];
			} else {
				$this->db->where("id", $id);
				$this->db->update($table, ['status' => '-2']);
	   			$updated_status = $this->db->affected_rows();
				if($updated_status):
				    $result = ['message' => 'Deleted successfully'];
				else:
				    $result = ['message' => 'Delete failed'];
				endif;
			}

			return $result;
		}
		
		function select($table){
			$sql = "Select * From ".$table."";
			$this->sql = $sql;
			return $this;
		}
		
		function result(){
			$execute = $this->db->query($this->sql);
			return $execute->result(); 
		}
		
		function add_save($table, $ArrySet){
			$SqlResult = $this->db->insert($table, $ArrySet);
			return $SqlResult;
		}
		public function edit_save($table, $ArrySet, $ArryWhere){
			$SqlResult = $this->db->update($table, $ArrySet, $ArryWhere);
			return $SqlResult;
		}
		
		public function where($clause = '' , $operation = ' and '){
			if ( $clause == '' ) {
				 return $this; //error('undefined where clause');
			 }
			 if( is_array($clause) || is_object($clause) )
			 {
				$columns = ''; 
				foreach( $clause as $key => $value )
				{
					$columns .= "  ". $operation ."  " . $key . " = '" . $value . "'";	
				}
				$clause = substr($columns,6);
			  }
			 
			 $this->sql = $this->sql.' where ' .  $clause; 

			 $this->WhereClause = $clause;
			 return $this;
		}
	}
?>