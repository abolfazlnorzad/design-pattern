<?php

namespace Src\Bridge\CampaignManager\Promotion;

use Src\Bridge\CampaignManager\Promotion;

class BannerPromotion implements Promotion
{

    public function display()
    {
        echo "banner promotion";
    }
}
