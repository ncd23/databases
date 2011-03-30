<?
require_once('bench.php');

//test 1
$db = new MySQL(array(
	'host'=>'localhost',
	'user'=>'loffelmr',
	'password'=>'0r^n63',
	'database'=>'loffelmr'
));
$timer = new Timer();
$timer->start();  
$result = $db->('SELECT * FROM salaries ORDER BY salary LIMIT 10');
$runtime1 = $timer->stop();

$timer = new Timer();
$timer->start();  
$result = $db->('SELECT * FROM salaries WHERE emp_no=10001');
$runtime2 = $timer->stop();

//then we can do things like
$rowCnt = $result->countRows();
$row1 = $result->fetchRow();
?><html>        
Runtime 1: <?=$runtime1?><br/>
Runtime 2: <?=$runtime2?><br/>
<br/>
Count: <?=$rowCnt?>
Row: <?print_r($)?>
</html>
