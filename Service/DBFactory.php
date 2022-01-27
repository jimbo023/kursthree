<?php

class DBFactory extends AbsctractFactory
{
    public function SelectMySQL(): DB
    {
        return new MySQL();
    }
    public function SelectPostgreSQL(): DB
    {
        return new PostgreSQL();
    }
    public function SelectOracleSQL(): DB
    {
        return new OracleSQL();
    }
}