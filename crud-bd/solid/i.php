<?php

  // // Fere o I do SOLID pois o setAltitude não é aplivável para Pinguims, já que eles não voam

  // interface Aves {
  //   public function setLocation($lat, $lng);
  //   public function setAltitude($alt);
  //   public function render();
  // }

  // class Papagaio implements Aves {
   
  //   public function setLocation($lat, $lng) {}
  //   public function setAltitude($alt) {}
  //   public function render() {}

  // }

  // class Pinguim implements Aves {
   
  //   public function setLocation($lat, $lng) {}
  //   public function setAltitude($alt) {}
  //   public function render() {}
  
  // }

  //

  interface Aves {
    public function setLocation($lat, $lng);
    public function render();
  }

  interface AvesQueVoam extends Aves {
    public function setAltitude($alt);
  }

  class Papagaio implements AvesQueVoam {
   
    public function setLocation($lat, $lng) {}
    public function setAltitude($alt) {}
    public function render() {}

  }

  class Pinguim implements Aves {
   
    public function setLocation($lat, $lng) {}
    public function render() {}
  
  }
