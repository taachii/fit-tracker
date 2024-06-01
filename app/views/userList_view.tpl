{extends file="main.tpl"}

{block name=content}
<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Użytkownicy</h4>  
        </div>
        <div class="col-lg-6">
          <form action="{$conf->action_url}view_userList">
            <div class="input-group mb-3">
              <input type="text" class="input-rounded form-control" placeholder="Szukany użytkownik" name="search_value">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Filtruj</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nazwa użytkownika</th>
              <th scope="col">e-mail</th>
              <th scope="col">data rejestracji</th>
              <th scope="col">czy aktywny</th>
              <th scope="col">data dezaktywacji</th>
              <th scope="col">rola</th>
              <th scope="col">data ostatniej edycji</th>
              <th scope="col">kto edytował (id)</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          {foreach $users as $u}
          {strip}
            <tr>
              <td>{$u['idUser']}</td>
              <td>{$u['username']}</td>
              <td>{$u['email']}</td>
              <td>{$u['registrationDate']}</td>
              <td>{$u['isActive']}</td>
              <td>{$u['deactivationDate']|default: '&#8213'}</td>
              <td>{$u['roleName']|default: '&#8213'}</td>
              <td>{$u['editDate']|default: '&#8213'}</td>
              <td>{$u['idEditor']|default: '&#8213'}</td>
              <td>
                <span>
                  <a href="{$conf->action_root}view_userEdit/{$u["idUser"]}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edytuj">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a href="{$conf->action_root}userDeactivate/{$u["idUser"]}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Dezaktywuj">
                    <i class="fa fa-close"></i>
                  </a>
                  <a href="{$conf->action_root}userActivate/{$u["idUser"]}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Aktywuj">
                    <i class="fa fa-check"></i>
                  </a>
                </span>
              </td>
            </tr>
          {/strip}
          {/foreach}  
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
{/block}