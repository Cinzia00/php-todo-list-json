<?php

$todo_list = json_decode(file_get_contents('./todo.json'));
// $todo_list = ["fare la spesa", "portare a spasso il cane", "ordinare una pizza", "chiamare la nonna"];

$new_todo = isset($_POST['todo']) ? $_POST['todo'] : null;

if($new_todo !== null) {
    $todo_list[] = $new_todo;
};

header('Content-Type: application/json');
$new_todo_list = json_encode($todo_list, true);
echo $new_todo_list;


file_put_contents('./todo.json', $new_todo_list);
