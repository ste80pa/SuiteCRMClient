<?php
namespace ste80pa\SuiteCRMClient\Types\Requests;

use ste80pa\SuiteCRMClient\Types\BaseRequest;

/**
 *
 * @author Stefano Pallozzi
 *        
 */
class SetCampaignMergeRequest extends BaseRequest
{

    /**
     * Session ID returned by a previous login call.
     * 
     * @var string
     */
    public $session;

    /**
     *
     * @var mixed
     */
    public $targets;

    /**
     *
     * @var string
     */
    public $campaign_id;
}
