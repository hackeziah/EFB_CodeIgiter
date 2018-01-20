<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
	   
		/* if($this->session->email == "")
        {
            redirect('login');
		}
		*/


        $this->load->model('EmployeeModel','EmployeeModel');
    }   
	public function index(){
    //$this->load->view->(); 


	}


	public function Calendar()
	{
		$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
		$data['getHoliday'] = $this->EmployeeModel->getHoliday();
		$data['getAttendance'] = $this->EmployeeModel->getAttendance();
		$data['getSalary'] = $this->EmployeeModel->getSalary();
		
		
		$data['getShift'] = $this->EmployeeModel->getShift();
		$data['getShiftAttendance'] = $this->EmployeeModel->getShiftAttendance();
		
		
		
		
		$this->load->view('view_employee/calendar',$data);
	}
	
	public function ViewEmployee()
	{
		$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
		
		$this->load->view('view_employee/view_employee',$data);
	}
		
    public function EmployeeRegister()
    {
		if(!empty($_POST))
		{
			$data =  array('empFirstName' => $this->input->post('firstname'),
					'empLastName' => $this->input->post('lastname'),
					'empNO' => $this->input->post('employee_id'),
					'empemail' => $this->input->post('email'),
					'empMobile' => $this->input->post('mobile'),
					'empbdate' => $this->input->post('birth_date'),
					'empaddress' => $this->input->post('address'),
					'created_date' => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->EmployeeRegister($data);
			//$this->session->set_flashdata('SUCCESSMSG', "Employee Register Successfully!!");
			redirect('Employee/ViewEmployee');
		}
		else
		{
			$this->load->view('view_employee/employee_register');
		}
    }
	
	public function ShiftRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('aloEmpID' => $this->input->post('employee_id'),
					'aloDay'		  => $this->input->post('aloDay'),
					'aloTimeIn'		  => $this->input->post('time_in'),
					'aloTimeOut'	  => $this->input->post('time_out'),
					'created_date'    => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->ShiftRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Shift Register Successfully!!");
			redirect('Employee/ViewShift');
		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
			$this->load->view('view_employee/shift_register',$data);
		}
	}
	
	public function ViewShift()
	{
		$data['getShift'] = $this->EmployeeModel->getShift();
		$this->load->view('view_employee/view_shift',$data);
	}
	
	
	public function ShiftAttendanceRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('aloEmpID' => $this->input->post('employee_id'),
					'aloDay'		  => $this->input->post('aloDay'),
					'aloTimeIn'		  => $this->input->post('time_in'),
					'aloTimeOut'	  => $this->input->post('time_out'),
					'created_date'	  => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->ShiftAttendanceRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Shift Attendance Register Successfully!!");
			redirect('Employee/ShiftViewAttendance');
		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
			$this->load->view('view_employee/shift_attendance_register',$data);
		}
	}

	public function ShiftViewAttendance()
	{
		$data['getShiftAttendance'] = $this->EmployeeModel->getShiftAttendance();
		$this->load->view('view_employee/shift_view_attendance',$data);
	}
	
	public function AttendanceRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('attEmpID' => $this->input->post('employee_id'),
					'attDate' => $this->input->post('attendence_date'),
					'attonTime' => $this->input->post('on_time'),
					'attoffTime' => $this->input->post('off_time'),
					'created_date' => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->AttendanceRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Attendance Register Successfully!!");
			redirect('Employee/ViewAttendance');
		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
			$this->load->view('view_employee/attendance_register',$data);
		}
	}
	
	public function ViewAttendance()
	{
		$data['getAttendance'] = $this->EmployeeModel->getAttendance();
		$this->load->view('view_employee/view_attendance',$data);
	}
	
	public function SalaryRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('salEmpID' => $this->input->post('employee_id'),
					'salBeginDate' => $this->input->post('salary_begin_date'),
					'salBasicSalary' => $this->input->post('salary_basic'),
					'salGrade' => $this->input->post('grand_salary'),
					'created_date' => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->SalaryRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Salary Register Successfully!!");
			redirect('Employee/ViewSalary');
		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
			$this->load->view('view_employee/salary_register',$data);
		}
	}
	
	public function ViewSalary()
	{
		$data['getSalary'] = $this->EmployeeModel->getSalary();
		$this->load->view('view_employee/view_salary',$data);
	}
	
	public function HolidayRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('holName' => $this->input->post('holiday_name'),
					'holDate' => $this->input->post('holiday_date'),
					'holDescription' => $this->input->post('description'),
					'created_date' => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->HolidayRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Holiday Register Successfully!!");
			redirect('Employee/ViewHoliday');
		}
		else
		{
			$this->load->view('view_employee/holiday_register');
		}
	}
	
	public function ViewHoliday()
	{
		$data['getHoliday'] = $this->EmployeeModel->getHoliday();
		$this->load->view('view_employee/view_holiday',$data);
	}

	
}
