<?php

class AddNamesProc {
// Properties
public $name;

// Methods
function set_name($name) {
$this->name = $name;
   $f=explode(" ",$name);
  
   $b=array("lname"=>$f[1],"fname"=>$f[0]);
     
return $b;

}
  
}

?>