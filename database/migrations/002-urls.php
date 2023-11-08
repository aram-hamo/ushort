<?php
use AramHamo\MvcCore\Migration;
use AramHamo\MvcCore\Schema;
$GLOBALS['tableName'] = "urls";
$table = new class {
  static function up(){
    $s = new Schema;
    $m = new Migration;
    $m->id();
    $m->text("url");
    $m->text("username");
    $m->foreignKey("username","users","username");
    $m->text("tokan")->unique("tokan");

    $s->create($GLOBALS['tableName'],$m->table,$m->options);
  }
  static function down(){
    $s = new Schema;
    $s->dropIfExists($GLOBALS['tableName']);
  }
};
