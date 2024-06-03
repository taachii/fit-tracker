{extends file="form.tpl"}

{block name=content}
  <div class="container-fluid text-center">
    <span class="homeText">Zacznij śledzić swoje postępy już dziś!</span>
  </div>
  <hr>
  <div class="homeScreen text-center mt-4">
    <a href="{$conf->action_root}view_login">
      <button type="button" class="btn btn-outline-primary">
        <strong>Zaloguj się</strong>
      </button>
    </a>
    <a href="{$conf->action_root}view_register">
      <button type="button" class="btn btn-primary">
        <strong>Stwórz konto</strong>
      </button>
    </a>
    <img src="{$conf->app_url}/assets/images/progress.png" alt="">
  </div>
{/block}
