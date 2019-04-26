<?php
 include "AbstracPrefix.php";
    class ConcreteClass extends AbstracPrefix{
        public function prefixName($name,$separator="."){
            if($name=="Pacman"){
                $prefix="Mr";
            }elseif($name=="Pacwoman"){
                $prefix="Mrs";
            }else{
                $prefix="";
            }
            //return "{$prefix}{$separator}{$name}"; second way to return type 
            return "$prefix"."$separator"."$name";//first way to return type 
        }
    }
    $class=new ConcreteClass();
    echo $class->prefixName("Pacman")."<br>";
    echo $class->prefixName("Pacwoman");
?>