<?php

namespace App\Repositories\ContactEmail;

use League\Fractal\TransformerAbstract;

/**
 * ContactEmailTransformer
 * 
 * With the transformer we can chose what data to send to api response and what relations to be included in the response
 */
class ContactEmailTransformer extends TransformerAbstract {

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * List of resources that are available to be added in the Contact object response
     *
     * @var array
     */
    protected $availableIncludes = [];

    public function transform(ContactEmail $contactEmail)
    {
        return $contactEmail->toArray();
    }
} 