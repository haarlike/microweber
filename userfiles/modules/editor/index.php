<?php

if(user_id() == 0){
    return;
}
?>

<script type="text/javascript">
//mw.require('forms.js', true);
//mw.require('jquery-ui.js', true);

//mw.require("wysiwyg.js") ;


  mw.settings.liveEdit = true;

  mw.require("jquery");
  mw.require("liveadmin.js");
  mw.lin.require("jqueryui");
  mw.require("events.js");
  mw.require("url.js");
  mw.require("tools.js");
  mw.require("wysiwyg.js");
  mw.require("css_parser.js");
  mw.require ("forms.js");
  mw.require("files.js");
  mw.require("content.js", true);
  mw.require("liveedit.js");
  mw.require(mw.settings.includes_url + "css/liveedit.css");
  mw.require(mw.settings.includes_url + "css/wysiwyg.css");

  
  
  
</script>
<style>
.mw-sorthandle, .mw_master_handle {
 display:none !important; 	
}

</style>
<?php
$here = MW_INCLUDES_DIR;
  include($here.'toolbar'.DS.'wysiwyg.php');
include($here.'toolbar'.DS.'wysiwyg_tiny.php');
 

 