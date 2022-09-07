<?php

        $this->load->library('parser');
        $this->load->library('email');
        
        $config['mailtype'] = 'html';

        $this->email->initialize($config);
        
        $this->email->from('Elaine@TMH2000.com', 'The Mortgage Headhunter LLC.');
        $this->email->to($email);

        $this->email->subject('Forgot Password Reset');
        
        $message1 = '<html>';
        $message1 .= '<head>';
        $message1 .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        $message1 .= '<title>Forgot Password Notification</title>';
        $message1 .= '</head>';
        $message1 .= '<body>';
        $message1 .= '<div style="border:5px solid #ffffff; width:642px; background-color:#ffffff;">';
        $message1 .= '<div style="height:16px; padding:10px 0px 13px 12px; color:#000000; font-family:Arial, Sans-serif; width:630px; font-size:16px; font-weight:bold; background-color:#9ccb5d;">';
        $message1 .= 'Forgot Password Notification';
        $message1 .= '</div>';
        $message1 .= '<div style="border:1px solid #e3f4f8; background-color:#ffffff; padding:20px; font-family:Arial, Sans-serif; font-size:13px; width:600px;">';
        $message1 .= '<p style="padding:0; margin:0;">';
        //$message1 .= '<span style="font-size:19px;">Dear, {alias}!</span>';
        //$message1 .= '<br />';
        $message1 .= '<p style="font-size:16px;">Your verification code is below  <small> - enter it in your open browser window and we will help you get signed in </small>.</p>';
        //$message1 .= '<br />';
        $message1 .= '<div style="width:98%; height:23px; padding:12px 0 22px 2%; background-color:#f6f6f6; border:1px solid #eeeeee; border-width:1px 1px 4px 1px; margin:12px 0;">';
        $message1 .= '<span style="font-weight:bold;font-size:16px">Your verification code is: </span><span style="font-weight:bold;font-size:22px">'. $random_number. '</span>';
        $message1 .= '</div>';
        $message1 .= '<span style="font-size:16px">If you didn’t request this email, there’s nothing to worry about — <small>you can safely ignore it</small>.</span>';
        // $message1 .= '<br />';
        // $message1 .= '<div style="width:98%; height:23px; padding:8px 0 4px 2%; background-color:#f6f6f6; border-top:1px solid #eeeeee; border-bottom:1px solid #eeeeee; margin:12px 0;">';
        // $message1 .= '<a style="text-decoration:none;" href="{egift_link}">Click here</a> to go to the login page.<br />';
        // $message1 .= '</div>';
        // $message1 .= '<br /><br />';
        // $message1 .= 'All the best,';
        $message1 .= '<br /><br />';
        $message1 .= '<span style="font-weight:bold;">The Mortgage Headhunter, LLC. Team.</span>';
        $message1 .= '</p>';
        $message1 .= '</div>';
        $message1 .= '</div>';
        $message1 .= '</body>';
        $message1 .= '</html>';
                
        $this->email->message($message1);

        $this->email->send();

?>