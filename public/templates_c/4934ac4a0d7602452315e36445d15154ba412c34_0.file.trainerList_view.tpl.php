<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:48:32
  from 'C:\xampp\htdocs\fit-tracker\app\views\trainerList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e727086fa55_77270341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4934ac4a0d7602452315e36445d15154ba412c34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\trainerList_view.tpl',
      1 => 1717465531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:trainerListTable.tpl' => 1,
  ),
),false)) {
function content_665e727086fa55_77270341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_739381488665e7270857aa4_44828931', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_739381488665e7270857aa4_44828931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_739381488665e7270857aa4_44828931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
    </div>
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Trenerzy</h4>  
        </div>
        <div class="col-lg-6">
          <form id="search-form" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
trainerListPart', 'table'); return false;">
            <div class="input-group mb-3">
              <input type="text" class="input-rounded form-control" placeholder="Szukany użytkownik" name="searchValue" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->searchValue;?>
">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Filtruj</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
        <div id="table">
        <?php $_smarty_tpl->_subTemplateRender("file:trainerListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <br><br>
        <div class="container-fluid text-center">
          <em>*Jeśli opcja wysłania prośby o współpracę do trenera stała się aktywna, a wcześniej nie była, to oznacza, że trener odrzucił twoją prośbę lub zakończyliście dotychczasową współpracę.*</em>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
