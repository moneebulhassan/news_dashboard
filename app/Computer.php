<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
  protected $fillable = [
    "Item_Name","Serial_Number","type","hard_drive","model","operating_system","processor",
    "Ram"
  ];
}
