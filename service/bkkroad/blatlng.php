<?php
require_once "../response.php";
require_once "../connect.php";

$response = new Response();

/*$params = array(
    'fwd_avg_speed' => $_GET['key']
);*/
$sql = "SELECT bwdlat0,bwdlong0,bwdlat1,bwdlong1 FROM road_info";
/*$sql = "SELECT * FROM bkk_traffic_info WHERE fwd_avg_speed = :fwd_avg_speed ";*/
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