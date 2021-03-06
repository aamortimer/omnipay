<?php

/*
 * This file is part of the Omnipay package.
 *
 * (c) Adrian Macneil <adrian@adrianmacneil.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\TargetPay\Message;

class DirectebankingCompletePurchaseRequest extends CompletePurchaseRequest
{
    /**
     * {@inheritdoc}
     */
    public function getEndpoint()
    {
        return 'https://www.targetpay.com/directebanking/check';
    }
}
