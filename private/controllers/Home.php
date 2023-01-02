<?php

/**
 * home controller
 */
class Home extends Controller
{
  function index()
  {
    // code...
    $db = new Database();
    $data = $db->query("select * from users");
    $this->view('home', ['rows'=>$data]);
  }
}
