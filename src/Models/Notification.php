<?php

namespace Modules\ModuleRelease1\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\DatabaseNotification;
use Modules\ModuleRelease1\Database\Factories\NotificationFactory;

class Notification extends DatabaseNotification
{
    use HasFactory, HasUlids;

    protected $connection = 'module_release_1';
    protected $table = 'notifications';

    protected static function newFactory()
    {
        return NotificationFactory::new();
    }
}
