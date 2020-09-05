<?php
    if (isset($this->url[1])) {
      echo btn_back_2($this->url[0]);
    }
    elseif (!isset($this->url[1])) {
      echo btn_back($this->url[0].'/'.strtolower($data['title']));
    }
?>