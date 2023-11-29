<?php
function load_all_ctdh()
{
    $sql = "SELECT * FROM ct_dh  ORDER BY ma_ct desc";
    return pdo_query($sql);
}

function delete_ctdh_item($ma_ct)
{
    $mdh = "";
    foreach ($ma_ct as $item) {
        $mdh .= $item . ", ";
        $mdh = rtrim($mdh, ",");
        $sql = "DELETE FROM ct_dh WHERE ma_dh IN ($mdh)";
        pdo_execute($sql);
    }
}
function delete_ct($ma_ct)
{
    $sql = "DELETE FROM ct_dh WHERE ma_ct = $ma_ct";
    pdo_execute($sql);
}