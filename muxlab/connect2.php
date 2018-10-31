<?php
$id = "1";
$source=$_POST['source'];

$op1 = $_POST['lobby1'];
$op2 = $_POST['lobby2'];
$op3 = $_POST['vigilancia1'];
$op3b = $_POST['vigilancia2'];
$op4 = $_POST['operaciones1'];
$op5 = $_POST['operaciones2'];
$op6 = $_POST['operaciones3'];
$op7 = $_POST['operaciones4'];
$op8 = $_POST['vwizq'];
$op9 = $_POST['vwcentro'];
$op10 = $_POST['vwder'];
$op11 = $_POST['muroop1'];
$op12 = $_POST['muroop2'];
$op13 = $_POST['area'];
$op14 = $_POST['vertder'];
$op15 = $_POST['vertizq'];
$op16 = $_POST['podio'];


if (isset($op1)) {
  //echo $op1;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op1\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op1)) {
  //echo "No hay op1";
}
if (isset($op2)) {
  //echo $op2;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op2\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op2)) {
  //echo "No hay op2";
}
if (isset($op3)) {
  //echo $op3;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op3\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op3)) {
  //echo "No hay op3";
}
if (isset($op4)) {
  //echo $op4;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op4\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op4)) {
  //echo "No hay op3";
}
if (isset($op5)) {
  //echo $op5;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op5\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op5)) {
  //echo "No hay op3";
}
if (isset($op6)) {
  //echo $op6;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op6\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op6)) {
  //echo "No hay op3";
}
if (isset($op7)) {
  //echo $op7;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op7\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op7)) {
  //echo "No hay op3";
}
if (isset($op8)) {
  //echo $op8;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op8\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op8)) {
  //echo "No hay op3";
}
if (isset($op9)) {
  //echo $op9;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op9\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op9)) {
  //echo "No hay op3";
}
if (isset($op10)) {
  //echo $op10;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op10\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op10)) {
  //echo "No hay op3";
}
if (isset($op11)) {
  //echo $op11;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op11\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op11)) {
  //echo "No hay op3";
}
if (isset($op12)) {
  //echo $op12;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op12\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op12)) {
  //echo "No hay op3";
}
if (isset($op13)) {
  //echo $op13;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op13\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op13)) {
  //echo "No hay op3";
}
if (isset($op14)) {
  //echo $op14;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op14\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op14)) {
  //echo "No hay op3";
}
if (isset($op15)) {
  //echo $op15;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op15\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op15)) {
  //echo "No hay op3";
}
if (isset($op16)) {
  //echo $op16;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op16\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op16)) {
  //echo "No hay op3";
}




//TEST
if (isset($op3b)) {
  //echo $op3b;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.168.50/mnc/secure_api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"p_targetId\":$id,\"p_cmd\":\"connection\",\"p_userName\":\"admin\",\"p_password\":\"admin\",\"p_data\":[{\"macRx\":\"$op3b\",\"macTx\":\"$source\"}]}\r\n",
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Postman-Token: 02a088dd-3616-44cd-9f7b-c0458a38b2f8"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

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
  //END REBOOT

  if ($err) {
    //echo "cURL Error #:" . $err;
    $err_inf = ("cURL Error #:" . $err);
  } else {
    //echo $response;
    $err_inf = $response;
  }

}
elseif (!isset($op3b)) {
  //echo "No hay op3";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="initial-scale=1.0, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <!--Tablet-->
    <div class="container-fluid bg-light" style="height: 100vh; padding-top: 1.5vh; padding-bottom: 1.5vh;">
      <div class="row">
        <div class="container col-md-12">
          <div class="card col-md-12" style="height: 97vh;">
            <div class="card-body">
              <h1><?php
              //echo $err_inf;
              echo "Comando enviado";
              ?></h1>
              <button type="button" name="button" class="btn btn-primary col-md-12" onclick="goBack()">GO BACK</button>
              <script>
              function goBack() {
                  window.history.back();
              }
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
 	<script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    --<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    --<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    --<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
