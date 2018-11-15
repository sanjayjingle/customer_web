<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Stored Procedure Demo 1</title>
        <link rel="stylesheet" href="css/table.css" type="text/css" />
    </head>
    <body>
        <?php
       $mysqli = new mysqli('localhost', 'root', '', 'test');
// print '<h3>MYSQLI: simple select</h3>';
// $rs = $mysqli->query( 'SELECT * FROM users;' );
// while($row = $rs->fetch_object())
// {
// debug($row);
// }
print '<h3>MYSQLI: calling sp with out variables</h3>';
$rs = $mysqli->query( 'CALL get_user(2, @first, @last)' );
$rs = $mysqli->query( 'SELECT @first, @last' );
while($row = $rs->fetch_object())
{
debug($row);
}
// print '<h3>MYSQLI: calling sp with add variables</h3>';
// $rs = $mysqli->query( 'CALL add_user("ss1", "bbsr1")' );
// print '<h3>MYSQLI: calling sp with Delete variables</h3>';
// $rs = $mysqli->query( 'CALL delete_user(9)' );
// print '<h3>MYSQLI: calling sp with update variables</h3>';
// $rs = $mysqli->query( 'CALL update_user(4,"Rakesh","mumtaz")' );
// print '<h3>MYSQLI: calling sp returning a recordset</h3>';
// $rs = $mysqli->query( 'CALL get_users()' );
// while($row = $rs->fetch_object())
// {
// debug($row);
// }
function debug($o)
{
print '<pre>';
print_r($o);
print '</pre>';
}
        ?>
        
    </body>
</html>    