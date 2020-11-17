<?php

class UrlParser
{
    const REGEXP = '/href="[^\"]{1,200}/';
    private $url;
    
    public function setUrl($url) {
        $this->url = $url;
    }

    public function getClearLinks()
    {
        $page = $this->retrivePage();
        $tags = $this->retriveArrayWithTags($page);
        
        return $this->clearLinks($tags);
    }

    private function retrivePage()
    {
        return file_get_contents($this->url);
    }

    private function retriveArrayWithTags($page)
    {
        return explode('<a', $page);
    }

    private function clearLinks($arrayTags)
    {
        $matches = [];
        $links = [];
        $removeStr = 'href="';

        foreach ($arrayTags as $link) {
            if (preg_match(self::REGEXP, $link, $matches)) {
                array_push($links, str_replace($removeStr, '', array_shift($matches)));
            }
        }
        
        return $links;
    }
}
