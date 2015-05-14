<?php
require_once '../../frm/init.php';


$resp   = array(
    "state" => 1,
    "data"  => null,
    "error" => null
);


$r = Ftl_ClaseBase::getDB()->fetchAllNumeric( "select distinct evento from forms order by 1");

$result = array();
foreach ($r as $f)
{
	array_push($result,$f[0]);
}
//var_dump($result);
$resp["data"] = $result;
echo Ftl_JsonUtil::encode($resp);

?>