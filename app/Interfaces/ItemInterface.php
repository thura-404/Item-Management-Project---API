<?php

namespace App\Interfaces;

use App\models\Item;

interface ItemInterface
{

  /**
   * get all the items from the database
   * @create  22/08/2023
   * @author  Thura Win
   * @param   ---
   * @return  obj -> all the items 
   */
  public function getAllItems();
}
