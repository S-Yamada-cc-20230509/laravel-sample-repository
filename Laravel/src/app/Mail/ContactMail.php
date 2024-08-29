<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; //追記
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template, $subject, $data)
    {
        $this->subject = $subject; //件名
        $this->data = $data; //フォームで受信したデータ
    }

    /**
     * Build the message.送信するメールの設定はbuildメソッド
     * 
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data['email'])//fromメソッドでメールの送信メアドを設定。
                    ->view('contact.mail');//メールのテンプレートを指定。ここではcontactフォルダのmail.blade.phpを指定。
    }
}
