<?php

namespace Colibri\Pricing\Price;

use Colibri\Pricing\Currency\CurrencyInterface;

/**
 * Class Price
 * @package Colibri\Pricing\Price
 */
class Price implements PriceInterface
{
  
  /**
   * @var float
   */
  protected $value;
  
  /**
   * @var CurrencyInterface
   */
  protected $currency;
  
  /**
   * @inheritDoc
   */
  public function getValue(): float
  {
    return $this->value;
  }
  
  /**
   * @inheritDoc
   */
  public function setValue(float $value): PriceInterface
  {
    $this->value = $value;
    
    return $this;
  }
  
  /**
   * @inheritDoc
   */
  public function getCurrency():? CurrencyInterface
  {
    return $this->currency;
  }
  
  /**
   * @inheritDoc
   */
  public function setCurrency(CurrencyInterface $currency): PriceInterface
  {
    $this->currency = $currency;
  
    return $this;
  }
  
}