<!--
 * Name: Shannon Reidy
 * Final Project
 * Purpose:email controller for validating and ultimately sending email
--> 

<?
class Email extends CI_Controller{
    public function validateEmail(){
        $postData = $_POST;
        
     if (!empty($postData)) {

        $name = substr(strip_tags(trim($postData['name'])), 0, 64);
        $from = filter_var($postData['returnEmail'], FILTER_VALIDATE_EMAIL) ? $postData['returnEmail'] : "";
        $subject = substr(strip_tags(trim($postData['contactSubject'])), 0, 64);
        $message = substr(strip_tags(trim($postData['message'])), 0, 1000);

        if (!empty($name) && !empty($from) && !empty($subject) && !empty($message)) {

            $headers = "From: $from\r\n";
            $headers .= "Reply-To: $from\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

            if (mail('shannonf.reidy@gmail.com', $subject, $name . "\n\n" . $message, $headers)) {
                echo "okay";
            } else {
                echo "error";
            }
        } else {
            echo "error";
        }
     } else {
       echo "error";
    }

    }
}