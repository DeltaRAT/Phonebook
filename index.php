<?php
# It is FrontController!

use App\Utilities\Url;

include "Bootstrap/Init.php";

(new App\Core\StupidRouter)->run();
