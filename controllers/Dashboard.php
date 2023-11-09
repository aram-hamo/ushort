<?php declare(strict_types=1);
namespace AramHamo\Mvc\Controllers;
use AramHamo\MvcCore\View;

class Dashboard{
  public function get(){
    include "../middlewares/auth.php";
    return View::render("dashboard",array("title"=>"Dashboard"));
  }
  public function post(){
  }
  public function update(){
  }
  public function delete(){
  }
}
