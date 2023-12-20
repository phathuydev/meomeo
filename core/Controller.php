<?php
class Controller
{
  public $db;
  static public $controller;
  public function model($model)
  {
    if (file_exists(_DIR_ROOT . '/app/models/' . $model . '.php')) {
      require_once _DIR_ROOT . '/app/models/' . $model . '.php';
      if (class_exists($model)) {
        $model = new $model();
        return $model;
      }
    }
    return false;
  }

  public function render($view, $data = [])
  {
    if (!empty(View::$dataShare)) {
      if (isset($data)) {
        $data = array_merge($data, View::$dataShare);
      }
    }
    if (isset($data)) {
      extract($data);
    }
    if (file_exists(_DIR_ROOT . '/app/views/' . $view . '.php')) {
      require_once _DIR_ROOT . '/app/views/' . $view . '.php';
    }
  }
}
