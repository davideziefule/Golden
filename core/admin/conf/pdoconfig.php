<?php
$DB_host = "ehc1u4pmphj917qf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$DB_user = "rcwpyucfd2g3b9zb";
$DB_pass = "qte6tr3x37jikegu";
$DB_name = "tgtgh4tdbn0259jb";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
