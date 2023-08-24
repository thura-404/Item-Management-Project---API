<?php

namespace App\Repositories;

use App\Interfaces\ItemInterface;
use App\models\Item;

class ItemRepository implements ItemInterface
{
  /**
   * get all the items from the database
   * @create  22/08/2023
   * @author  Thura Win
   * @param   ---
   * @return  obj -> all the items 
   */
  public function getAllItems()
  {
    // return all the items.
    return Item::paginate(20);
  }
}
