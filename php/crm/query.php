<?php //Query 

 //INSERT 
 $query = " INSERT INTO table ( CRM_1, CRM_2, CRM_3, CRM_4 )  VALUES ( '$CRM_1', '$CRM_2', '$CRM_3', '$CRM_4' ) "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

?>