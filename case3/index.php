<?php 

echo 'Case 3:';
echo '<br>';
echo '<br>';
echo '<br>';

class Content
{
  public $title;
  public $text;
  public $contentType;

  public function __construct(string $title, string $text, string $contentType)
  {
    $this->title = $title;
    $this->text = $text;
    $this->contentType = $contentType;
  }

  public function changeTitle()
  {
    if ($this->contentType == 'ad') {
      return '<h2>' . strtoupper($this->title) . '</h2>';
    } elseif ($this->contentType == 'vacancy') {
      return '<h2>' . $this->title . ' - apply now!</h2>';
    } else {
      return '<h2>' . $this->title . '</h2>';
    }
  }

}

$content1 = new Content('This is an article', 'This is content 1 text', 'article');
$content2 = new Content('This is an ad', 'This is content 2 text', 'ad');
$content3 = new Content('This is a vacancy', 'This is content 3 text', 'vacancy');

echo $content1->changeTitle() .'<br>';
echo $content2->changeTitle() .'<br>';
echo $content3->changeTitle() .'<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$articlesArray = [
  new Content('This is the 1st NEW article', 'This is content 4 text', 'article'),
  new Content('This is the 2nd NEW article', 'This is content 5 text', 'article'),
  new Content('This is a NEW add', 'This is content 6 text', 'ad'),
  new Content('This is a NEW vacancy', 'This is content 7 text', 'vacancy'),
];

foreach ($articlesArray as $article) {
  echo  $article->changeTitle();
  echo '<br>';
  echo '<p> Text content: ' . $article->text . '</p>';
  echo '<br>';
};

