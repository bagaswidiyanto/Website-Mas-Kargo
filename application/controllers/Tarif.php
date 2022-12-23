<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tarif extends MY_Controller
{
  public function index()
  {
    $this->middle = 'content/v_tarif'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }
}