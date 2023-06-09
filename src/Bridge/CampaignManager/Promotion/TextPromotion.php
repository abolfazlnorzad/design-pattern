<?php

namespace Src\Bridge\CampaignManager\Promotion;

use Src\Bridge\CampaignManager\Promotion;

class TextPromotion implements Promotion
{

    public function display()
    {
        echo "text promotion";
    }
}
