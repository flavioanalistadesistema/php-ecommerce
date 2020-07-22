<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileName">
    <button type="submit">Send</button>
</form>

<?php

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {

    $file = $_FILES['fileName'];
    if ($file['error']) {

        throw new Exception('Error'. $file['error']);
    }

    $dirFileName = 'uploads1';

    if (!is_dir($dirFileName)) {

        mkdir($dirFileName, 0777);
    }

    if (! move_uploaded_file($file['tmp_name'], $dirFileName . DIRECTORY_SEPARATOR .  $file['name'])) {
        
        throw new Exception('Error');
    }

    echo 'Upload efetuado com sucesso';


}

?>