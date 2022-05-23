<?php
require_once "../response.php";
require_once "../connect.php";

$response = new Response();

/*$params = array(
    'fwd_avg_speed' => $_GET['key']
);*/
$sql = "SELECT rd,km,bwdlat0,bwdlong0,bwdlat1,bwdlong1 FROM bkk_status WHERE bwd_avg_speed >30";
$statement = $conn->query($sql);
/*$statement = $conn->prepare($sql);*/
$statement->execute();
/*$statement->execute($params);*/
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

if( count($result) ) {
    $response->success($result, 'success', 200);
    // $response = array(
    //     'status' => true,
    //     'response' => $result
    // ); 
    // http_response_code(200);
    // echo json_encode($response);
} else {
    $response->error('error not found!', 404);
    // http_response_code(404);
    // echo json_encode(array('status' => false));
    }

?>