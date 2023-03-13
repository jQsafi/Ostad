<?php
include "ns.php";
use Html\Table as T;
$table = new T();
$table->title = "My table";
$table->numRows = 5;

use Html\Row as R;
$row = new R();
$row->numCells = 5;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>