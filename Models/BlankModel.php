<?php 
 class BlankModel extends Query{
     public function __construct()
     {
        parent::__construct();
     }
  public function Bloquear()
  {
      $sql ="SELECT * FROM usuarios where usuario = ''";

  }
}
 ?>