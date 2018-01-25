<?php
namespace Drupal\hello_8\Controller;

use Drupal\Core\Controller\ControllerBase;




class Hello8Controller extends ControllerBase {
   public function pageOutput(){
       return array(
           '#type' => 'markup',
           '#markup' => t('Hello'),
       );
   }

}