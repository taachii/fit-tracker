<table class="table table-bordered table-striped verticle-middle table-responsive-sm">
  <thead>
    <tr>
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
<div>
  <p>Strony: {$totalPages}</p>
</div>
<div class="pagination col-sm-12 mt-2 mt-sm-0">
<nav> 
  <ul class="pagination pagination-sm pagination-gutter">
    <li class="page-item page-indicator">
    {if $currentPage > 1}
      <a class="page-link" href="{$conf->action_root}view_userList/{$currentPage - 1}" {*onclick="ajaxPostForm('search-form'),'{$conf->action_root}userListPart/{$currentPage-1}', 'table'); return false;"*}>
        <i class="icon-arrow-left"></i>
      </a>
    {/if}
    </li>
    <li class="page-item active">
      <a class="page-link" href="{$conf->action_root}view_userList/{$currentPage}" {*onclick="ajaxPostForm('search-form'),'{$conf->action_root}userListPart/{$currentPage}', 'table'); return false;"*}>{$currentPage}</a>
    </li>
    <li class="page-item page-indicator">
    {if $currentPage < $totalPages}
      <a class="page-link" href="{$conf->action_root}view_userList/{$currentPage + 1}" {*onclick="ajaxPostForm('search-form'),'{$conf->action_root}userListPart/{$currentPage+1}', 'table'); return false;"*}>
        <i class="icon-arrow-right"></i>
      </a>
    {/if}
    </li>
  </ul>
</nav>
</div>