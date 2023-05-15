<?php
// session_start();
// if(isset($_SESSION['loggedin_id'])){
//     header('Location: ui/account/dashboard.php');
// } else{
//     header('Location: ui/account/login.php');
// }

$data = [820903,363483,946446,203351,493709,770732,893588,964562,989778,713677,696459,863350,655710,605255,543831,188002,868330,504431,822361];
foreach ($data as $key => $value) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://evotingghana.com/callback',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>json_encode([
      "Order_id"=>$value,
      "Status"=>"PAID"
    ]),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Basic M3YwdEluX2dlbjo3ejRpTEpXdA==',
        'Cookie: XSRF-TOKEN=eyJpdiI6Ik9GbGJXRllSSU1nSVAvdjgyZXR0Rnc9PSIsInZhbHVlIjoiMEpMVW9Kek9sdXlZV3Y1SFJtaU5uZXFWTVZiWDIyOVEwY253REJLNWQwWHhZQ1NPcC9WSlZPbVU3UnhCUTl1R1U3NWdTcFQ5a1RycjJwSGNqU1JQdVBVMGtiRHoxNy9CMlkwYnhvcU55UzNnbzFMckVXRkN1c1pVcHlKOWNmYmciLCJtYWMiOiI1MGJjMWIzYjIzOTU4M2ZkZWFkNDI2Yjk2N2M0ODE2Nzc0ZWY1YzNjYzBjZjBlMmZjM2QyMDljMWZiNDlhNmFhIiwidGFnIjoiIn0%3D; evoting_ghana_session=eyJpdiI6Im9XdXNzcUtSU1BXT3FQYmliaG91b1E9PSIsInZhbHVlIjoiS0toTzdaSjJIQnEvcCt2RGc3UEszZXY0cStoa3N3Um9XZ05SdVdPWnZ5SzlaWVRadkFOQ3NWR1dFai8vL1BRV25KNzJVb09BUDhhQnR6elZoNUZHL0pZSnBGU0lhaEQ4b1gzRHplVUxvbXpOM2tIVHZCaDRlTTlvRnRXMGZWTVQiLCJtYWMiOiJiNWFlZjdjOWQ3YTkyYWI3NDc3NDk5OWU1NGYyNjAyYzE2MGQ1YTc5MWFkYWVkYWMxZWM5ZjNiNTdhZjYyMWM0IiwidGFnIjoiIn0%3D'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
}
