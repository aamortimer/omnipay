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

use Omnipay\Common\Message\RedirectResponseInterface;

class PurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{
    /**
     * {@inheritdoc}
     */
    public function isSuccessful()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isRedirect()
    {
        return '000000' === $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectUrl()
    {
        $parts = explode('|', $this->data);
        if (2 == count($parts)) {
            return $parts[1];
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectMethod()
    {
        return 'GET';
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectData()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getTransactionReference()
    {
        $parts = explode('|', $this->data);
        if (2 == count($parts)) {
            return $parts[0];
        }

        return null;
    }
}
