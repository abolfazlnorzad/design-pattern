<?php

namespace Src\Bridge\CampaignManager\Campaign;

use Src\Bridge\CampaignManager\Campaign;

class PPVCampaign extends Campaign
{

    public function run()
    {
        $this->promotion->display();
    }
}
