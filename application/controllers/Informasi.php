<?php

class Informasi extends CI_Controller {

    // Fungsi untuk menampilkan halaman informasi
    public function index() {
        $this->load->view('informasi_view');
    }

    // Fungsi untuk menangani form submission
    public function submit() {
        // Ambil data dari form
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        // Validasi data (jika perlu)
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            echo "Semua field harus diisi!";
            return;
        }

        // Simpan ke database
        $this->load->model('Contact_model');
        $this->Contact_model->insert_contact($name, $email, $subject, $message);

        // Jika ada metode form_submit(), panggil di sini
        // Pastikan metode form_submit() ada di Contact_model
        
        $this->session->set_flashdata('flash', 'Dikirim');
        redirect('informasi');
        
    }
}
