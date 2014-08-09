<?php

class Email extends CI_Model {

    public function sendemail($email, $input) {
        //config
    

        $config = Array(
            'protocol' => 'smtp',
            'charset' => 'utf-8',
            'wordwrap' => FALSE,
            'mailtype' => 'html',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'dunlopthailand@gmail.com',
            'smtp_pass' => 'dunlopthailand1234',
        );


        $this->email->initialize($config);
        //config
        $this->email->from('dunlopthailand@gmail.com', 'dunlopthailand@gmail.com');
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
