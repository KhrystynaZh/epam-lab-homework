<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Class Store
 * @package ObjectsAndClasses\FlowerStore
 */
class Store
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * Store constructor.
     *
     * @param string $name
     * @param string $address
     */
    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStore\OrderInterface $order
     *
     * @return \ObjectsAndClasses\FlowerStore\OrderInterface
     */
    public function handleOrder(OrderInterface $order): OrderInterface
    {
        if($order->isCompleted()) {
            return $order;
        }

        if(!$order->isPaid() && !$order->getClient()->payOrder($order)->isPaid()) {
            return $order;
        }

        if($order->isNeedDelivery() && !$order->isDelivered()) {
            $this->deliver($order);
        }

        return $order->setCompleted();
    }

    /**
     * @param \ObjectsAndClasses\FlowerStore\OrderInterface $order
     *
     * @return \ObjectsAndClasses\FlowerStore\OrderInterface
     */
    private function deliver(OrderInterface $order): OrderInterface
    {
        return $order->setDelivered();
    }
}