<?php

namespace App\Entity;

class Order
{
    /**
     * @var string
     */
    private $customerFirstname;
    /**
     * @var string
     */
    private $customerLastname;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var array
     */
    private $itemsPurchased = [];

    /**
     * @var float
     */
    private $total = 0;

    public function setDate(\DateTime $date): Order
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function getItemsPurchased(): array
    {
        return $this->itemsPurchased;
    }

    public function addItemPurchased(string $name, int $quantity): Order
    {
        $this->itemsPurchased[$name] = $quantity;
        return $this;

    }

    /**
     * @param float $total
     * @return Order
     */
    public function setTotal(float $total): Order
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param string $customerFirstname
     * @return Order
     */
    public function setCustomerFirstname(string $customerFirstname): Order
    {
        $this->customerFirstname = $customerFirstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerFirstname(): string
    {
        return $this->customerFirstname;
    }

    /**
     * @param string $customerLastname
     * @return Order
     */
    public function setCustomerLastname(string $customerLastname): Order
    {
        $this->customerLastname = $customerLastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLastname(): string
    {
        return $this->customerLastname;
    }


}
