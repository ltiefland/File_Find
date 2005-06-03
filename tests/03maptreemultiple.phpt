--TEST--
File_Find::mapTreeMultiple()
--SKIPIF--
<?php 
include('./setup.php');
print $status; 
?>
--FILE--
<?php 
require_once('./setup.php');

$ff = new File_Find();
$result0  = $ff->mapTreeMultiple('/tmp/File_Find/dir/') ;
$result1  = $ff->mapTreeMultiple('/tmp/File_Find/dir') ;
$result2 = File_Find::mapTreeMultiple('/tmp/File_Find/dir/') ;

print_r($result0);
print_r($result1);
print_r($result2);

?>
--GET--
--POST--
--EXPECT--
Array
(
    [0] => 1.txt
    [1] => 2.txt
    [dir2] => Array
        (
            [0] => 3.txt
            [1] => 3.bak
        )

    [dir3] => Array
        (
            [0] => 4.txt
            [1] => 4.bak
        )

    [txtdir] => Array
        (
            [0] => 5.txt
        )

)
Array
(
    [0] => 1.txt
    [1] => 2.txt
    [dir2] => Array
        (
            [0] => 3.txt
            [1] => 3.bak
        )

    [dir3] => Array
        (
            [0] => 4.txt
            [1] => 4.bak
        )

    [txtdir] => Array
        (
            [0] => 5.txt
        )

)
Array
(
    [0] => 1.txt
    [1] => 2.txt
    [dir2] => Array
        (
            [0] => 3.txt
            [1] => 3.bak
        )

    [dir3] => Array
        (
            [0] => 4.txt
            [1] => 4.bak
        )

    [txtdir] => Array
        (
            [0] => 5.txt
        )

)

