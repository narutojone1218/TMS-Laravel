<?php
namespace App\Repositories\TaskOverdueReason;

use League\Fractal\TransformerAbstract;
use App\Repositories\TaskOverdueReason\TaskOverdueReason;

/**
 * TaskOverdueReasonTransformer
 * 
 * With the trnasformer we can chose what data to send to api response and what relations to be included in the response
 */
class TaskOverdueReasonTransformer extends TransformerAbstract {

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * List of resources that are available to be added in the TaskOverdueReason object response
     *
     * @var array
     */
    protected $availableIncludes = [];

    public function transform(TaskOverdueReason $taskOverdueReason)
    {
        return $taskOverdueReason->toArray();
    }
} 