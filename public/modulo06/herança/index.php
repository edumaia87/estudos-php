<?php

class Post
{
    protected int $id;
    private int $likes = 0;

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getLikes()
    {
        return $this->likes;
    }

    public function setLikes(int $likes)
    {
        $this->likes = $likes;
    }
}

class Photo extends Post
{
    private string $url;

    public function __construct(int $id)
    {
        $this->setId($id);
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;
    }
}

$photo = new Photo(20);

$photo->setLikes(12);
$photo->setUrl('www.facebook.com/edumaia89');

echo 'Foto: #' . $photo->getId() . ' - ' . $photo->getLikes() . ' likes - ' . $photo->getUrl();
