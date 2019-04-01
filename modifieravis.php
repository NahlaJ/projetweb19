<?php
include "C:/wamp64/www/nn/core/avisC.php";
 
                          if(isset($_POST['butt']))
                          {

                              $cinn= $_POST['cinn'];
                              $commentaire= $_POST['commentaire'];
                              $type= $_POST['type'];
                           
                            

                            $qry= new avisC();
                            $qry->modifier($cinn,$commentaire,$type);

                          }
                          //header('location: indexmd1.php');
?>

<form action="modifieravis.php" method="post">   
                            Nom:
                          <input style="height: 35px" placeholder="cinn" name="cinn" type="text" value="<?php echo $cinn; ?>" required="">
                        <br>
                            Prenom:
                          <input style="height: 35px" placeholder="commentaire" name="commentaire"  type="text" value="<?php echo $commentaire; ?>">
                           <br>
                          Mail:
                          <input style="height: 35px" placeholder="type" name="type" value="<?php echo $type; ?>"  type="text" >
                          
                         
                          <div class="sign-up">

                           <center><input type="submit" name="butt" value="modifier"/></center> 

                          </div>
                            </form>