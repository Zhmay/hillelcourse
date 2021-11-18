<?php

namespace App\Models;

use App\Models\Common\Model;

class Post extends Model
{
    public function getPost(array $filters = []) : array
    {
        $select = $this->select();
        $select->setTableNames('posts');
//        $select->setWhereCondition('subject = title');
//        $select->setWhereCondition(['subject = title', 'author = Kirill']);
//        $select->setWhereCondition(['author' => 'Kirill', 'subject' => 'title']);
//        $select->setWhereCondition(['author = Kirill', ['subject' => 'title']]);


        if(!empty($filters)) {
            $select->setWhereCondition($filters);
        }

        $sql = $select->execute();
        return $sql;
    }


}