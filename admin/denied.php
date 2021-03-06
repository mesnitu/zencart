<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: denied.php 18698 2011-05-04 14:50:06Z wilt $
 */

require('includes/application_top.php');
require_once('includes/template/common/tplHtmlHead.php');
require_once('includes/template/common/tplHtmlHeadLegacy.php');
?>
<link rel="stylesheet" type="text/css" href="includes/admin_access.css" />
</head>
<body>
<!-- header //-->
<?php require('includes/template/common/tplHeader.php'); ?>
<!-- header_eof //-->

<!-- body //-->
<div id="pageWrapper">
  <h1><?php echo TEXT_ACCESS_DENIED ?></h1>
  <h1><?php echo TEXT_CONTACT_SITE_ADMIN ?></h1>
  <h1><?php echo TEXT_APOLOGY ?></h1>
</div>
<!-- body_eof //-->

<!-- footer //-->
<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
<!-- footer_eof //-->
<br>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>
