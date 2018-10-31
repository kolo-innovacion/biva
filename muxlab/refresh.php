<?php
$id = "1";
$op1 = $_GET['refresh'];

if (isset($op1)) {
  //REBOOT DEVICE
  $curl2 = curl_init();

  curl_setopt_array($curl2, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"reboot_devices\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"mac\":\"$op1\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 8b9dfcff-c407-417c-87a2-efa38235aae9"
    ),
  ));

  $response2 = curl_exec($curl2);
  $err2 = curl_error($curl2);

  curl_close($curl2);

  header("location: index.php");
  //END REBOOT
}
elseif (!isset($op1)) {
  //echo "No hay op1";
}
?>
