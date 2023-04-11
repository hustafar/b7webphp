<?php

class Calculadora {
  private float $result = 0;

  public function add($value) {
    $this->result += $value;
  }

  public function sub($value) {
    $this->result -= $value;
  }

  public function multiply($value) {
    $this->result *= $value;
  }

  public function divide($value) {
    $this->result /= $value;
  }

  public function total() {
    return $this->result;
  }

  public function clear() {
    $this->result = 0;
  }
}