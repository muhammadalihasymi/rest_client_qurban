<?php

class qurban_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('qurban_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tittle'] = 'Daftar Qurban';
        $data['qurban'] = $this->qurban_m->getAllQurban();

        $this->load->view('templates/header', $data);
        $this->load->view('qurban/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['tittle'] = 'Tambah Shohibul Qurban';

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('qurban/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->qurban_m->tambahDataQurban();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('qurban_c');
        }
    }

    public function hapus($id)
    {
        $this->qurban_m->hapusDataQurban($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('qurban_c');
    }

    public function detail($id)
    {
        $data['tittle'] = 'Detail Shohibul Qurban';
        $data['qurban'] = $this->qurban_m->getQurbanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('qurban/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['tittle'] = 'Ubah Data Shohibul Qurban';
        $data['qurban'] = $this->qurban_m->getQurbanById($id);
        $data['hewan'] = ['Sapi', 'Kerbau', 'Kambing', 'Domba'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telpon', 'Telpon', 'required');
        $this->form_validation->set_rules('hewan', 'Hewan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('qurban/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->qurban_m->ubahDataQurban();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('qurban_c');
        }
    }
}
