<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax_con extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Emp_mod');
      $this->load->model('ajax_mod');
  }

  public function index()
  {
      $this->load->helper('url');
      $data['list'] = $this->ajax_mod->get_rows();
	  $this->load->view('ajax/ajax_view', $data);
  }

  public function ajax_list()
  {
      $list = $this->ajax_mod->get_datatables();
      $data = array();
      $no = $_POST['start'];
      foreach ($list as $empdata) {
          $no++;
          $row = array();
          $row[] = '<input type="checkbox" class="data-check" value="'.$empdata->emp_no.'" onclick="showBottomDelete()"/>';
          $row[] = $empdata->emp_no;
          $row[] = $empdata->first_name;
          $row[] = $empdata->last_name;
          
          //add html for action
          $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="editEmp('."'".$empdata->emp_no."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="deleteEmp('."'".$empdata->emp_no."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
          $data[] = $row;
      }
      $output = array(
                      "draw" => $_POST['draw'],
                      "recordsTotal" => $this->ajax_mod->count_all(),
                      "recordsFiltered" => $this->ajax_mod->count_filtered(),
                      "data" => $data,
              );
      //output to json format
      echo json_encode($output);
  }

  public function ajax_edit($emp_no)
  {
      $data = $this->ajax_mod->get_by_id($emp_no);
      echo json_encode($data);
  }

  public function ajax_add()
  {
      $this->_validate();
      $data = array(
              'emp_no' => $this->input->post('emp_no'),
              'first_name' => $this->input->post('first_name'),
              'last_name' => $this->input->post('last_name'),
             
          );
      $insert = $this->ajax_mod->save($data);
      echo json_encode(array("status" => TRUE));
  }

  public function ajax_update()
  {
      $this->_validate();
      $data = array(
              'emp_no' => $this->input->post('emp_no'),
              'first_name' => $this->input->post('first_name'),
              'last_name' => $this->input->post('last_name'),
             
          );
      $this->ajax_mod->update(array('emp_no' => $this->input->post('emp_no')), $data);
      echo json_encode(array("status" => TRUE));
  }

  public function ajax_delete($emp_no)
  {
      $this->ajax_mod->delete_by_id($emp_no);
      echo json_encode(array("status" => TRUE));
  }

  public function ajax_list_delete()
   {
       $list_emp = $this->input->post('emp_no');
       foreach ($list_emp as $emp_no) {
           $this->ajax_mod->delete_by_id($emp_no);
       }
       echo json_encode(array("status" => TRUE));
   }

  private function _validate()
  {
      $data = array();
      $data['error_string'] = array();
      $data['inputerror'] = array();
      $data['status'] = TRUE;

      if($this->input->post('emp_no') == '')
      {
          $data['inputerror'][] = 'emp_no';
          $data['error_string'][] = 'First name is required';
          $data['status'] = FALSE;
      }else{

        if(!$this->_validate_string($this->input->post('emp_no')))
        {
          $data['inputerror'][] = 'emp_no';
          $data['error_string'][] = 'Invalid value';
          $data['status'] = FALSE;
        }

      }

      if($this->input->post('first_name') == '')
      {
          $data['inputerror'][] = 'first_name';
          $data['error_string'][] = 'First lastname is required';
          $data['status'] = FALSE;
      }else{

        if(!$this->_validate_string($this->input->post('first_name')))
        {
          $data['inputerror'][] = 'first_name';
          $data['error_string'][] = 'Invalid value';
          $data['status'] = FALSE;
        }

      }

      if($this->input->post('last_name') == '')
      {
          $data['inputerror'][] = 'last_name';
          $data['error_string'][] = 'LASTNAME is required';
          $data['status'] = FALSE;
      }else{

        if(!$this->_validate_number($this->input->post('last_name')))
        {
          $data['inputerror'][] = 'last_name';
          $data['error_string'][] = 'Invalid value';
          $data['status'] = FALSE;
        }
      }

      if($this->input->post('carr_nombre') == '')
      {
          $data['inputerror'][] = 'carr_nombre';
          $data['error_string'][] = 'You should select a course ';
          $data['status'] = FALSE;
      }

      if($data['status'] === FALSE)
      {
          echo json_encode($data);
          exit();
      }
  }

  private function _validate_string($string)
  {
      $allowed = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
      for ($i=0; $i<strlen($string); $i++)
      {
          if (strpos($allowed, substr($string,$i,1))===FALSE)
          {
              return FALSE;
          }
      }

     return TRUE;
  }

  private function _validate_number($string)
  {
      $allowed = "0123456789";
      for ($i=0; $i<strlen($string); $i++)
      {
          if (strpos($allowed, substr($string,$i,1))===FALSE)
          {
              return FALSE;
          }
      }

     return TRUE;
  }
}


?>