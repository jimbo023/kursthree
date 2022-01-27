<?php

require_once "Service/require.php";

function clientCode(AbsctractFactory $factory)
{
    $MySQL = $factory->SelectMySQL();
    $OracleSQL = $factory->SelectOracleSQL();
    $PostgreSQL = $factory->SelectPostgreSQL();


    echo $MySQL->ConnectingDB() . PHP_EOL;
    echo $MySQL->RecordDB() . PHP_EOL;
    echo $MySQL->QueryBuilerDB() . "</br>";
    echo $OracleSQL->ConnectingDB() . PHP_EOL;
    echo $PostgreSQL->QueryBuilerDB();
}

clientCode(new DBFactory);