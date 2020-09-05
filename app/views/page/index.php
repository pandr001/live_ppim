<?php
    $this->view('includes/header',$data);

    if ($data['crud']=='r' || $data['crud']=='d') {

        $this->view($data['view'].'/list',$data);

    }
    elseif ($data['crud']=='c' || $data['crud']=='u') {

        $this->view($data['view'].'/form',$data);

    }

    $this->view('includes/footer',$data);
?>