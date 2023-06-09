<?php

namespace Src\Bridge\CampaignManager\Promotion;

use Src\Bridge\CampaignManager\Promotion;

class VideoPromotion implements Promotion
{

    public function display()
    {
        echo "video promotion";
    }
}
