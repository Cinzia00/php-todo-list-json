<?php

$todo_list = file_get_contents('./todo.json');
echo $todo_list;

$new_todo_list = json_decode($todo_list, true);