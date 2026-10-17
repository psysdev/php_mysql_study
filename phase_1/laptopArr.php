<?php
    $laptop = ["brand" => "ROG","AVAILABLE"=>true];
    foreach ($laptop as $key => $val):
        if ($key === "AVAILABLE"):
            if ($val === true):
                echo "laptop is available";
            else:
                echo " laptop is not available";
            endif;
        endif;
    endforeach;
?>