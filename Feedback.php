<?php

				$to = "connect@quickshape.net";
				$message = "<table border='0'>";
				$message .= "<tr>";
				$message .= "<td>";
				$message .= "Name : ".$_POST['name'];
				$message .= "</td>";
				$message .= "</tr>";
				
				$message .= "<tr>";
				$message .= "<td>";
				$message .= "Email : ".$_POST['email'];
				$message .= "</td>";
				$message .= "</tr>";

				$message .= "<tr>";
				$message .= "<td>";
				$message .= "Mob No : ".$_POST['mobile'];
				$message .= "</td>";
				$message .= "</tr>";
				
				$message .= "<tr>";
				$message .= "<td>";
				$message .= "Address : ".$_POST['message'];
				$message .= "</td>";
				$message .= "</tr>";
				$message .= "</table>";

				
				$subject="QUICK SHAPE";
				
				
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type:text/html;";
				$headers .= "charset=iso-8859-1\r\n";
				$headers .= "From:" .$_POST['email'];"\r\n";
				
				mail($to,$subject,$message,$headers);
				
				
				$message1 = "";
				$message1 .= "Dear ".$_POST['name']." 
				Thank you for your feedback, We Will Contact You Shortly.
				
				QUICK SHAPE ";
				$message1 .= " This is a system generated mail, Please donot reply.";
				$message1 .= "";
				
				$subject1="QUICK SHAPE Feedback ";
				
				$to1 = $_POST['email'];
				
				$headers1 = "MIME-Version: 1.0\r\n";
				$headers1 .= "Content-type:text/html;";
				$headers1 .= "charset=iso-8859-1\r\n";
				$headers1 .= "From:connect@quickshape.net \r\n";
				
				mail($to1,$subject1,$message1,$headers1);
				
					echo( "<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Feedback Form Submitted Successfully, We Will Contact You Shortly')
				window.location.href='https://quickshape.net/';
				</SCRIPT>" );			
				


?>