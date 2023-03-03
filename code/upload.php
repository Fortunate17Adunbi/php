<?php
// some $_FILES code
// $_FILES['filename']['name']; // the 'filename' is the name of the file on the user machine while the 'name' specifies we are referring to the name of the file
// $_FILES['filename']['error']; // the 'error' specifies the error code associated with the file upload
// $_FILES['filename']['size']; // the size of the uploaded file in byte
// $_FILES['filename']['tmp_name']; // the temporary filename in which the uploaded file is stored on the server
// $_FILES['userfile']['type']; // The mime type of the file, if the browser provided thisinformation. An example would be "image/gif". This mime type is howevernot checked on the PHP side and therefore don't take its valuefor granted. 
// $_FILES['userfile']['full_path'] // The full path as submitted by the browser is the name of the file with the extention
// for debuging
// print_r($_FILES);


// files by default are stored in the server temporary directory

// this is the directory we want to store the file
// $target_directory = 'upload/';
// // remember that files are stored in a temporary directory on the sever so we are storing te name of the file here
// // and making sure it is store in the directory we want so we concatenate
// // the basename returns the name of the given path so in this cntext returns the name of the file uploaded
// // the $uploadfile provides the full directory we want to move file to 
// $uploadfile = $target_directory . basename($_FILES['file_to_upload']['name']);//remember 'file_to_upload' is the name of the file we are uploading from the html code 
// // var_dump($uploadfile);
// echo '<pre>';

// // the move_uploaded_file recieve from where we are moving file from(the temporary directory in the server) as 1st parameter and the direcory we are moving it to as the 2nd parameter
// if (move_uploaded_file($_FILES['file_to_upload']['tmp_name'], $uploadfile)) {
//     echo "File is valid, and uploaded successfully";echo "<br>";
// }
// else {
//     echo $_FILES['file_to_upload']['error'];
// }
// the directory to upload the file
$directory = 'upload/';
// the file to be uploaded
// basename simply returns the name of the file
$file = $directory . basename($_FILES['file_to_upload']['name']);
// move_uploaded_file simply moves the file from the location temporarily stored on the sever to the exact place we want which is in file
// the second parameter cannot be a directory
if(move_uploaded_file($_FILES['file_to_upload']['tmp_name'], $file)) {
    echo "File uploaded successfully";
}
else {
    echo "Problem uploading file";
}

// echo 'Here is some more debugging info:';
// print_r($_FILES);

// we can use the $_FILES['filename']['type'] to reject file that do not match a certain requirement
// we can also use the $_FILES['filename']['size'] to reject any file that is too big or small

