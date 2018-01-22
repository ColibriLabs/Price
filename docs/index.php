<?php

use Colibri\Pricing\Price\Price;

include_once __DIR__ . '/../vendor/autoload.php';

$price = new Price(1.00, new class implements \Colibri\Pricing\Currency\CurrencyInterface {
  
  /**
   * @return string
   */
  public function getSign(): string
  {
    // TODO: Implement getSign() method.
  }
  
  /**
   * @param $sign
   * @return \Colibri\Pricing\Currency\CurrencyInterface
   */
  public function setSign(string $sign): \Colibri\Pricing\Currency\CurrencyInterface
  {
    // TODO: Implement setSign() method.
  }
  
  /**
   * @param \Colibri\Pricing\Currency\CurrencyInterface $currency
   * @return float
   */
  public function rateTo(\Colibri\Pricing\Currency\CurrencyInterface $currency): float
  {
    // TODO: Implement rateTo() method.
  }
  
  /**
   * @return string
   */
  public function toPrint()
  {
    // TODO: Implement toPrint() method.
  }
});

var_dump($price);