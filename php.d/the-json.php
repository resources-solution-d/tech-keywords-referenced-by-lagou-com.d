<?php

require_once('../php.d/paginationIndex.php');

$i = $paginationIndex;
$oldCurlCmd = "curl 'https://www.lagou.com/jobs/positionAjax.json?px=default&gx=%E5%85%A8%E8%81%8C&needAddtionalResult=false&isSchoolJob=1' -H 'Cookie:...' -H 'Origin: https://www.lagou.com' -H 'X-Anit-Forge-Code: 0' -H 'Accept-Language: en-US,en;q=0.8,zh-CN;q=0.6,zh;q=0.4,ja;q=0.2,zh-TW;q=0.2' -H 'X-Requested-With: XMLHttpRequest' -H 'Accept-Encoding: gzip, deflate, br' -H 'Connection: keep-alive' -H 'Pragma: no-cache' -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36' -H 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8' -H 'Accept: application/json, text/javascript, */*; q=0.01' -H 'Cache-Control: no-cache' -H 'Referer: https://www.lagou.com/jobs/list_%E5%89%8D%E7%AB%AF?px=default&gx=%E5%85%A8%E8%81%8C&gj=&isSchoolJob=1&city=%E5%85%A8%E5%9B%BD' -H 'X-Anit-Forge-Token: None' --data 'first=false&pn=" . $i . "&kd=%E5%89%8D%E7%AB%AF' --compressed";
$curlWriteAllJsonCmd = "curl 'https://www.lagou.com/jobs/positionAjax.json?px=new&city=%E5%8C%97%E4%BA%AC&needAddtionalResult=false&isSchoolJob=0' -H 'Cookie: user_trace_token=20171215003435-a451e1ea-40b8-4cde-ad21-78d1b5e9e24a; _ga=GA1.2.1004274271.1513269276; LGUID=20171215003436-ac1ed00f-e0ec-11e7-98a4-525400f775ce; index_location_city=%E5%8C%97%E4%BA%AC; JSESSIONID=ABAAABAAADEAAFI8E421E49B4402DC5AD43CF219E0A7D2A; _gid=GA1.2.427782752.1513700850; Hm_lvt_4233e74dff0ae5bd0a3d81c6ccf756e6=1513269276,1513700850; Hm_lpvt_4233e74dff0ae5bd0a3d81c6ccf756e6=1513700850; LGSID=20171220002754-90d94dc2-e4d9-11e7-a16d-525400f775ce; PRE_UTM=; PRE_HOST=; PRE_SITE=https%3A%2F%2Fwww.lagou.com%2F; PRE_LAND=https%3A%2F%2Fwww.lagou.com%2Fjobs%2Flist_%3FlabelWords%3D%26fromSearch%3Dtrue%26suginput%3D; LGRID=20171220002754-90d95034-e4d9-11e7-a16d-525400f775ce; SEARCH_ID=1a38c839c74c46b2873504036e375db5' -H 'Origin: https://www.lagou.com' -H 'X-Anit-Forge-Code: 0' -H 'Accept-Encoding: gzip, deflate, br' -H 'Accept-Language: zh-CN,zh;q=0.9' -H 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/63.0.3239.84 Chrome/63.0.3239.84 Safari/537.36' -H 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8' -H 'Accept: application/json, text/javascript, */*; q=0.01' -H 'Referer: https://www.lagou.com/jobs/list_?labelWords=&fromSearch=true&suginput=' -H 'X-Requested-With: XMLHttpRequest' -H 'Connection: keep-alive' -H 'X-Anit-Forge-Token: None' --data 'first=true&pn=".$paginationIndex."&kd=' --compressed";
//
    $data = shell_exec($curlWriteAllJsonCmd);

    $data_array[] = json_decode( $data ,  1 );
//    $fname = 'data/' . time() . '.txt';
//    file_put_contents( $fname ,  $data );
    echo "loop $i was completed 😀 \r\n";

//file_put_contents( 'all.json' ,  json_encode( $data_array , JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE ) );
file_put_contents( '../php.d/all.json' ,  json_encode( $data_array ) );
echo " DONE 🤠";

echo json_encode($data_array);

