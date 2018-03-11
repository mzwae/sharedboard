<div>
  <?php if (isset($_SESSION['is_logged_in'])): ?>
    <a href="<?=ROOT_URL?>shares/add" class="btn btn-success btn-share">Share something</a>
  <?php endif; ?>
  <?php foreach ($viewmodel as $item) : ?>
    <div class="well">
      <h3><?=$item['title']?></h3>
      <small><?=$item['create_date']?></small>
      <hr>
      <p><?=$item['body']?></p>
      <br>
      <a class="btn btn-default" href="<?=$item['link']?>" target="_blank">Check it out!</a>
    </div>
  <?php endforeach; ?>
</div>
