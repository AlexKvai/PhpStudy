<?php

namespace wfm\traits;

trait TSingleton 
{
  private static $instanse;

  private function __construct()
  {
    
  }

  public static function getInstanse()
  {
    if (self::$instanse === NULL) {
      self::$instanse = new self();
    }
    return self::$instanse;

  }
}