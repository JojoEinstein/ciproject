<<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Membuat class untuk controller dashboard
 */
class MY_Controller extends CI_Controller
{

  function __construct()
  {
    // code...
    parent::__construct();
  }
}

/**
 * membuat class admin
 */
class Admin_Controller extends MY_Controller
{

  function __construct()
  {
    // code...
    parent::__construct();
  }
}

/**
 * class publik nya
 */
class Public_Controller extends MY_Controller
{

  function __construct()
  {
    // code...
    parent::__construct();
  }
}



 ?>
