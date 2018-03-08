<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something!</h3>
  </div>
  <div class="panel-body">
    <form class="" action="index.html" method="post">
      <div class="form-group">
        <label>Share Title</label>
        <input type="text" name="title" class="form-control">
      </div>
      <div class="from-group">
        <label>Body</label>
        <textarea name="body" rows="8" cols="80" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label>Link</label>
        <input type="text" name="link" class="form-control">
      </div>
      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      <a class="btn btn-danger" href="<?=ROOT_URL?>shares">Cancel</a>
    </form>
  </div>

</div>
