<?php include_once('engines/task/html.php') ?>
<div class="save-task-list">
  <form action='engines/task/setCompleted.php' method="post">
    <div class="check">
      <input type="hidden" name="id" value="<?= $task['id'] ?>">
      <input type="checkbox" name="completed" <?= setCheckedHtml($task['is_completed']); ?> value="<?= $task['is_completed'] ?>">
    </div>
  </form>
  <div class="add-li-task-list" id="window_to_show_tasks">
    <span><?= $task['title'] ?></span>
  </div>
  <div class="edition-buttons-task pull-left">
    <form class="" action="index.html" method="post">
      <button type="button" name="button" class="btn btn-default pull-left">
        <i class="fa fa-lg fa-pencil-square" aria-hidden="true"></i>
      </button>
    </form>
    <form class="" action="" method="post">
      <button type="submit" class="btn btn-default pull-left">
        <i class="fa fa-lg fa-check-square" aria-hidden="true"></i>
      </input>
    </form>
    <form class="" action="engines/task/delete.php" method="post">
      <input type="hidden" name="id" value="<?= $task['id'] ?>">
      <button type="submit" name="button" class="btn btn-default pull-left">
        <i class="fa fa-lg fa-times" aria-hidden="true"></i>
      </button>
    </form>
  </div>
</div>
