<?php

use App\Core\Controller;

class HomeController extends Controller
{
  private $quarantine;
  function __construct()
  {
    $this->quarantine = $this->model("QuarantineModel");
  }
  function index()
  {
    $this->view("client", "home" . DS . "index", []);
  }
  function detail()
  {
    $id = "";
    if (isset($_POST['id'])) {
      $id = $_POST['id'];
    }
    $data = $this->quarantine->getByID($id);

    if ($data === false) {
      $_SESSION['alert']['success'] = false;
      $_SESSION['alert']['messages'] = "Không tìm thấy mã số $id";
    }

    $this->view("client", "home" . DS . "index", $data);
  }
}
