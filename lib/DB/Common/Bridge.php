<?php


namespace Lib\DB\Common;

abstract class Bridge
{
    private $connection;

    public function __construct()
    {
        $obj = new Connector();
        $this->connection = $obj->getConnect();
    }

    public function fromDB()
    {
        $add = $this->connection->prepare($this->getSqlString(), array(\PDO::ATTR_CURSOR => \PDO::CURSOR_SCROLL));
        $add->execute();
        return $add;
    }

    public abstract function getSqlString();
}