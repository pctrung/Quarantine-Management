<?php

use App\Core\Controller;

class AboutController extends Controller
{
  function index()
  {
    $data = [];
    $this->view("admin", "about" . DS . "index", $data);
  }
}
