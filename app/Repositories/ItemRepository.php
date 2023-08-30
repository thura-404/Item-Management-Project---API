<?php

namespace App\Repositories;

use App\Interfaces\ItemInterface;
use App\models\Item;
use Illuminate\Support\Facades\Log;

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

  /**
   * get all the items and relaed categories from the database
   * @create  28/08/2023
   * @author  Thura Win
   * @param   ---
   * @return  obj -> all the items 
   */
  public function getItemsForIndex()
  {
    // return all the items and related categories.
    return Item::join('categories', 'items.category_id', '=', 'categories.id')
      ->select('items.*', 'categories.name as category_name')
      ->paginate(20);
  }

  /**
   * get all the items and relaed categories from the database
   * @create  28/08/2023
   * @author  Thura Win
   * @param   ---
   * @return  obj -> all the items 
   */
  public function searchItems($query)
  {
    // return all the items and related categories.
    $searchQuery =  Item::join('categories', 'items.category_id', '=', 'categories.id')
      ->select('items.*', 'categories.name as category_name');

    if (!empty($query['id'])) {
      $searchQuery->where('items.item_id', 'like', '%' . $query['id'] . '%');
    }

    if (!empty($query['code'])) {
      $searchQuery->where('items.item_code', 'like', '%' . $query['code'] . '%');
    }

    if (!empty($query['name'])) {
      $searchQuery->where('items.item_name', 'like', '%' . $query['name'] . '%');
    }

    if (!empty($query['category'])) {
      $searchQuery->where('items.category_id', $query['category']);
    }

    $paginatedSearchResult = $searchQuery->paginate(20);

    return $paginatedSearchResult;
  }
}
