<?php include_once('engines/task/select.php') ?>
<div class="todolist">
    <div class="head-list">
      <span class="h1"><?= $todolist['title'] ?></span>
      <div class="edition-buttons-todolist">
        <form class="" action="index.html" method="post">
          <button type="button" name="button" class="btn btn-default pull-left">
            <i class="fa fa-lg fa-pencil-square" aria-hidden="true"></i>
          </button>
        </form>
        <form class="" action="engines/todolist/delete.php" method="post">
          <input type="hidden" name="id" value="<?= $todolist['id'] ?>">
          <button type="submit" name="button" class="btn btn-default pull-left">
            <i class="fa fa-lg fa-times" aria-hidden="true"></i>
          </button>
        </form>
      </div>
    </div>
    <form class="" action="engines/task/create.php" method="post">
      <div class="tasks-list">
        <input class="input-wright-task-list" id="value_todo_task" type="text" name="title" placeholder="What needs to be done?">
        <input class="btn-in-task-list" type="hidden"  value="<?= $todolist['id'] ?>" name="todolist_id"></input>
        <button class="btn-in-task-list" type="submit" id="btn_add_task_list" value="+" name="btn_sent"></button>
      </div>
    </form>
    <?php
      foreach(selectTasks($todolist['id']) as $task) {
        include('partials/task/_task.php');
      }
    ?>
    </div>
