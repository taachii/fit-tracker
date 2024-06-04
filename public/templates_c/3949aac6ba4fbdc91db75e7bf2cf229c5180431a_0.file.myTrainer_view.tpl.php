<?php
/* Smarty version 4.3.4, created on 2024-06-04 06:13:21
  from 'C:\xampp\htdocs\fit-tracker\app\views\myTrainer_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e946113d6f7_71011096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3949aac6ba4fbdc91db75e7bf2cf229c5180431a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\myTrainer_view.tpl',
      1 => 1717466947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e946113d6f7_71011096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1027688539665e9460d5e995_78665681', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1027688539665e9460d5e995_78665681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1027688539665e9460d5e995_78665681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4><?php if (!empty($_smarty_tpl->tpl_vars['trainer']->value)) {?>Mój trener:<?php } else { ?>Nie masz trenera.<?php }?></strong></h4>
      </div>
    </div>
  </div>
  <?php if (!empty($_smarty_tpl->tpl_vars['trainer']->value)) {?>
  <div class="row">
    <div class="container-fluid d-flex justify-content-center">
      <div class="col-sm-9">
        <div class="card">
          <div class="myTrainer card-body">
            <div class="basic-list-group">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nazwa użytkownika:</strong> <?php echo (($tmp = $_smarty_tpl->tpl_vars['trainer']->value['username'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</li>
                <li class="list-group-item"><strong>E-mail:</strong> <?php echo (($tmp = $_smarty_tpl->tpl_vars['trainer']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</li>
                <li class="list-group-item"><strong>Data rozpoczęcia współpracy:</strong> <?php echo (($tmp = $_smarty_tpl->tpl_vars['trainer']->value['startDate'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</li>
                <li class="list-group-item">
                  <div class="container-fluid">
                    <div class="card-header">
                      <div class="col-sm-6 p-md-0">
                        <h5 class="card-title"></h5>
                      </div>
                      <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <div>
                          <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['trainer']->value['email'];?>
" class="btn btn-outline-info btn-lg">Wyślij wiadomość
                          </a>
                          <button onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mentorshipEndTrainee/<?php echo $_smarty_tpl->tpl_vars['trainer']->value['idUser'];?>
', 'Czy na pewno chcesz zakończyć współpracę?')" class="btn btn-outline-danger btn-lg"  data-toggle="tooltip" data-placement="top" title="Zakończ współpracę">
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
  <?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
