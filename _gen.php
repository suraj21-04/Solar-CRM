<?php
$ctrl = file_get_contents("php://stdin");
file_put_contents("app/Http/Controllers/DashboardController.php", $ctrl);
echo "Done\n";