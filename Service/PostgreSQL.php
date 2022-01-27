<?php

class PostgreSQL implements DB
{
    public function ConnectingDB(): string
    {
        return "Connect to PostgreSQL";
    }
    public function RecordDB(): string
    {
        return 'Record to PostgreSQL';
    }
    public function QueryBuilerDB(): string
    {
        return 'QueryBuiler to PostgreSQL';
    }
}