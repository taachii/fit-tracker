{extends file="main.tpl"}

{block name=content}
<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-sm-6">
          <h4>Role</h4>  
        </div>
        <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
          <a href="{$conf->action_root}roleAdd">
            <button type="button" class="btn-lg btn-info">
              Nowa rola
              <span class="btn-icon-right">
                <i class="fa fa-plus color-info"></i>
              </span>
           </button>
          </a>  
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nazwa roli</th>
              <th scope="col">data stworzenia</th>
              <th scope="col">czy aktywna</th>
              <th scope="col">data dezaktywacji</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          {foreach $roles as $r}
          {strip}
            <tr>
              <td>{$r['idRole']}</td>
              <td>{$r['roleName']}</td>
              <td>{$r['creationDate']}</td>
              <td>{$r['isActive']}</td>
              <td>{$r['deactivationDate']|default:'&#8213'}</td>
              <td>
                <span>
                  <a href="{$conf->action_root}view_roleEdit/{$r["idRole"]}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edytuj">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a href="{$conf->action_root}roleDeactivate/{$r["idRole"]}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Dezaktywuj">
                    <i class="fa fa-close"></i>
                  </a>
                  <a href="{$conf->action_root}roleActivate/{$r["idRole"]}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Aktywuj">
                    <i class="fa fa-check"></i>
                  </a>
                  <a href="{$conf->action_root}roleDelete/{$r["idRole"]}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Usuń">
                    <i class="fa fa-trash"></i>
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