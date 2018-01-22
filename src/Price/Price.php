<?php declare(strict_types=true);

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
   * @var integer
   */
  protected $precision;
  
  /**
   * @var CurrencyInterface
   */
  protected $currency;
  
  public function __construct(float $price, CurrencyInterface $currency)
  {
    $this->value = $price;
    $this->currency = $currency;
  }
  
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
  public function setPrecision(integer $precision): PriceInterface
  {
    $this->precision = $precision;
    
    return $this;
  }
  
  /**
   * @inheritDoc
   */
  public function getPrecision(): integer
  {
    return $this->precision;
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
  
  /**
   * @inheritDoc
   */
  public function toPrint()
  {
    return sprintf('%s %s', $this->getValue(), $this->getCurrency()->toPrint());
  }
  
}