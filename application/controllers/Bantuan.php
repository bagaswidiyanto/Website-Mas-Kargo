<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Bantuan extends CI_Controller
{
  function index()
  {
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $subject = $this->input->post('subject');
    $phone = $this->input->post('phone');
    $message = $this->input->post('message');

    $this->db->query("INSERT INTO tbl_bantuan (name,email,subject,phone,message) VALUES ('" . $name . "','" . $email . "','" . $subject . "','" . $phone . "','" . $message . "') ");
    $this->load->helper('url');
  }
}