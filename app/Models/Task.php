<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
  protected $primaryKey = 'id';
   protected $fillable = [
        'task_name',
        'project_name',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
         'status',
         'user_id'
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


