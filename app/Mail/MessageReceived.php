<?php

namespace App\Mail;

use App\Models\Cliente;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Registro exitoso #MiningAlati';
    public $cliente;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente)
    {
      $this->cliente = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->bcc(['coreo@gmail.com','macuna@padin.com.pe','mrodriguezp@padin.com.pe'])->view('messagereceived');
        // return $this->from('marketing@padin.com.pe',$nombrecliente->nombres)
        // // // ->subject('Correo de Contacto')
        // ->view('messagereceived');
        return $this->view('messagereceived');
    }
}
