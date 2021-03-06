<?php
namespace App\Repositories\LogTaskUserAcceptance;

use League\Fractal\TransformerAbstract;
use App\Repositories\LogTaskUserAcceptance\LogTaskUserAcceptance;

/**
 * LogTaskUserAcceptanceTransformer
 * 
 * With the trnasformer we can chose what data to send to api response and what relations to be included in the response
 */
class LogTaskUserAcceptanceTransformer extends TransformerAbstract {

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * List of resources that are available to be added in the LogTaskUserAcceptance object response
     *
     * @var array
     */
    protected $availableIncludes = [];

    public function transform(LogTaskUserAcceptance $logTaskUserAcceptance)
    {
        return $logTaskUserAcceptance->toArray();
    }
} 