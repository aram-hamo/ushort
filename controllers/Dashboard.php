<?php declare(strict_types=1);
namespace AramHamo\Mvc\Controllers;
use AramHamo\MvcCore\View;
use AramHamo\Mvc\Models\Url;
use AramHamo\MvcCore\Middleware;

class Dashboard extends Middleware{
  public function get(){
    $this->middleware('auth');

  if(isset($_POST['short'])){
    $url = new Url;
    $url->url = $_POST['url'];
    $url->username = userdata[0]["username"];
    $url->tokan = bin2hex(random_bytes(5));
    $url->create();
  }
    return View::render("dashboard",array("title"=>"Dashboard"));
  }
  public function post(){
  }
  public function update(){
  }
  public function delete(){
  }
}
