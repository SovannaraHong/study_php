<!-- File Handling -->
<?php
// read file from file.txt
$file = file_get_contents('file.txt'); //read file
echo $file . '<br>';;
file_put_contents('file.txt', 'hello word2'); //write file

//check can write or read
if (is_writable('file.txt')) {
    echo 'can write' . '<br>';
} else {
    echo 'cannot write' . '<br>';
}
if (is_readable('file.txt')) {
    echo 'can read' . '<br>';
} else {
    echo 'cannot read' . '<br>';
}

?>