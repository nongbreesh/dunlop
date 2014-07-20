<?php

class Email extends CI_Model {

    public function sendemail($email, $input) {
        //config
        $config['protocol'] = 'smtp';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = FALSE;
        $config['mailtype'] = 'html';
        $config['smtp_host'] = 'mail.xxx.com';
        $config['smtp_user'] = 'noreply@xxx.com';
        $config['smtp_pass'] = 'p@ssw0rd';
        $this->email->initialize($config);
        //config
        $this->email->from('noreply@xxx.com', 'www.xxx.com');
        $this->email->to($email);
        $this->email->subject('Receive Message');

        $body = "
            Hello,

            Receive Message :
            ============
            ชื่อ: {$input['firstname']} {$input['lastname']}
            ที่อยู่: {$input['address']}
            จังหวัด: {$input['province']}
            รหัสไปรษณีย์: {$input['zipcode']}
            เบอร์โทรศัพท์: {$input['tel']}
            อีเมล์: {$input['email']}
            ข้อความ: {$input['msg']}

            ";
        $this->email->message(nl2br($body));

        //echo $this->email->print_debugger();
        $this->email->send();
    }

}
