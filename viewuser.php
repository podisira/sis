
<?php
//the purpose of this project is inserting into and retrieving data from different database 
include 'dbconnection.php';

?>

<html>
    <head>
        <title>STUDENT INFORMATION</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
     <link rel="icon" type="jpg/png" href="logo.png"/>
    <link rel="stylesheet" type="text/css" href="sis.css"/>
        </head>
        <body bgcolor="gray">
        
        <div id="container">
            <div class="header">                              
                <?php require'header.php';?>                
                </div>
            <div class="menubar">

                
                    <ul id="menu">
          <?php include'menus.php';?>
                        
                    </ul>
               
            </div>
            <div class="page">
            <?php
            $sql1= mysql_query("select * from User.acount;");
            //$sql2= mysql_query("select * from User.acount;");
                             if((mysql_num_rows($sql1)==0)) { 
                       echo"<h3 style=\"color:#0000cc;text-align:center;\">No Students Yet registered!</h3>";
                                }
                                else {
                                    ?>
                    <table id="d cellpadding="30" cellspacing="10" class="datatable">
                    
                    <thead>
                        <tr>
                           <th>S.NO</th>
                            <th>Student IDNO</th>
                           
                            <th>User Name</th>
                            <th>Password</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                                        <?php
                                        $i=1;
                                        while($r1=mysql_fetch_array($sql1)) {
                                 //temporarly storing row values into session variable
                                //$_SESSION['stdid']=$r1['stdid'];
                                //$_SESSION['om']=$r1['om'];
                                
                                            ?>
                        <tr>
                        <td><?php echo $i;?></td>
                            <td><?php echo htmlspecialchars_decode($r1['idno'],ENT_QUOTES); ?></td>
                            <td><?php echo htmlspecialchars_decode($r1['username'],ENT_QUOTES); ?></td>
                            <td><?php echo htmlspecialchars_decode($r1['password'],ENT_QUOTES); ?></td>
                            
                                
                               
                            
                        </tr>
                        <?php 
                        $i++;
                        				
                        
                        		}}?>
                        		</table>
          </div>
          <div id="footer">
    <?php include'footer.php';?>
             </div>
             </div>
</body>
</html>

