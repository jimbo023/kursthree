<?php

abstract class AbsctractFactory
{
    abstract public function SelectMySQL(): DB;
    abstract public function SelectPostgreSQL(): DB;
    abstract public function SelectOracleSQL(): DB;
}
