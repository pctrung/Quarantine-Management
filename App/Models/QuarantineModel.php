<?php

use App\Core\Database;

class QuarantineModel extends Database
{
  function all()
  {
    $data = require(CONF . DS . 'data.php');
    return $data['quarantine'];
  }

  function getByID($id)
  {
    $data = require(CONF . DS . 'data.php');
    $result = false;
    foreach ($data['quarantine'] as $key => $quarantine) {
      if ($quarantine['id'] === $id) {
        $result = $quarantine;
      }
    }
    return $result;
  }
}
