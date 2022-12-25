<?php 
class pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');


    }

    function index()
    {
        $this->load->view('v_pendaftaran');


    }
	function simpan_mhs(){
        $nim=$this->input->post('xnim');
        $nama=$this->input->post('xnama');
        $email=$this->input->post('xemail');
        $password=$this->input->post('xpassword');
        $konfirm_password=$this->input->post('xconfirm-password');
        if ($password <> $konfirm_password) {
             echo $this->session->set_flashdata('msg','error');
               redirect('pendaftaran');
         }else{
               $this->m_mahasiswa->simpan_mhs($nim,$nama,$email,$pass,);
            echo $this->session->set_flashdata('msg','success');
               redirect('user/user');
           }

}





}