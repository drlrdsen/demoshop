<?php

namespace Pyz\Yves\Checkout\Communication;

use SprykerEngine\Yves\Kernel\Communication\AbstractDependencyContainer;
use SprykerFeature\Client\Cart\Service\CartClientInterface;
use SprykerFeature\Client\Checkout\Service\CheckoutClient;
use Pyz\Yves\Checkout\Communication\Form\Checkout;

class CheckoutDependencyContainer extends AbstractDependencyContainer
{
    /**
     * @return CheckoutClient
     */
    public function createCheckoutClient()
    {
        return $this->getLocator()->checkout()->client();
    }

    /**
     * @return CartClientInterface
     */
    public function createCartClient()
    {
        return $this->getLocator()->cart()->client();
    }

    /**
     * @return Checkout
     */
    public function createCheckoutForm()
    {
        return $this->getFactory()->createFormCheckout();
    }

}