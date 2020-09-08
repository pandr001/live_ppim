<?php
  if(!empty($data['error']))
    error_message($data['error']);
  if(!empty($data['success']) )
    success_message($data['success']);
?>