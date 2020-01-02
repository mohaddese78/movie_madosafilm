<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        
        <title>
            MADOFILM
        </title>
    </head>
    <body>
<samp class="title" >
    <img width="100%" src="css/madofilm.jpg">
</samp>

        
       <a href="www.moviesapi.ir" >
           www.moviesapi.ir
        </a>
          <div>
        Home
    </div>
    <div>
        Contact
    </div>
    <div>
        About
    </div>
    <div >
        Callme
    </div>  
     
        <hr/>
       <hr/>
</br>
<samp  ><a href="list_videos.php"> <input type="button" class="button" value="list_videos" > </a>
<a href="genres.php">  <input type="button" class="button" value="genres"  ></a>
<a href="search_by_name.php"> <input type="button" class="button" value="search_by_name" ></a>
  <a href="special_genres.php">   <input type="button" class="button" value="special_genres" ></a>
    <a href="detail_video.php">   <input type="button" class="button" value="detail_video" ></a> <hr>
</samp>



<hr>



<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://moviesapi.ir/api/v1/movies",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: moviesapi.ir",
    "Postman-Token: c6631150-8104-4e49-aea6-4f8da8673cb2,292220bb-90b9-4dfa-9ca4-a41659a97193",
    "User-Agent: PostmanRuntime/7.20.1",
    "cache-control: no-cache"
  ),
));



$response = curl_exec($curl);
$err = curl_error($curl);
$opt=json_decode($response);
$employee_array = (array) $opt ;






curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	for($i=0;$i<10;$i++)
	{
		
	$row1=$employee_array['data'][$i];

	//var_dump($row1);
echo'</br>'.'</br>';


echo '<table  bgcolor="#9DEBF1" border="5"  width="700" class="table table-hover">';


foreach($row1 as $key => $value) {
	
		
    echo '<th>' . $key . '</th>' . '<td>' . $value . '</td><tr></tr>';
	
	if($key=='poster')
	{	
		echo "<img class='image' width='559px' height='400px' align='middle' src='$value' class='rounded float-right'>";


	}
    if($key=='genres')
	{
        
    for($s=0;$s<2;$s++)
	{
      $value[$s]=0;
    }   
	}
     if($key=='images')
	{
         
    for($d=0;$d<3;$d++)
	{
        echo "<img  class='image' width='559px' height='400px' align='middle' src='$value[$d]' class='rounded float-right'>";

    }   
	}
 
}

echo'</br>'.'</br>'.'</br>'.'</br>'.'</br>'.'</br>'.'</br>';

}


}





?>




<hr>
<hr/>
<a href="www.Telegram.ir">  <img  src="images/4.jpg"></hr></a>

<a href="www.LinkedIn.ir">  <img  src="images/3.jpg"></hr></a>

<a href="www.Instagram.ir"> <img src="images/2.jpg"></hr></a>

      <a href="www.twitter.ir"><img src="images/1.jpg" ></hr></a>
<hr/>
  
    </body>
</html>


