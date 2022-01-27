<?php

class OracleSQL implements DB
{
    public function ConnectingDB(): string
    {
        return "Connect to OracleSQL";
    }
    public function RecordDB(): string
    {
        return 'Record to OracleSQL';
    }
    public function QueryBuilerDB(): string
    {
        return 'QueryBuiler to OracleSQL';
    }
}