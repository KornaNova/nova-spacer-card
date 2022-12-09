<?php

namespace Ideatocode\NovaSpacerCard;

use Laravel\Nova\Card;

class NovaSpacerCard extends Card
{
  /**
   * The width of the card (1/3, 1/2, or full).
   *
   * @var string
   */
  public $width = 'full';


  /**
   * The height of the card.
   *
   * @var string
   */
  public $height = '1/3';

  /**
   * Extra classes to add to the card.
   *
   * @var string
   */
  public $classes = '';


  /**
   * Extra css style to add to the card.
   *
   * @var string
   */
  public $style = '';

  /**
   * Get the component name for the element.
   *
   * @return string
   */
  public function component()
  {
    return 'nova-spacer-card';
  }

  /**
   * Set the classes of a card.
   *
   * @return $this
   */
  public function classes(string $classes)
  {
    $this->classes = $classes;
    return $this;
  }
  /**
   * Set the style of a card.
   *
   * @return $this
   */
  public function style(string $style)
  {
    $this->style = $style;
    return $this;
  }

  /**
   * Prepare the element for JSON serialization.
   *
   * @return array<string, mixed>
   */
  public function jsonSerialize(): array
  {
    return array_merge([
      'classes' => $this->classes,
      'style' => $this->style,
    ], parent::jsonSerialize());
  }
}