<?php
namespace App\Repositories\UserSystem;

use League\Fractal\TransformerAbstract;
use App\Repositories\UserSystem\UserSystem;

/**
 * UserSystemTransformer
 * 
 * With the trnasformer we can chose what data to send to api response and what relations to be included in the response
 */
class UserSystemTransformer extends TransformerAbstract {

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * List of resources that are available to be added in the UserSystem object response
     *
     * @var array
     */
    protected $availableIncludes = [];

    public function transform(UserSystem $userSystem)
    {
        return $userSystem->toArray();
    }
} 