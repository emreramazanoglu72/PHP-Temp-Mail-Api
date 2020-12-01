<?php

    /**
     * Import TempMail Api
     */
    require './TempMail.php';

    $tempmail = new TempMailApi();
    /**
     * Get Random Mail List
     * $limit = default 10;
     */
        $result = $tempmail->getMail(10);
    /**
     * Get Connect Mail Session
     * $session = mail name convert base64;
     */
    $result = $tempmail->getMailInfo ("Z3RkamxhQDFzZWNtYWlsLm9yZw==");
    /**
     * Get Mail Detail
     * $session = mail name convert base64;
     * $id = mesaj detail id
     */
    $result = $tempmail->MailDetail ("Z3RkamxhQDFzZWNtYWlsLm9yZw==",1212121);

    /**
     * File Download
     * $session = mail name convert base64;
     * $id = mesaj detail id
     * $file = file Name
     */
    $result = $tempmail->fileDownload ("Z3RkamxhQDFzZWNtYWlsLm9yZw==",1212121,"myAbout.docs");
