<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sharedboard</title>
    <link rel="stylesheet" href="<?=ROOT_URL?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>assets/css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=ROOT_URL?>">Sharedboard</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?=ROOT_URL?>">Home</a></li>
          <li><a href="<?=ROOT_URL?>shares">Shares</a></li>

        </ul>
        <!-- <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form> -->
        <ul class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION['is_logged_in'])):?>
          <li>
            <a href="<?=ROOT_URL?>users/login">
              Welcome <?=$_SESSION['user_data']['name']?>
            </a>
          </li>
          <li><a href="<?=ROOT_URL?>users/logout">Logout</a></li>
        <?php else: ?>
          <li><a href="<?=ROOT_URL?>users/login">Login</a></li>
          <li><a href="<?=ROOT_URL?>users/register">Register</a></li>
        <?php endif; ?>

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container">
    <div class="row">
      <?php require($view); ?>
    </div>
  </div>
<script>
CKEDITOR.replace('postEditor');
</script>
</body>
<hr>
<footer class="text-primary text-center"> MZ &copy; <?=date("Y")?></footer>
</html>
