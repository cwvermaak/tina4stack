<?php

/**
 * Emma is part of the Tina4 stack which allows you to easily send emails from your system without crazy configuration, emma can also read emails from an inbox you may have
 * @todo Add the ability to parse email addresses
 * 
 * @author Andre van Zuydam <andre@xineoh.com>
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
class Emma {
    
    /**
     * Constructor for Emma
     * 
     * @todo Add the ability to talk to a specific email server 
     */
    function __construct () {
       //maybe add some special settings for server etc 
    }
    
    /**
     * A function that will send a confirmation email to the user.
     * 
     * The sendMail function takes on a number of params and sends and email to a receipient.
     * 
     * @param String $recipient This can be a String or Array, the Array should be ; delimited
     * @param String $subject The subject for the email
     * @param String $message The message to send to the Receipient
     * @param String $fromName The name of the person sending the message
     * @param String $fromAddress The address of the person sending the message
     * @param String $attachments An Array of file paths to be attached in the form array ( array( "filename", "path" ) )
     * @return String OK or Failed
     */
    function sendMail ($recipient, $subject, $message, $fromName, $fromAddress, $attachments=null) {
        //define the headers we want passed. Note that they are separated with \r\n
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n"."From: {$fromName}\r\nReply-To: {$fromAddress}";
        //send the email
        $mail_sent = mail( $recipient, $subject, $message, $headers );
        //if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
        return $mail_sent ? "OK" : "Failed";        
    }
    
}