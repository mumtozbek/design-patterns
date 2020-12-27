<?php

interface StringFilter {
  public function getData(String $data);
}

class HtmlFilter implements StringFilter {
  protected $filter;

  public function __construct($filter) {
    $this->filter = $filter;
  }

  public function getData(String $data) {
    $data = strip_tags($data);

    return $this->filter->getData($data);
  }
}

class RegexFilter implements StringFilter {
  protected $filter;

  public function __construct($filter) {
    $this->filter = $filter;
  }

  public function getData(String $data) {
    $data = preg_replace('#\d+#', '', $data);

    return $this->filter->getData($data);
  }
}