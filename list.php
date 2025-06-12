<?php
$dir = "uploads/";
if (!is_dir($dir)) {
    mkdir($dir);
}

$files = array_diff(scandir($dir), array('.', '..'));

if (count($files) === 0) {
    echo "<p>Tidak ada file yang diupload.</p>";
} else {
    echo "<ul>";
    foreach ($files as $file) {
        $filepath = $dir . $file;
        echo "<li>
                <a href='$filepath' target='_blank'>$file</a>
                | <a href='download.php?file=" . urlencode($file) . "'>[Download]</a>
                | <a href='delete.php?file=" . urlencode($file) . "' onclick='return confirm(\"Yakin ingin menghapus file?\")'>[Hapus]</a>
              </li>";
    }
    echo "</ul>";
}
?>
