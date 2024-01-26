<?php

$b = '';

if (is_null($b)) {
    echo "Variabel \$b memiliki nilai NULL.";
} else {
    echo "Value dari variabel \$b adalah " . gettype($b);
}