<?php
namespace App\Repositories\Job;

use League\Fractal\TransformerAbstract;
use App\Repositories\Job\Job;

/**
 * JobTransformer
 * 
 * With the trnasformer we can chose what data to send to api response and what relations to be included in the response
 */
class JobTransformer extends TransformerAbstract {

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * List of resources that are available to be added in the Job object response
     *
     * @var array
     */
    protected $availableIncludes = [];

    public function transform(Job $job)
    {
        return $job->toArray();
    }
} 