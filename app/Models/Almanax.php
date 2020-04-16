<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Almanax extends Model
{
    /** Table name
     * @var string
     */
    protected $table = "almanax";
    /** Fillable for mass updates
     * @var array
     */
    protected $fillable = ['needed_by', 'offering'];
    /** Timestamps (set to false for now)
     * @todo sort the timestamps
     * @var bool
     */
    public $timestamps = false;
}
