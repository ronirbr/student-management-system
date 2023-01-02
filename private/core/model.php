<?php

/**
 * main model
 */
class Model extends Database
{
  protected $table = "users";

  function __construct()
  {
    // code...
  }

  public function where($column, $value)
  {
    $query = "select * from $this->table where :column = :value";
    return $this->query($query, [
      'column' => $column,
      'value' => $value
    ]);
  }
}
