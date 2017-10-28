<?php

// страницы, содержимое которых надо получить

function getPostDataCat ($categoryId, $currentPage, $itemsPerPage)
{
    return array('categoryId' => (int)$categoryId,
        'currentPage' => (int)$currentPage,
        'itemsPerPage' => (int)$itemsPerPage,
        'viewType' => 1,
        'sortName' => 'popular',
        'sortDest' => 'desc',
        'filterInStock' => 1,
        'filterInStore' => 0);
}
// build the individual requests, but do not execute them
$ch_1 = curl_init('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=153');
$ch_2 = curl_init('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=155');
curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_2, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch_1, CURLOPT_POSTFIELDS, getPostDataCat(24155,1,150));
curl_setopt($ch_2, CURLOPT_POSTFIELDS, getPostDataCat(24181,1,150));
// build the multi-curl handle, adding both $ch
$mh = curl_multi_init();
curl_multi_add_handle($mh, $ch_1);
curl_multi_add_handle($mh, $ch_2);

// execute all queries simultaneously, and continue when all are complete
$running = null;
do {
  $k= curl_multi_exec($mh, $running);
   echo $k;
} while ($running);

//close the handles
curl_multi_remove_handle($mh, $ch_1);
curl_multi_remove_handle($mh, $ch_2);
curl_multi_close($mh);

// all of our requests are done, we can now access the results
$response_1 =json_decode( curl_multi_getcontent($ch_1));
$response_2 =json_decode( curl_multi_getcontent($ch_2));

//var_dump($response_1);
//var_dump($response_2);

