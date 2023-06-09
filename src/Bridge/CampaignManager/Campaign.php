<?php

namespace Src\Bridge\CampaignManager;

abstract class Campaign
{
    protected Promotion $promotion;

    /**
     * @param Promotion $promotion
     */
    public function __construct(Promotion $promotion)
    {
        $this->promotion = $promotion;
    }

    public function changePromotion(Promotion $promotion)
    {
        $this->promotion = $promotion;
    }
    abstract public function run();


}
