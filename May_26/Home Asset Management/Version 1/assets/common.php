<?php

function usermessage(){  # function to check for a user message and return echoable string
    if(isset($_SESSION['usermessage'])){  # checks to see if it is set
        if(str_contains($_SESSION['usermessage'],"ERROR")){  # if it's an error
            $msg = "<div id='usererror'>".$_SESSION['usermessage']."</div>";  # formats string appropriately
        } else {  # if it's not an error
            $msg = "<div id='usermessage'>".$_SESSION['usermessage']."</div>";  # positive message given
        }
        unset($_SESSION['usermessage']);  # unsets the user message so it doesn't keep being displayed
    } else {
        $msg = "";  # if no message has been set, returns empty string.
    }
    return $msg;
}