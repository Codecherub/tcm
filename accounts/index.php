
<?php

require_once "model/btc.php";

$request = $_SERVER['REQUEST_URI'];
$request = explode('/',$request);
$request = $request[2];

$pages = ["overview","wallet","LiveTrade","upgrades","profile","onboarding","auth","signup","admin"];

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