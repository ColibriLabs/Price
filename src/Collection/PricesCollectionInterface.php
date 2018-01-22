<?php

namespace Colibri\Pricing\Collection;

use Colibri\Collection\CollectionInterface;
use Colibri\Pricing\Price\PriceInterface;

/**
 * Interface PricesCollectionInterface
 * @package Colibri\Pricing\Collection
 */
interface PricesCollectionInterface extends CollectionInterface
{
  
  /**
   * @return PriceInterface
   */
  public function getTotal(): PriceInterface;
  
}