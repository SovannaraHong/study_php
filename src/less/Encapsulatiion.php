<?php


class Time
{
    private int $hour;
    public function setHour(int $h)
    {
        if ($h > 0 && $h <= 24) {
            $this->hour = $h;
        } else {
            throw new Exception("this is error");
        }
    }
    public function getHour(): int
    {
        return $this->hour;
    }
}
$time = new Time();
$time->setHour(12);
echo $time->getHour();


//lazy loading

class Post
{
    private ?string $comment = null;
    public  function loadCommentFromDb(): string
    {
        return "comment";
    }
    public function getComment(): string
    {
        if ($this->comment == null) {
            $this->comment = $this->loadCommentFromDb();
        }
        return $this->comment;
    }
}


//chaining method
class City
{
    private string $bio;
    private string $cityName;
    public function setBio(string $name)
    {
        $this->bio = $name;
        return $this;
    }
    public function setCity(string $city)
    {
        $this->cityName = $city;
        return $this;
    }
}
$city = new City();
$city->setBio("coca")->setCity("PP");
