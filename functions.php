<?php
/**
 * Get the list of part files
 * @return array list of files
 */
function getKernlFiles() {
  $dir = new DirectoryIterator(dirname(__FILE__).'/docs/views/parts');
  $files = [];
  foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
      $files[] = preg_replace("/(.+)\.php$/", "$1", $fileinfo->getFilename());
    }
  }
  return $files;
}

/**
 * Get app version from package.json
 * @return version value
 */

function getVersion() {
  $str = file_get_contents('./package.json', FILE_USE_INCLUDE_PATH);
  $json = json_decode($str, true); // decode the JSON into an associative array
  $version = $json['version'];
  return $version;
}
