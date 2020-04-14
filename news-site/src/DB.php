<?php declare(strict_types=1);

class DB
{
    protected function getConnection(array $config)
    {
        return mysqli_connect($config['db']['host'], $config['db']['user'], $config['db']['password'], $config['db']['name']);
    }



}