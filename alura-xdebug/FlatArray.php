<?php

class FlatArray
{
  private array $flatArray;

  public function __construct(array $originalArray) {
    $this->flatArray = [];
    $this->flattenArray($originalArray);
  }

  public function flattenArray(array $originalArray)
  {
    $this->flatArray = array_merge(...$originalArray);
    // foreach ($originalArray as $item) {
    //   $this->flatArray = array_merge($this->flatArray, $item);
    // }
  }

  public function getFlatArray(): Traversable {
    return new ArrayIterator($this->flatArray);
  }
}
