<?php


use Amit73\Mvc\core\route;




route::get("user/index",["user","index"]);

route::get("user/create",["user","create"]);

route::get("delete",["user","delete"]);


route::get("update",["user","update"]);
