<?php

namespace Colibri\Pricing\Currency;

use Colibri\Pricing\Common\PrintableInterface;

/**
 * Interface CurrencyInterface
 * @package Colibri\Pricing\Currency
 */
interface CurrencyInterface extends PrintableInterface
{
  
  /**
   * @return string
   */
  public function getSign(): string;
  
  /**
   * @param $sign
   * @return CurrencyInterface
   */
  public function setSign(string $sign): CurrencyInterface;
  
  /**
   * @param CurrencyInterface $currency
   * @return float
   */
  public function rateTo(CurrencyInterface $currency): float;
  
}