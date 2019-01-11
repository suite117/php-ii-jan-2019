<?php
namespace Unipa\Core;

class Base
{
    // generic one-size-fits-all constructor
    public function __construct(array $data) {
      $existing = get_object_vars($this);
      foreach ($existing as $key => $value) {
        if (isset($data[$key])) $this->$key = $data[$key];
      }
    }

    public function toJSON() {
      return json_encode($this);
    }

}
