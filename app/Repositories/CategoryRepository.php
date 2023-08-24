<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\models\Category;

class CategoryRepository implements CategoryInterface
{
  /**
   * Get all the categories
   * @date    24/08/2023
   * @author  Thura Win
   * @param   ---
   * @return  categories
   */
  public function getAllCategories()
  {
    return Category::get();
  }
}
