<?php include 'header.php'; ?>


<section class="title">
  <div class="container">
    <div class="row-fluid">
      <div class="span6">
        <h1>Registration</h1>
      </div>
      <div class="span6">
        <ul class="breadcrumb pull-right">
          <li><a href="index.html">Home</a> <span class="divider">/</span></li>
          <li><a href="#">Pages</a> <span class="divider">/</span></li>
          <li class="active">Registration</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- / .title -->       


<section id="registration-page" class="container">
  <form class="center" action='' method="POST">
    <fieldset class="registration-form">
      <div class="control-group">
        <!-- Username -->
        <div class="controls">
          <input type="text" id="username" name="username" placeholder="Username" class="input-xlarge">
        </div>
      </div>

      <div class="control-group">
        <!-- E-mail -->
        <div class="controls">
          <input type="text" id="email" name="email" placeholder="E-mail" class="input-xlarge">
        </div>
      </div>

      <div class="control-group">
        <!-- Password-->
        <div class="controls">
          <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge">
        </div>
      </div>

      <div class="control-group">
        <!-- Password -->
        <div class="controls">
          <input type="password" id="password_confirm" name="password_confirm" placeholder="Password (Confirm)" class="input-xlarge">
        </div>
      </div>

      <div class="control-group">
        <!-- Button -->
        <div class="controls">
          <button class="btn btn-success btn-large btn-block">Register</button>
        </div>
      </div>
    </fieldset>
  </form>
</section>
<!-- /#registration-page -->

<?php include 'alt-bolum.php'; include 'footer.php'; ?>