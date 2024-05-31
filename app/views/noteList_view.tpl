{extends file="main.tpl"}

{block name=content}
 <div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Witaj, {$user['username']}!</h4>
        <span class="ml-1">Dodaj, usuń lub edytuj swoje notatki treningowe!</span>
      </div>
    </div>
    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <a href="profil">
        <button type="button" class="btn-lg btn-info">
          Nowa notatka
          <span class="btn-icon-right">
            <i class="fa fa-plus color-info"></i>
          </span>
        </button>
      </a>
    </div>
  </div>
  <div class="row">
    {if !empty($notes)}
    {foreach $notes as $n}
    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 ">
      <div class="card">
          <div class="card-header">
            <h5 class="card-title">{$n['noteTitle']}</h5>
          </div>
          <div class="card-body">
            <ul>
              {foreach $n['entries'] as $e}
              <li>
                {$e['exerciseName']}: {$e['sets']} x {$e['reps']}
                {if $e['typeName'] == 'isometric'}s{/if}
              </li>
              {/foreach}
            </ul>
          </div>
          <div class="card-footer d-sm-flex justify-content-between">
            <div class="card-footer-link mb-4 mb-sm-0">
              <p class="card-text text-dark d-inline">Dodano: {$n['creationDate']}</p>
              </div>
              <div>
                <a href="javascript:void()" class="btn btn-outline-info">Edytuj</a>
                <a href="javascript:void()" class="btn btn-outline-danger">
                  <i class="fa fa-trash color-danger"></i>
                </a>
            </div>
          </div>
      </div>
    </div>
    {/foreach}
    {else}
      <p>Nie masz jeszcze żadnych notatek...</p>
    {/if}
  </div>
 </div>
{/block}