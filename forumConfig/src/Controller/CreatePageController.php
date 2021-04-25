<?php
namespace Drupal\forumConfig\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database;
use Drupal\Core\StringTranslation\StringTranslationTrait;

class CreatePageController extends ControllerBase
{
  public function newPage(){
    return [
      '#markup' => 'Hello, New Database',
    ];
  }
}


// class CreatePageController extends ControllerBase
// {
//   public function newPage()
//   {
//     # code...
//     return [
//       '#markup' => 'Hello, New Database',
//     ];
//   }

//   // public function content()
//   // {
//   //   # code...
//   //   return [
//   //     '#markup' => 'Hello, New Database',
//   //   ];
//   //   // return [
//   //   //   '#theme' => 'forumConfig-theme-hook',
//   //   //   'v1' => 'Change to vv1',
//   //   // ];
//   // }

//   // public function connectDB()
//   // {
//   //   $databse = \Drupal\Core\Database\Database::setActiveConnection('extra');
//   //   $db = \Drupal\Core\Database\Database::getConnection();
//   //   $query = $db->query('select * from {pre_common_member}');
//   //   $result = $query->fetchAll();

//   //   $makeup = '124';
//   //   foreach ($result as $key => $value){
//   //     $makeup = $makeup . $key ;
//   //       }
//   //   $header = [
//   //     'uid' => 'User id',
//   //     'username' => 'Username',
//   //     'email' => 'Email',
//   //   ];

//   //   return [
//   //     '#makeup' => ['user id', 'Username', 'Email'],
//   //   ];

//   //   \Drupal\Core\Database\Database::setActiveConnection('default');
//   // }

// //   public function createUsers()
// //   {
// //     $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
// //     $user = \Drupal\user\Entity\User::create();


// // //Mandatory settings
// //     $user->setPassword('Ying0229');
// //     $user->enforceIsNew();
// //     $user->setEmail('fe_1@yahoo.com');
// //     $user->setUsername('fe_1');//This username must be unique and accept only a-Z,0-9, - _ @ .

// // // //Optional settings
// // //     $user->set("init", 'email');
// // //     $user->set("langcode", $language);
// // //     $user->set("preferred_langcode", $language);
// // //     $user->set("preferred_admin_langcode", $language);
// // //     //$user->set("setting_name", 'setting_value');
// //     $user->activate();

// // //Save user
// //     $res = $user->save();

// //   }
// }
