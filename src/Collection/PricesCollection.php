<?php

namespace Colibri\Pricing\Collection;

use Colibri\Pricing\Price\Price;
use Colibri\Pricing\Price\PriceInterface;

/**
 * Class PricesCollection
 * @package Colibri\Pricing\Collection
 */
class PricesCollection extends AbstractCollection implements PricesCollectionInterface
{
  
  /**
   * @inheritDoc
   */
  public function __construct(array $prices = [])
  {
    parent::__construct($prices, PriceInterface::class);
  }
  
  /**
   * @inheritDoc
   */
  public function getTotal(): PriceInterface
  {
    $total = 0.00;
  
    $this->each(function (PriceInterface $price) use (&$total) {
      $total += $price->getValue();
    });
    
    return new Price($total);
  }
  
}