<?php namespace Arsyad\Media\Models;

use Model;

/**
 * Media Model
 */
class Media extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;

        /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['slug' => 'title'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arsyad_media_media';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */

    public $rules = [
        'title' => 'required',
        'description' => 'required'
        ];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
         'user' => ['Rainlab\User\Models\User', 'table' => 'users']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachMany    = [
        'galleries' => ['System\Models\File']
    ];
}
