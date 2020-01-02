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
  CURLOPT_URL => "http://moviesapi.ir/api/v1/genres",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);


$response = curl_exec($curl);
$err = curl_error($curl);
$opt=json_decode($response);
$s_array = (array)$opt ;


//var_dump($opt);

function cvf_convert_object_to_array($data) {

    if (is_object($data)) {
        $data = get_object_vars($data);
    }

    if (is_array($data)) {
        return array_map(__FUNCTION__, $data);
    }
    else {
        return $data;
    }
}
 $row=cvf_convert_object_to_array($opt);

echo '<table  bgcolor="#fff" border="5"  width="700" class="table table-hover">';


for($i=0;$i<21;$i++)
{
     echo '<th>' . $row[$i]['id'] . '</th>' . '<td>' .$row[$i]['name'] . '</td><tr></tr>';
   
}
 echo '</table>';
//die();


curl_close($curl);
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


