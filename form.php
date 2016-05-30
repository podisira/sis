
<?php
//the purpose of this project is inserting into and retrieving data from different database 
include 'dbconnection.php';

if(isset($_POST['submit'])){
	      $uname=$_POST['uname'];
      	  $pass=$_POST['password'];
      	  $name=$_POST['name'];
      	  $id=$_POST['idno'];
      	  $sex=$_POST['sex'];
      	  $dept=$_POST['dept'];
      	  $year=$_POST['year'];
      	  $sem=$_POST['sem'];
      	  //storing idno on session variable 
      	  $idno=$_SESSION['idno'];
      	  
      	  //inserting into database user
     
   $sql1 = mysql_query("INSERT INTO `User`.`acount` (`idno`,`username`, `password`) VALUES ('".$id."','" . $uname . "','" . $pass."')");
   $sql2 = mysql_query("INSERT INTO `StudentDb`.`student` (`id`, `idno`, `name`, `sex`, `department`, `year`, `Sem`) VALUES (NULL, '$id', '$name', '$sex', '$dept', '$year', '$sem')");
   
   if(!($sql1 && $sql2)){
   	   die( "Data not success fully inserted into database".mysql_error());
        
      }
      else{
      	  echo "Successfully inserted into Database";
      }


}
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

                <form name="studentform" action="addnew.php" method="post">
                    <ul id="menu">
          <?php include'menus.php';?>
                        
                    </ul>
                </form>
            </div>
            <div class="page">
 <form method="post" action="">
             <table cellpadding="20" cellspacing="20" style="text-align:left;" >
             <tr>
                  <td>Full Name</td>
                  <td><input type="text" tabindex="1" name="name" value="" size="30" onkeyup="isalpha(this)"/></td>

              </tr>
               <tr>
                  <td>IDNO</td>
                  <td><input type="text" tabindex="1" name="idno" value="" size="30" onkeyup="isalphanum(this)"/></td>

              </tr>
               <tr>
                  <td>Sex</td>
                  <td><Select name="sex"id="textbox">>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
                  </td>
              </tr>
               <tr>
                  <td>Department</td>
                  <td><input type="text" tabindex="1" name="dept" value="" size="30" onkeyup="isalpha(this)"/></td>

              </tr>
               <tr>
                  <td>Year</td>
                  <td><Select name="year" id="textbox">>
                  <option value="I">I</option>
                   <option value="II">II</option>
                    <option value="III">III</option>
                     <option value="IV">IV</option>
                      <option value="V">V</option>
                  </select>
                  </td>
              </tr>
              <tr>
                  <td>Semester</td>
                  <td><Select name="sem" id="textbox">>
                  <option value="I">I</option>
                   <option value="II">II</option>
                    </select>
                  </td>
              </tr>
              <tr>
                  <td>User Name</td>
                  <td><input type="text" tabindex="1" name="uname" value="" size="30"onkeyup="isalphanum(this)" /></td>

              </tr>
              <tr>
                  <td>Password</td>
                  <td><input type="password" tabindex="2" name="password" value="" size="30" onkeyup="isalphanum(this)"  /></td>
              </tr>

              <tr>
                  <td colspan="2">
                      <input type="submit" tabindex="3" value="Register" name="submit" class="subbtn" />
                  </td>
              </tr>
            </table>
            
          </form>
          </div>
          <div id="footer">
    <?php include'footer.php';?>
             </div>
             </div>
</body>
</html>

