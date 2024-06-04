{extends file="main.tpl"}

{block name=content}
<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Podopieczni</h4>  
        </div>
        <div class="col-lg-6">
          <form action="{$conf->action_url}view_traineeList">
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
        {if empty($trainees)}
          <div class="container-fluid">
            Nie masz jeszcze żadnych podopiecznych
          </div>
        {else}
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">nazwa użytkownika</th>
              <th scope="col">e-mail</th>
              <th scope="col">start współpracy</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          {foreach $trainees as $t}
          {strip}
            <tr>
              <td>{$t['username']}</td>
              <td>{$t['email']}</td>
              <td>{$t['startDate']}</td>
              <td>
                <a href="{$conf->action_root}view_traineeNoteList/{$t['idUser']}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wyświetl notatki">
                  <i class="fa fa-eye"></i>
                </a>
                <a onclick="confirmLink('{$conf->action_root}mentorshipEndTrainer/{$t['idUser']}', 'Czy na pewno chcesz zakończyć współpracę?')" class="mr-4" data-toggle="tooltip" data-placement="top" title="Zakończ współpracę">
                  <i class="fa fa-close"></i>
                </a>
                <a href="mailto:{$t['email']}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wyślij wiadomość">
                  <i class="fa fa-inbox"></i>
                </a>
              </td>
            </tr>
          {/strip}
          {/foreach}  
          </tbody>
        </table>
        {/if}
      </div>
    </div>
  </div>
</div>
{/block}