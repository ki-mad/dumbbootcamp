<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post) {
    $params = [
        'name'=> $post['name'],
        'email'=> $post['email'],
        'role' => $post['jabatan'],
    ];
    $this->db->insert('user', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function ubah($post) {
        $params = [
        'id' => $post['id'],
        'name'=> $post['name'],
        'email'=> $post['email'],
        'role' => $post['jabatan'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('user', $params);
    }

}