<?php

namespace Practice;

class Chaining
{
    public $sql;

    public function name()
    {
        echo "ümit ";
        return $this;
    }

    public function surname()
    {
        echo "uz ";
        return $this;
    }

    public function age()
    {
        echo "23 ";
        return $this;
    }

    public function select(string $column)
    {
        $this->sql = 'SELECT ' . $column . ' FROM ';
        return $this;
    }

    public function where($column,$value)
    {
        $this->sql .= 'WHERE ' . $column . ' = ' . $value;
        return $this;
    }

    public function limit($number=1)
    {
        $this->sql .= ' LIMIT ' . $number . ';';
        return $this;
    }
    /*
        public function join($type)
        {

        }

        public function triggers()
        {

        }

        public function constraints()
        {

        }
    */
}

$ch = new Chaining();

//$ch->name()->surname()->age();

$sql =  $ch->select('*')->where('id',5)->limit(2);
print_r($sql->sql);