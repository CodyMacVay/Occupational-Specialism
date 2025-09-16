<?php

function usr_msg()
{
    if (isset($_SESSION['msg'])) {
        if(str_contains($_SESSION['msg'],"Error")){
            $msg ="<div id = 'error'> USER MESSAGE: ".$_SESSION['msg']."</div>";

        } else {
            $msg = "<div id = 'umsg'> USER MESSAGE: ".$_SESSION['msg']."</div>";
        }
        $msg = 'USER MESSAGE: ' . $_SESSION['msg'];
        $_SESSION['msg'] = '';
        unset($_SESSION['msg']);
        return $msg;
    } else {
        return "";
    }
}