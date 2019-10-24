<?php

namespace App\Model;

use TexLab\MyDB\DbEntity;

class UsersModel extends DbEntity
{

    public function getPage(?int $page = null): array
    {
        $this
        ->reset()
        ->setSelect("`workers`.`id`, `workers`.`name`, `workers`.`surname`, `workers`.`login`, `workers`.`password`, `group_workers`.`description` AS 'workers_group_id'")
        ->setFrom("`workers`, `group_workers`")
        ->setWhere("`group_workers`.`id` = `workers`.`user_group_id`")
        ->setOrderBy("`users`.`id`");
        return parent::getPage($page);
    }


}