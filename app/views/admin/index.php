<div class="uk-container" uk-height-viewport>
  <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle" uk-grid>
    <div class="uk-width-large uk-animation-slide-bottom-small bind-animation">
      <div class="uk-card uk-margin uk-card-default uk-padding">
        <h3 class="uk-card-title uk-text-bold uk-text-center uk-margin-remove-bottom">LOGIN</h3>
        <p class="uk-text-center uk-margin-remove-top "></p>

        <form action="<?= BASEURL; ?>/admin/index" method="post">
            <?php Flasher::errorLogin(); ?>
            <div class="uk-margin">
              <div class="uk-inline uk-width-1-1">
                <input class="uk-input" type="text" name="username" id="username" placeholder="Username" required>
              </div>
            </div>

            <div class="uk-margin">
              <div class="uk-inline uk-width-1-1">
                <input class="uk-input" type="password" name="password" id="password" placeholder="Password" required>
              </div>
            </div>

            <div class="uk-margin">
              <button class="uk-button uk-button-primary uk-width-1-1" type="submit" name="login">Login</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>