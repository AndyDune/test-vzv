<?php


use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;


$module_id = 'bex.d7dull';

Loc::loadMessages($_SERVER['DOCUMENT_ROOT'].BX_ROOT."/modules/main/options.php");
Loc::loadMessages(__FILE__);

\Bitrix\Main\Loader::IncludeModule($module_id);


$tbc = new CAdminTabControl('TabControl',array());
?>
<?$tbc->Begin();?>
<button onclick="Animation(this);">Нажми меня</button>
<script type="text/javascript">

   function Animation(target){
         console.log(target);
   }

</script>
<?$tbc->End();?>


