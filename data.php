<?php
// Import menu.php
require_once('project.php');



// Move the declarations here
$zoddock = new Project('ZODDOCK PROJECT','Website with paragraph backend done in django in django','images/women.jpg','yes');
$mondy= new Project('MONDY','Website for a cleaning company','images/women.jpg','Website for a cleaning company','no');


$projects = array($zoddock, $mondy, );
?>