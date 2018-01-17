<?php

namespace Colibri\Pricing\Price;

use Colibri\Pricing\Common\PrintableInterface;
use Colibri\Pricing\Currency\CurrencyInterface;

/**
 * Interface PriceInterface
 * @package Colibri\Pricing\Price
 */
interface PriceInterface extends PrintableInterface
{
  
  /**
   * @return float
   */
  public function getValue(): float;
  
  /**
   * @param float $value
   * @return PriceInterface
   */
  public function setValue(float $value): PriceInterface;
  
  /**
   * @return CurrencyInterface|null
   */
  public function getCurrency():? CurrencyInterface;
  
  /**
   * @param CurrencyInterface $currency
   * @return PriceInterface
   */
  public function setCurrency(CurrencyInterface $currency): PriceInterface;
  
  /**
   * @param int $precision
   * @return PriceInterface
   */
  public function setPrecision(integer $precision): PriceInterface;
  
  /**
   * @return int
   */
  public function getPrecision(): integer;
}