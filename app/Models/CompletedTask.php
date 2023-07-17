<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedTask extends Model
{
    use HasFactory;

    /**
     * 複数代入不可能な属性
     */
    protected $guarded = [];

public function getPriorityString()
{
    switch ($this->priority) {
        case 1:
            return '低い';
        case 2:
            return '普通';
        case 3:
            return '高い';
        default:
            return '普通';
    }
}
public function getCompletedAtFormattedAttribute()
{
    return $this->completed_at->format('Y-m-d H:i:s');
}

}
