<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramSetting extends Model
{
    use HasFactory;

    # Пишем вместо Fileable, тем самымы прописываем только защищенные колонки
    # Которые нельзя будет редактировать или менять при создании
    protected $guarded = ['id'];
}
