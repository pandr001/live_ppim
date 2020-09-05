<?php
  if(!empty($data['error']))
    error_message($data['error']);
  if(!empty($data['success']) )
    success_message($data['success']);
?>
<!-- All data error handling alert goes here -->