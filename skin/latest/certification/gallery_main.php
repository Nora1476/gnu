 <?php
 
 include_once './_common.php';
 include_once(G5_LIB_PATH.'/thumbnail.lib.php');	
  
   
  $sql = "select * from g5_write_".$bo_table." order by no desc;";
    print_r($sql);

//   $result = mysqli_query($conn,$sql);
//   $output = array(); // 응답값으로 보낼 값
 


//    while($row = mysqli_fetch_array($result)){

    // echo '$row : ';
    // print_r($row);
    // echo '<br>';

    // array_push($output,
    // array(
    //     'no' => (int)($row['no']),
    //     'title' => urlencode($row['title']),
    //     'issue' => urlencode($row['issue']),
    //     'kind' => $row['kind'],
    //     'certifi_date' => $row['certifi_date'],
    //     'file' => $row['file']
    //     )
    // );
    


//    }

  //한글이 깨지는 이슈 방지코드urldecode()
//   echo urldecode(json_encode($output));
   
  
  
  ?>