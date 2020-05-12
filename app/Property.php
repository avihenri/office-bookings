<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'pro_properties';

    /**
    * The primary key associated with the table.
    *
    * @var string
    */
    protected $primaryKey = 'PRO_ID_PK';
     /**
    * Timestamps associated with the table.
    *
    * @var string
    */
    const CREATED_AT  = 'PRO_CREATED_AT';
    const UPDATED_AT  = 'PRO_UPDATED_AT';

   /**
    * Fillable fields in this table.
    * @var array
    */
    protected $fillable = [
        'INT_TITLE', 'INT_BIO', 'INT_IMAGE',
    ];
}
