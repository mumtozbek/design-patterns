<?php declare(strict_types=1);

class Mail
{
  protected $driver;

  protected $sender;
  protected $recipient;
  protected $subject;
  protected $body;

  public function __construct(MailBuilder $builder)
  {
    $this->driver = $builder->driver;
    $this->sender = $builder->sender;
    $this->recipient = $builder->recipient;
    $this->subject = $builder->subject;
    $this->body = $builder->body;
  }

  public function send()
  {
    // Some logic
  }
}

class MailBuilder
{
  public $driver;

  public $sender;
  public $recipient;
  public $subject;
  public $body;

  public function __construct($driver)
  {
    $this->driver = $driver;
  }

  public function setSender($sender)
  {
    $this->sender = $sender;

    return $this;
  }

  public function setRecipient($recipient)
  {
    $this->recipient = $recipient;

    return $this;
  }

  public function setSubject($subject)
  {
    $this->subject = $subject;

    return $this;
  }

  public function setBody($body)
  {
    $this->body = $body;

    return $this;
  }

  public function build(): Mail
  {
    return new Mail($this);
  }
}

$builder = new MailBuilder('driver-object');
$builder->setSender('from@example.com')
  ->setRecipient('to@example.com')
  ->setSubject('Hi there!')
  ->setBody('Hello everybody!');

$mail = new Mail($builder);
$mail->send();