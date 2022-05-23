<?php
require_once "../connect.php";
require_once "../response.php";

$response = new Response();

$sql = "SELECT * FROM road_info";
$statement = $conn->query($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

/**print_r($result);*/

if(count($result)) {

    $response->success($result, 'success', 200);
    /*Response::success($result, 'success', 200); if use static but have to add static after public within class. */


    // $response = array(
    //     'status' => true,
    //     'response' => $result
    // );
    // http_response_code(200);
    // echo json_encode($response);
} else {
    $response->error('error', 404);
    // http_response_code(404);
    // echo json_encode(array('status' => false));
}

?>