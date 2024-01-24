<?php
var_dump($_FILES);

/**
 * 1. enregistrer le nom de l'image en B.D.
 * $_FILES['test']['name']
 * 2. enregisrer reelement l'image
 */

$tmpName = $_FILES['test']['tmp_name'];
$name = $_FILES['test']['name'];
$size = $_FILES['test']['size'];
$error = $_FILES['test']['error'];

move_uploaded_file($tmpName, './upload/'.$name);
