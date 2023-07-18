<?php
require_once "../../database/dbhelper.php";
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>List videos</th>
         <th>ID</th>
         <th>Title</th>
         <th>URL</th>
         <th>Note</th>
    </thead>
    <tbody>
    <?php
    $sql = 'select * from video';
    $list_videos  = executeResult($sql);
    if($list_videos){
        foreach($list_videos as $data){
            echo "<tr>
                    <td>".$data['id']."</td>
                    <td>".$data['title']."</td>
                    <td>".$data['url']."</td>
                    <td>".$data['noite']."</td>
            </tr>";
        }
    }
    ?>
    