<?php
          require "PHPMailer-master/src/PHPMailer.php";  
          require "PHPMailer-master/src/SMTP.php";
          require 'PHPMailer-master/src/Exception.php'; 
          $mail = new PHPMailer\PHPMailer\PHPMailer(true);  
            try {
            
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com'; 
                $mail->SMTPAuth = true;
		    $nguoigui = 'hungnp.21it@vku.udn.vn';
		    $matkhau = 'ddloyeuowlrkydal';
 
		    $tennguoigui = 'From XAM PIPI';
                $mail->Username = $nguoigui; 
                $mail->Password = $matkhau;  
                $mail->SMTPSecure = 'ssl';   
                $mail->Port = 465;              
                $mail->setFrom($nguoigui, $tennguoigui ); 
                $to = "nguyenhung030910@gmail.com";
                $to_name = "Quack Quack";
                         
                $mail->isHTML(true);  
                $mail->Subject = 'Gửi thư từ php';      
                $noidungthu = "<b>Chào bạn!</b><br>Chúc an lành!" ;
                $mail->Body = $noidungthu;
                $mail->AddAttachment("4.jpg","picture");
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send();
                echo 'Đã gửi mail xong';
                
            } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }

?>
