<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace GingerPay\Payment\Model\Methods;

use GingerPay\Payment\Redefiners\Model\PaymentLibraryRedefiner;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Framework\Exception\LocalizedException;

/**
 * Viacash method class
 */
class Viacash extends PaymentLibraryRedefiner
{

    /** Payment Code */
    const METHOD_CODE = 'ginger_methods_viacash';

    /**
     * @var string
     */
    public $method_code = self::METHOD_CODE;

    /** Platform Method Code */
    public $platform_code = 'viacash';

    /**
     * @var string
     */
    protected $_code = self::METHOD_CODE;
}
