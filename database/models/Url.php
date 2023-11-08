<?php declare(strict_types=1);
namespace AramHamo\Mvc\Models;
use AramHamo\MvcCore\Model;

class Url extends Model{
  public String $_tableName = "urls";
  public String $url;
  public String $username;
  public String $tokan;
}
