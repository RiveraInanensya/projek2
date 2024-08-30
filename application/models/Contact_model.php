<?php
class Contact_model extends CI_Model {
    public function insert_contact($name, $email, $subject, $message) {
        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        );
        $this->db->insert('contacts', $data);
    }
}
