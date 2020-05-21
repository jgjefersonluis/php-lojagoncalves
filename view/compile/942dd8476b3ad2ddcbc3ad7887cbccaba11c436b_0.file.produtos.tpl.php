<?php
/* Smarty version 3.1.36, created on 2020-05-21 17:21:51
  from 'C:\xampp\htdocs\lojagoncalves\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec69c8f6d3f59_47699139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '942dd8476b3ad2ddcbc3ad7887cbccaba11c436b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lojagoncalves\\view\\produtos.tpl',
      1 => 1590074500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec69c8f6d3f59_47699139 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Lista de produtos</h3>
<hr>
    <section id="pagincao" class="row">
       <center>
          PAGINAS
       </center>
    </section>
         
    <!--  começa lista de produtos  ---->   
  <section id="produtos" class="row">  
 
<ul style="list-style: none" >
    
                <div class="row" id="pularliha">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
             
        <li class="col-md-4">

            <div class="thumbnail">

                <a href="
                <?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>

                ">


                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" > 

                    <div class="caption">

                        <h4 class="text-center">
                        <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4> 

                        <h3 class="text-center text-danger">
                        <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>

                    </div>

                </a>

            </div>


        </li>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

         </div>
         
    
</ul>
    
    </section>
    

 





<?php }
}
