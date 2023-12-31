<?php

namespace GingerPay\Payment\Redefiners\Model;

require_once __DIR__.'/../../Model/Builders/LibraryConfigProvider.php';

use GingerPay\Payment\Model\Builders\LibraryConfigProvider;

class ModelBuilderRedefiner extends LibraryConfigProvider
{
    /**
     * Endpoint
     */
    public $ENDPOINT = 'https://api.dev.gingerpayments.com';

}
