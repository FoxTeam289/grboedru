<?php
if (isset($_GET['deviceId'])) {
    $deviceId = $_GET['deviceId'];
    $filePath = "locations/{$deviceId}.json";

    if (file_exists($filePath)) {
        $locationData = json_decode(file_get_contents($filePath), true);
        echo json_encode(['success' => true, 'location' => $locationData]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Device not found.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid parameters.']);
}
?>
