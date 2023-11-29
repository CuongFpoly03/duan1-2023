<?php
function load_all_dh()
{
    $sql = "SELECT * FROM don_hang ORDER BY ma_dh desc";
    return pdo_query($sql);
}

function delete_dh_item($ma_dh)
{
    $mdh = "";
    foreach ($ma_dh as $item) {
        $mdh .= $item . ", ";
        $mdh = rtrim($mdh, ",");
        $sql = "DELETE FROM don_hang WHERE ma_dh IN ($mdh)";
        pdo_execute($sql);
    }
}
function delete_dh($ma_dh)
{
    $sql = "DELETE FROM don_hang WHERE ma_dh = $ma_dh";
    pdo_execute($sql);
}