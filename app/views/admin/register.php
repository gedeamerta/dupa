<div class="uk-container" uk-height-viewport>
  <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle" uk-grid>
    <div class="uk-width-large uk-animation-slide-bottom-small bind-animation">
      <div class="uk-card uk-margin uk-card-default uk-padding">
        <h3 class="uk-card-title uk-text-bold uk-text-center uk-margin-remove-bottom">REGISTER ADMIN</h3>
        <?= Flasher::errorRegister(); ?>

          <form action="<?= BASEURL; ?>/admin/register" method="post">
            <div class="uk-margin">
              <div class="uk-inline uk-width-1-1">
                <label for="">Username</label><br>
                <input class="uk-input" type="text" name="username" id="username" placeholder="Username" required>
              </div>
            </div>

            <div class="uk-margin">
              <div class="uk-inline uk-width-1-1">
                <label for="">Email</label><br>
                <input class="uk-input" type="text" name="email" id="email" placeholder="Email" required>
              </div>
            </div>

            <div class="uk-margin">
              <div class="uk-inline uk-width-1-1">
                <label for="">Password</label><br>
                <input class="uk-input" type="password" name="password" id="password" placeholder="Password" required>
              </div>
            </div>

            <div class="uk-margin">
              <div class="uk-inline uk-width-1-1">
                <label for="">Re-type Password</label><br>
                <input class="uk-input" type="password" name="password_conf" id="password_conf" placeholder="Re-TypePassword">
              </div>
            </div>

            <div class="uk-margin">
                <button class="uk-button uk-button-primary uk-width-1-1" type="submit" name="register">Register</button>
            </div>

            <div class="uk-text-small uk-text-center">
              Already have Account ? <a href="<?= BASEURL; ?>/admin/index">Login Here</a>
            </div>

          </form>
      </div>
      </div>
    </div>
  </div>
</div>
