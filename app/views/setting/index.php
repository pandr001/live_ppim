<?php
    $this->view('includes/header',$data);

    if ($data['crud']=='R' || $data['crud']=='D') {
        $this->view('job/list',$data);
    }elseif ($data['crud']=='C' || $data['crud']=='C') {
        $this->view('job/form',$data);
    }

    $this->view('includes/footer',$data);
?>