<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax_mod extends CI_Model {

   // var $table = 'sample';
    var $column = array('emp_no','first_name','last_name'); //set column field database for order and search
    var $order = array('emp_no' => 'desc'); // default order

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_rows()
    {
     //   $this->db->from($this->table);
        //$this->db->order_by('emp_no', 'ASC');
		return $this->db->get('sample')->result(); 
		
    }

    private function _get_datatables_query()
    {
			
        $this->db->select(' emp_no, first_name,last_name');
        $this->db->from($this->sample);
      //  $this->db->join('tbl_carrera', 'tbl_carrera.carr_id = tbl_estudiante.carr_id');
        $i = 0;
        foreach ($this->column as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $column[$i] = $item; // set column array variable to order processing
            $i++;
        }
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->sample);
        return $this->db->count_all_results();
    }

    public function get_by_id($emp_no)
    {
        $this->db->from($this->sample);
        $this->db->where('emp_no',$emp_no);
        $query = $this->db->get();

        return $query->row();
    }

    public function save($data)
    {
        $this->db->insert($this->sample, $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update($this->sample, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($emp_no)
    {
        $this->db->where('emp_no', $emp_no);
        $this->db->delete($this->sample);
    }


}
