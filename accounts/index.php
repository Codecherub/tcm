
<?php

// require_once "./mvc/classes.php";

$request = $_SERVER['REQUEST_URI'];
$request = explode('/',$request);
$request = $request[3];

$pages = ["overview","wallet","LiveTrade","upgrades","profile","trade charts","auth","signup","tiles"];

  if($request === "" || $request === "dashboard"){
      require "./views/dashboard.php";
  } 
  
  
  
  else {
      if(in_array($request,$pages)){
        include "./views/$request.php";
      }else {
        require "./views/404.php";
      }
  }