<?php



$servername = "localhost";
$username = "root";
$password = "12345678";
$db_name = "News_articles";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
mysqli_select_db($conn, $db_name);
$command = escapeshellcmd('python /var/www/html/scrap.py');
$output = shell_exec($command);
echo $output;

$row = 1;
if (($handle = fopen("cms_scrap.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, ",")) !== FALSE) {
        $num = count($data);
       // echo "<p> $num fields in line $row: <br /></p>\n";
        if($row == 1){ $row++; continue; }
        $title = $data[0];
        $title =  str_replace("'"," ",$title);
        $title = str_replace("\""," ",$title);
        $sql1 = "SELECT * FROM news_article WHERE title= '$title';";
        $result1 = $conn->query($sql1);
       // echo $title."<br>";
        if(($num_rows = mysqli_num_rows($result1))>0)
        continue;
        
           $des = $data[1];
           // echo $des."<br>";
           $link = $data[2];
          //  echo $link."<br>";
            $des =  str_replace("'"," ",$des);
            $des = str_replace("\""," ",$des);
            $link =  str_replace("'"," ",$link);
            $link = str_replace("\""," ",$link);
           $sql2 = "INSERT INTO news_article (title,description,read_more) values ('$title','$des','$link');";
          // echo $sql2;
           $result2 = $conn->query($sql2);
        
    }
    fclose($handle);
}
//$sql = "LOAD DATA LOCAL INFILE 'cms_scrap.csv' INTO TABLE news_article FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (title,description,read_more);";
//$result = $conn->query($sql);



?>  



