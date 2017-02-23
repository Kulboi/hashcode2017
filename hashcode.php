<?php 


    $file ='me_at_the_zoo.in';
    $handle1 = fopen($file, "r");
    $fileContents = fread($handle1,filesize($file));

    $dset = explode("\n", $fileContents);

    // print($fileContents);
    print_r($dset);

    $n_videos = explode(' ', $dset[0])[0];
    echo "<br>Number or Videos $n_videos"; 


    $n_endpoints = explode(' ', $dset[0])[1];
    echo "<br>Number or Endpoints $n_endpoints"; 


    $n_request = explode(' ', $dset[0])[2];
    echo "<br>Number of  Requests $n_request"; 

    $n_caches = explode(' ', $dset[0])[3];
    echo "<br>Number of  Catches $n_caches"; 

    $capacity = explode(' ', $dset[0])[4];
    echo "<br>  Catche Capacity $capacity"; 


    $vidoes_sizes = explode(' ', $dset[1]);

    // print_r($vidoes_sizes);

?>