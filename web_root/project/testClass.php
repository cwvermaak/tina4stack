<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class testClass {
    
    function getDisplay($name="World", $age=10) {
        return " Hello {$name} you are {$age} years old";
    }
    
    function getNames() {
        
        $users = [];
        
        $image = file_get_contents("http://www.freeimages.com/assets/183385/1833845416/rocks-and-water-1446293-1-s.jpg");
        
        $users[] = ["USER_ID" => 1, "FIRST_NAME" => "Andre", "LAST_NAME" => "van Zuydam", "AGE" => 36, "PHOTO" => $image];
        $users[] = ["USER_ID" => 2, "FIRST_NAME" => "Kobus", "LAST_NAME" => "van Wyk", "AGE" => 31, "PHOTO" => $image];
        $users[] = ["USER_ID" => 3, "FIRST_NAME" => "Mickey", "LAST_NAME" => "Mouse", "AGE" => 50, "PHOTO" => $image];
                
        return $users;       
    }
    
    
    
    function getPets($userId=0) {
        
        $pets = [];
        
        if ($userId == 2) {
          $pets[] = ["PETID" => 1, "Type" => "Dog", "Name" => "Doggy"];
          $pets[] = ["PETID" => 2, "Type" => "Cat", "Name" => "Kitty"];
        }
         else {
              $pets[] = ["PETID" => 3, "Type" => "Mouse", "Name" => "Mousey"];
              $pets[] = ["PETID" => 4, "Type" => "Parrot", "Name" => "Polly"];
         }
                
        return $pets;       
    }
    
    
}
