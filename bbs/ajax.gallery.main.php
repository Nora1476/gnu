 <?php

  include_once './_common.php';
  include_once(G5_LIB_PATH . '/thumbnail.lib.php');

  $bo_table = "certification";

  $result = sql_query(" select * from {$g5['board_file_table']} where bo_table = '{$bo_table}' ");
  $output = array(); // 응답값으로 보낼 값

  while ($row = sql_fetch_array($result)) {

    array_push($output, $row);
  }

  //한글이 깨지는 이슈 방지코드urldecode()
  echo urldecode(json_encode($output));



  ?>