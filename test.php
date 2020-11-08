<?php
    $directory = "patilweb_encrypt";
    //create zip object
    $zip_name = time().".zip";
    zip_creation($directory,$zip_name);
 function zip_creation($source, $destination){
    $dir = opendir($source);
    $result = ($dir === false ? false : true);

    if ($result !== false) {


        $rootPath = realpath($source);

        // Initialize archive object
        $zip = new ZipArchive();
        $zipfilename = $destination.".zip";
        $zip->open($zipfilename, ZipArchive::CREATE | ZipArchive::OVERWRITE );

        // Create recursive directory iterator
        /** @var SplFileInfo[] $files */
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rootPath), RecursiveIteratorIterator::LEAVES_ONLY);

        foreach ($files as $name => $file)
        {
            // Skip directories (they would be added automatically)
            if (!$file->isDir())
            {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }

        // Zip archive will be created only after closing object
        $zip->close();

        return TRUE;
    } else {
        return FALSE;
    }


}