<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Examples Index</title>
</head>

<body>
    <h1>Bootstrap Examples</h1>
    <ul>
        <!-- Autimatically scan for folders in PHP -->
        <?php
        // Look through a directory and mark all folders
        $dir = __DIR__ . '/bootstrap';
        foreach (scandir($dir) as $item) {
            if ($item === '.' || $item === '..') continue;
            if (is_dir("$dir/$item")) {
                //Create a list and link for each item
                echo "<li><a href=\"bootstrap/$item/\">$item</a></li>";
            }
        }
        ?>
        <!-- PHP end -->
    </ul>
</body>

</html>