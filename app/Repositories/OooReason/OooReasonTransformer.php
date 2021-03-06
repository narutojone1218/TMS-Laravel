<?php

namespace App\Repositories\OooReason;

use League\Fractal\TransformerAbstract;

/**
 * OooReasonTransformer
 * 
 * With the trnasformer we can chose what data to send to api response and what relations to be included in the response
 */
class OooReasonTransformer extends TransformerAbstract {

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * List of resources that are available to be added in the OooReason object response
     *
     * @var array
     */
    protected $availableIncludes = [];

    public function transform(OooReason $oooReason)
    {
        return $oooReason->toArray();
    }
} 