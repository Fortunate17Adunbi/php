<?php
#   file manipulation
#   readfile() : this outputs a file. it opens a file and read it
readfile('webdictionary.txt');echo "<br>";echo "<br>";echo "<br>";
readfile('data-types.php');echo "<br>";echo "<br>";echo "<br>";

#   fopen() : 
// we can also use the fopen() to open a file
// die is equivalent of exit
// the first parameter is the file we are handling
// the seecond parameter determines what we want to do with the file when opened
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo "<br><br>";

// the fread() reads an open file
// the 1st parameter of the fread is file to be read while 2nd parameter is  length of the what it is to be read
// we used filesize so as to ensure it reads everthing. but we can also specify numbers
    // echo fread($myfile, filesize('webdictionary.txt'));echo "<br><br>";
#   using fgets
// gets line from the file pointer(maybe name of the file or variable containing the name if the file)
// the first parameter is a valid file pointer
// the second parameter is the length to be read
// this reads only one line
    // echo fgets($myfile);

#   fgetc
// it reads only one character  
    // echo fgetc($myfile);
    // this prints character one by one untill the end of the file
    // while(!feof($myfile)) {
    //     echo fgetc($myfile);
    // }
    // fclose($myfile);
#   feof()
// checks for end of file. it can be used to loop data of unknown lenght 
// this ensures it print the whole file
// i.e if it is not end of file continuing printing 
while(!feof($myfile)) {
    echo fgets($myfile);
}
fclose($myfile);

// the fclose is used to closed opened files. 
// the parameter required is the name or variable holding the name of the file to be closed
// it is good practice to close files that have been opend when done. 

#   file create and write
// if we use ther fopen() on a file that does not exist, it creates the file only if it was opend for writting 'w', or appending 'a'
// this creates a new text file 'testfile' in this directory
// this file is opened for writting
$myfile2 = fopen("testfile.txt", "w") or die ("Unable to open file");

#   php writting to file 
// we use fwrite() to write to file 
// the first parametr is the file we are writting to
// the second parameter is what we want to input(it may be direct or within a variable) 
$txt = "John Doe\n";
fwrite($myfile2, $txt);
$txt = "Jane Doe\n";
fwrite($myfile2, $txt);
fclose($myfile2);

// when we open a file for writting any data there will be erased
// you will see that the txt in the file have been erased even when we did not overwrite the variable
$myfile3 = fopen("testfile.txt", "w") or die ("Unable to open file");
$txt1 = "Mickey Mouse\n";
fwrite($myfile3, $txt1);
$txt1 = "Minnie Mouse\n";
fwrite($myfile3, $txt1);









