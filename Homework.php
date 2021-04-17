<?php
if (strcmp($_SESSION['Uploaded'],'True')==0){
echo "<font color=\"red\">作業繳交成功囉!!!!</font><br/>";
echo "檔案名稱: " . $_SESSION['Filename']."<br/>";
echo "檔案類型: " . $_SESSION['FileType']."<br/>";
echo "檔案大小: " . ($_SESSION['FileSize'] / 1024)." Kb<br/>";
}
elseif (strcmp($_SESSION['Uploaded'],'Error')==0){
echo "作業繳交失敗，請重試一次或聯絡lkm543@gmail.com";
}
$_SESSION['Uploaded']='Nothing';
?>

<div class="form-group">
    <form action="UploadHW.php" method="post" enctype="multipart/form-data">
        <label>您的姓名：</label>
        <input type="text" name="name" class="form-control is-invalid" placeholder="姓名" maxlength="5" required>
        
        <label>作業幾：</label>
        <select id="inputState" class="form-control" name="HW">
            <option selected value="HW1">作業1</option>
            <option value="HW2">作業2</option>
            <option value="HW3">作業3</option>
            <option value="HW4">作業4</option>
            <option value="HW5">作業5</option>
        </select>
        </br>
        <label>作業檔案(請上傳.cpp或壓縮成一個檔案)：</label>
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control"><br>
        <label>上課心得或建議：</label>
        <textarea name="comment" rows="5" cols="40" class="form-control"></textarea><br>
        <input type="submit" value="上傳檔案" name="submit" class="form-control">
    </form>
</div>
<hr>
<?php
function print_hw_table($hw, $limit) {
    global $db;
    echo "<h4>作業".$hw."繳交情形(最近五筆)：</h4>";
    $sql = "SELECT * FROM HW".$hw." ORDER BY UploadDate DESC LIMIT ".$limit ;
    $result = $db->query($sql);
    echo "<div class=\"table-responsive\">";
    echo "<table class=\"table\">";

    $i = 0;
    while($row = $result->fetch(PDO::FETCH_ASSOC))
    {
      if ($i == 0) {
        $i++;
        echo "<tr>";
        echo "<th>姓名</th>";
        echo "<th>上傳時間</th>";
        echo "</tr>";
      }
      echo "<tr>";
      $k = 0;
      foreach ($row as $value) {
        if($k==0 or $k==3){
            echo "<td>";
            echo $value;
            echo "</td>";
        }
        $k++;
      }
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}
include 'dbinfo.php';
$dbconnect = "mysql:host=".$servername.";dbname=".$dbname;
$db = new PDO($dbconnect, $username, $password);
for ($i = 1; $i <= 5; $i++) {
    print_hw_table($i, 5);
}
?>