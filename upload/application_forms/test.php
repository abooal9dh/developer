<html>  
<head>  
<title> Pagination </title>  
</head>  
<body>  
  
<?php  
    require ('user.php');
  
    //define total number of results you want per page  
    $results_per_page = 10;  
  
    //find the total number of results stored in the database  
    $gdms=$msc->prepare ("SELECT * FROM app_tab ORDER BY id_count ");
    $gdms -> execute();
    $ddms = $gdms-> get_result();
    $cdta=$ddms->fetch_assoc();  
    $number_of_result = mysqli_num_rows($cdta);
  
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  
    //retrieve the selected results from database   
    $query = "SELECT *FROM alphabet LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($conn, $query);  
      
    //display the retrieved result on the webpage  
    while ($row = mysqli_fetch_array($result)) {  
        echo $row['id'] . ' ' . $row['alphabet'] . '</br>';  
    }  
  
  
    //display the link of the pages in URL  
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '<a href = "index2.php?page=' . $page . '">' . $page . ' </a>';  
    }  
  
?>  
</body>  
</html>  