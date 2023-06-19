<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 
    public function Index() {
       
        $this->load->helper('url');

        $this->load->model('Home_model', 'model');
        
        $this->load->view('layout/menu');
        $this->load->view('home/main');
        $this->load->view('layout/footer');
    }

    public function display() {
        $this->load->model('Home_model', 'model');
        $data['dados'] = $this->model->getUsers();
        $this->load->view('display', $data);
    }
    
    public function insertResult() {
        $this->load->model('Home_model', 'model');
        extract($this->input->post(), TRUE);
        $data['username'] = $name;    
        $data['email'] = $email;    
        $data['mobile'] = $mobile;    
        $data['place'] = $place;    

        $this->model->insertResult($data);
  
        return $result;
    }

    public function updateUser(){
        $this->load->model('Home_model', 'model');
        extract($this->input->post(), TRUE);
        
        $user_id = $updateid;
        //var_dump($user_id); die("oshi");
        $result = $this->model->updateUser($user_id);
        //var_dump(json_encode($result));

        die (json_encode($result));

    }

    public function updateDetails(){
        $this->load->model('Home_model', 'model');
        extract($this->input->post(), TRUE);

        $data['username'] = $update_name;    
        $data['email'] = $update_email;    
        $data['mobile'] = $update_mobile;    
        $data['place'] = $update_place;  

        $id = $hiddendata;

        //var_dump($id); die;
        $result = $this->model->updateDetails($id, $data);
        if ($result) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'error'));
        }
    }
    public function deleteUser(){
        $this->load->model('Home_model', 'model');
        extract($this->input->post(), TRUE);
        $deleteid = $deletesend;
        $result = $this->model->deleteUser($deleteid);

        if($result) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'error'));
        }
    }
    
}