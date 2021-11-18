<?php


namespace Lib\DB;


class Where
{
    protected $conditions;
    protected $whereString;

    public function __construct($conditions)
    {
        $this->conditions = $conditions;
        $this->buildWhereString();
    }

    public function getWhereString() {
        $where = ' WHERE ' . $this->whereString;
        return $where;
    }

    private function buildWhereString()
    {
        if(is_string($this->conditions)) {
            $this->whereString = $this->conditions;
            $valueExploded = explode(' = ', $this->whereString);
            $this->whereString = $valueExploded[0] . " = " . "'".$valueExploded[1]."'";
        } elseif (is_array($this->conditions)) {
            foreach ($this->conditions as $key => $value) {
                $temp = '';
                if(is_int($key)) {
                    if (is_string($value)) {
                        if(!empty($this->whereString)) {
                            $this->whereString .= ' AND ';
                        }
                        $valueExploded = explode(' = ', $value);
                        if($value !== end($this->conditions)) {
                            $this->whereString .=  $valueExploded[0] . " = " . "'".$valueExploded[1]."'". ' AND ';
                        } else {
                            $this->whereString .=  $valueExploded[0] . " = " . "'".$valueExploded[1]."'";
                        }
                    }

                    if(is_array($value)) {
                        foreach ($value as $innerKey => $innerValue) {
                            $innerTemp = '';
                            if($innerValue !== end($value)) {
                                $innerTemp .= $innerKey . ' = ' . "'" . $innerValue . "'" . ' AND ';
                            }
                            else {
                                $innerTemp .= $innerKey . ' = ' . "'" . $innerValue . "'";
                            }
                            $this->whereString .= $innerTemp;
                        }
                    }
                } else {
                    if($value !== end($this->conditions)) {
                        $temp .= $key . ' = ' . "'" . $value . "'" . ' AND ';
                    }
                    else {
                        $temp .= $key . ' = ' . "'" . $value . "'";
                    }
                    $this->whereString .= $temp;
                }
            }
        }
        return  $this->whereString;
    }
}