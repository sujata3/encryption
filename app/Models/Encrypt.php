<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
class Encrypt extends Model
{
    protected $table = 'encrypts';
    protected $guarded = array();

    public function setDescriptionAttribute($value)
    {
        $this->attributes['Description'] = Crypt::encryptString($value);
    }

    public function getDescription($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

}
