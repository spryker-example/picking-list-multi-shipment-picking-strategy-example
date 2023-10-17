<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\Business\Generator\MultiShipmentPickingListGenerator;
use SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\Business\Generator\MultiShipmentPickingListGeneratorInterface;
use SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\Dependency\Facade\PickingListMultiShipmentPickingStrategyExampleToShipmentFacadeInterface;
use SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\Dependency\Service\PickingListMultiShipmentPickingStrategyExampleToShipmentServiceInterface;
use SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\PickingListMultiShipmentPickingStrategyExampleDependencyProvider;

/**
 * @method \SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\PickingListMultiShipmentPickingStrategyExampleConfig getConfig()
 */
class PickingListMultiShipmentPickingStrategyExampleBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\Business\Generator\MultiShipmentPickingListGeneratorInterface
     */
    public function createMultiShipmentPickingListGenerator(): MultiShipmentPickingListGeneratorInterface
    {
        return new MultiShipmentPickingListGenerator(
            $this->getShipmentFacade(),
            $this->getShipmentService(),
        );
    }

    /**
     * @return \SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\Dependency\Facade\PickingListMultiShipmentPickingStrategyExampleToShipmentFacadeInterface
     */
    public function getShipmentFacade(): PickingListMultiShipmentPickingStrategyExampleToShipmentFacadeInterface
    {
        return $this->getProvidedDependency(PickingListMultiShipmentPickingStrategyExampleDependencyProvider::FACADE_SHIPMENT);
    }

    /**
     * @return \SprykerExample\Zed\PickingListMultiShipmentPickingStrategyExample\Dependency\Service\PickingListMultiShipmentPickingStrategyExampleToShipmentServiceInterface
     */
    public function getShipmentService(): PickingListMultiShipmentPickingStrategyExampleToShipmentServiceInterface
    {
        return $this->getProvidedDependency(PickingListMultiShipmentPickingStrategyExampleDependencyProvider::SERVICE_SHIPMENT);
    }
}
