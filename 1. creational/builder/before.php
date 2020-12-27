<?php declare(strict_types=1);

class Mail
{
  protected $driver;

  protected $sender;
  protected $recipient;
  protected $subject;
  protected $body;

  public function __construct($driver, $sender, $recipient, $subject, $body)
  {
    $this->driver = $driver;
    $this->sender = $sender;
    $this->recipient = $recipient;
    $this->subject = $subject;
    $this->body = $body;
  }

  public function send()
  {
    // Some logic
  }
}

$mail = new Mail('driver-object', 'from@example.com', 'to@example.com', 'Hi there!', 'Hello everybody!');
