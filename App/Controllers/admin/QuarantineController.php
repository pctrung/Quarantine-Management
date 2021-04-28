<?php

use App\Core\Controller;

class QuarantineController extends Controller
{
  private $quarantine;

  function __construct()
  {
    $this->quarantine = $this->model("QuarantineModel");
  }
  function index()
  {
    $data = $this->quarantine->all();
    $this->view("admin", "quarantines/index", $data);
  }
  function create()
  {
    $this->view("admin", "quarantines/create", []);
  }
  function edit($id)
  {
    $data = $this->quarantine->getByID($id);
    $this->view("admin", "quarantines/edit", $data);
  }
  function store()
  {
  }
  function update($id)
  {
  }
  function delete($id)
  {
  }
}
