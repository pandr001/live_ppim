<?php 
if(isset($data['layout']['title']))
  echo ucfirst($data['layout']['title']);
else
  echo SYSTEM_NAME;
?>