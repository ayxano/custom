<?php

namespace Controller;

class PageController extends Controller
{
    /**
     * 
     * @return string
     */
    public function index() : string
    {
        $postInfo = 'I\'m in the homepage';
        return $this->render("post_detail", ['postInfo' => $postInfo]);
    }

    public function folderOne() : string
    {
        $postInfo = 'I\'m in folder1';
        return $this->render("post_detail", ['postInfo' => $postInfo]);
    }

    public function folderTwo() : string
    {
        $postInfo = 'I\'m in folder2';
        return $this->render("post_detail", ['postInfo' => $postInfo]);
    }
}
