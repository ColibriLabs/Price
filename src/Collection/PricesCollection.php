<?php

namespace Colibri\Pricing\Collection;

use Colibri\Pricing\Price\PriceInterface;

/**
 * Class PricesCollection
 * @package Colibri\Pricing\Collection
 */
class PricesCollection extends AbstractCollection
{
  
  /**
   * @inheritDoc
   */
  public function __construct(array $prices = [])
  {
    parent::__construct($prices, PriceInterface::class);
  }
  
}