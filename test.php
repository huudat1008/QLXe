<?php
    $allowTypes = array('jpg','png','jpeg','gif');
    foreach($allowTypes as $key => $val)
    {
        $i = $key+1;
        echo 'hinh'.$i;
        echo $val;
        echo $allowTypes[$key];
    }
?>