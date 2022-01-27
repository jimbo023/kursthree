<?php

class MySQL implements DB
{
    public function ConnectingDB(): string
    {
        return "Connect to MySQL";
    }
    public function RecordDB(): string
    {
        return 'Record to MySQL';
    }
    public function QueryBuilerDB(): string
    {
        return 'QueryBuiler to MySQL';
    }
}