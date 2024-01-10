<?php 

class Content
{
  public $title;
  public $text;
  public $contentType;
  public $marked;

  public function __construct(string $title, string $text, string $contentType, bool $marked = false)
  {
    $this->title = $title;
    $this->text = $text;
    $this->contentType = $contentType;
    $this->marked = $marked;
  }

  public function changeTitle()
  {
    if ($this->contentType == 'ad') {
      return  strtoupper($this->title);
    } else if ($this->contentType == 'vacancy') {
      return  $this->title . ' - APPLY NOW!';
    } else if ($this->marked == 'true'){
      return 'BREAKING! ' . $this->title;
    }else {
      return $this->title;
    }
  }

}

$content1 = new Content('This is an article', 'This is content 1 text', 'article');
$content2 = new Content('This is an ad', 'This is content 2 text', 'ad');
$content3 = new Content('This is a vacancy', 'This is content 3 text', 'vacancy');


$articlesArray = [
  new Content('This is the 1st NEW article', 'This is content 4 text', 'article', true),
  new Content('This is the 2nd NEW article', 'This is content 5 text', 'article'),
  new Content('This is a NEW add', 'This is content 6 text', 'ad'),
  new Content('This is a NEW vacancy', 'This is content 7 text', 'vacancy'),
];
