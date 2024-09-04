<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function amnt($amnt=0)
{
    $amnt = (float)$amnt;
    $amnt = number_format($amnt,2);
    return $amnt;    
}

function sendMail($fromemail, $fromname, $toemail, $subject, $content)
{ 
    // Get instance of CI
    $CI =& get_instance();

    // Load PHPMailer library
    $CI->load->library('phpmailer_lib');

    // PHPMailer object
    $mail = $CI->phpmailer_lib->load();
    $CI->load->database();
    
    // Get email configuration from the database
    $optionsres = $CI->db->get('tbl_dhpms_options')->result_array();
    $dhpop = array();
    foreach ($optionsres as $row) {
        $dhpop[$row['opt_key']] = $row['opt_value'];
    }

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host     = $dhpop['smtp_host'];
    $mail->SMTPAuth = true;
    $mail->Username = $dhpop['smtp_username'];
    $mail->Password = $dhpop['smtp_pass'];
    $mail->SMTPSecure = 'ssl';
    $mail->Port     = $dhpop['smtp_port'];
    
    $mail->setFrom($fromemail, $fromname);
    $mail->addAddress($toemail);
    
    // Email subject
    $mail->Subject = $subject;
    
    // Set email format to HTML
    $mail->isHTML(true);
    
    // Email body content
    $mail->Body = $content;
    
    // Send email
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}


function getEmailTemplate($tplkey)
{
    $CI =& get_instance();
    $CI->load->database();
    $CI->db->where('email_tpl_name',$tplkey);
    return $CI->db->get('tbl_email_templates')->row()->email_tpl_content;
}

function slug($text)
{
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $text)));
}

function cursym()
{
    $CI = &get_instance();
    $CI->load->library('session');
    $CI->load->database();
    $optionsres = $CI->db->get('tbl_dhpms_options')->result_array();
    $dhpop = array();
    foreach ($optionsres as $row)
    {
            $dhpop[$row['opt_key']] = $row['opt_value'];
    }
    $userd = $CI->session->userdata;
    $branch = (isset($userd['branch'])) ? $CI->db->where("id",$userd['branch'])->get("tbl_branches")->row_array() : '';

    if(!empty($branch))
    {
        return (!empty($branch['branch_currency_symbol'])) ? $branch['branch_currency_symbol'] : $dhpop['currency_symbol'];
    }
    else
    {
        return $dhpop['currency_symbol'];
    }
}