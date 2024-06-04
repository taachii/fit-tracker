{extends file="main.tpl"}

{block name=content}
 <div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>{if !empty($trainer)}Mój trener:{else}Nie masz trenera.{/if}</strong></h4>
      </div>
    </div>
  </div>
  {if !empty($trainer)}
  <div class="row">
    <div class="container-fluid d-flex justify-content-center">
      <div class="col-sm-6">
        <div class="card">
          <div class="myTrainer card-body">
            <div class="basic-list-group">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nazwa użytkownika:</strong> {$trainer['username']|default: ""}</li>
                <li class="list-group-item"><strong>E-mail:</strong> {$trainer['email']|default: ""}</li>
                <li class="list-group-item"><strong>Data rozpoczęcia współpracy:</strong> {$trainer['startDate']|default: ""}</li>
                <li class="list-group-item">
                  <div class="container-fluid">
                    <div class="card-header">
                      <div class="col-sm-6 p-md-0">
                        <h5 class="card-title"></h5>
                      </div>
                      <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <div>
                          <a href="mailto:{$trainer['email']}" class="btn btn-outline-info btn-lg">Wyślij wiadomość
                          </a>
                          <button onclick="confirmLink('{$conf->action_root}mentorshipEndTrainee/{$trainer['idUser']}', 'Czy na pewno chcesz zakończyć współpracę?')" class="btn btn-outline-danger btn-lg"  data-toggle="tooltip" data-placement="top" title="Zakończ współpracę">
                            <i class="fa fa-close color-danger"></i>
                          </button>
                        </div>  
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
  {/if}
</div>
{/block}