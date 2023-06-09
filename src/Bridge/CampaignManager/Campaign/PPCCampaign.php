<?php

namespace Src\Bridge\CampaignManager\Campaign;

use Src\Bridge\CampaignManager\Campaign;

class PPCCampaign extends Campaign
{
    public function run()
    {
        $this->promotion->display();
    }
}
