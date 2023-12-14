 <?php

  include_once './_common.php';
  include_once(G5_LIB_PATH . '/thumbnail.lib.php');


  $result = sql_query("SELECT * FROM g5_write_certification");
  $output = array(); // 응답값으로 보낼 값

  while ($row = sql_fetch_array($result)) {

    array_push($output, $row);
  }

  //한글이 깨지는 이슈 방지코드urldecode()
  echo urldecode(json_encode($output));



  ?>