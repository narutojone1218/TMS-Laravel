<?php

namespace App\Repositories\ContactEmail;

use App\Repositories\Contact\Contact;
use Illuminate\Database\Eloquent\Model;

class ContactEmail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contact_id',
        'address',
        'zendesk_id',
        'primary',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Returns the contact person that owns the phone
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    /**
     * Check is email is set as primary
     *
     * @return bool
     */
    public function isPrimary()
    {
        return (bool)$this->primary;
    }

}
