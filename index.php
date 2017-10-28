<?
require_once "vendor/autoload.php";
/*
$html= phpQuery::newDocument('"https://5element.by/ajax/catalog_category_list.php?SECTION_ID=$sectionId');
xprint($html);
phpQuery::unloadDocuments($html);
*/

use Curl\MultiCurl;
$headers = array('Content-Type' => 'application/json', 'X-CUSTOM-HEADER' => 'my-custom-header');
$multi_curl = new MultiCurl();

$data = array('categoryId' => 1403,
    'currentPage' => 1,
    'itemsPerPage' => 150,
    'viewType' => 1,
    'sortName' => 'popular',
    'sortDest' => 'desc',
    'filterInStock' => 1,
    'filterInStore' => 0);

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


$multi_curl->success(function ($instance) {
    echo 'call to "' . $instance->url . '" was successful.' . "\n";
    echo 'response:' . "\n";

    var_dump($instance->response);
    });

$multi_curl->error(function ($instance) {
    echo 'call to "' . $instance->url . '" was unsuccessful.' . "\n";
    echo 'error code: ' . $instance->errorCode . "\n";
    echo 'error message: ' . $instance->errorMessage . "\n";
});
$multi_curl->complete(function ($instance) {
    echo 'call completed' . "\n";
});


echo "getDescProductFrom5Elem " . date("H:i:s") . "\n\r";

$multi_curl->setOpt(CURLOPT_RETURNTRANSFER, true);
$multi_curl->setOpt(CURLOPT_HEADER,true);
$multi_curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
$multi_curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
$multi_curl->setOpt(CURLOPT_SSL_VERIFYHOST, false);
$multi_curl->setOpt(CURLOPT_POST, 1);
//$multi_curl->setHeaders($headers);
//$multi_curl->addPost('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=145');
/*$multi_curl->addGet('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=147');//,$data
$multi_curl->addGet('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=151');//,$data);
$multi_curl->addGet('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=153');//,$data);
$multi_curl->addGet('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=155');//,$data);
$multi_curl->addGet('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=157');//,$data);
$multi_curl->addGet('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=159');//,$data);
$multi_curl->addGet('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=161');//,$data);
$multi_curl->addGet('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=163');//,$data);
$multi_curl->addGet('https://5element.by/ajax/catalog_category_list.php?SECTION_ID=167');//,$data);*/

$multi_curl->start(); // Blocks until all items in the queue have been processed.

echo "getDescProductFrom5Elem " . date("H:i:s") . "\n\r";