<?php

declare(strict_types=1);

if ($argc < 2) {
    echo "Использование: php hasher.php <filename>\n";
    exit(1);
}

$fileName = $argv[1];

$hash = hash_file('sha256', $fileName);
$baseName = basename($fileName);
copy($fileName, $hash . '.file');

echo "sourceUrl: 'https://raw.githubusercontent.com/novokshonovev/test-data-repo/refs/heads/main/{$hash}.file',\n";
echo "currentHash: '{$hash}.hash',\n";
