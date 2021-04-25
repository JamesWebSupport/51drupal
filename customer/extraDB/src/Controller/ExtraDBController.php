<?php

namespace Drupal\ExtraDB\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database;

/**
 * Defines ExtraDBController class.
 */
class ExtraDBController extends ControllerBase {
  /**
   * First Test: Display the markup
   *
   */
  public function display() {
    return [
      '#markup' => 'Display User Emails',
    ];
  }

  /**
   * Return a render-able array
   */
  public function twigDisplay(){
    return [
      '#theme' => 'extraDB_theme_hook',
    ];
  }

  public function connectDB() {
    \Drupal\Core\Database\Database::setActiveConnection('extra');
    $db = \Drupal\Core\Database\Database::getConnection();
    $query = $db->query('select * from {pre_common_member}');
    $result = $query->fetchAll();
    // foreach ($result as $record)
    // {
    //   var_dump($record->uid);
    // }
    // dd($result);
    \Drupal\Core\Database\Database::setActiveConnection('default');
    return [
      '#theme' => 'extraDB_theme_hook',
     '#users' => $result,

    ];
  }

}
