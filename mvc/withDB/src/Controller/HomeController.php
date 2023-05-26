<?php

namespace Controller;

use Entities\Post;
use Exceptions\EntityNotFoundException;

class HomeController extends Controller
{
    /**
     * @param string $slug
     * 
     * @return string
     */
    public function index(string $slug = '/') : string
    {
        $post = $this->ci->get('db')->getRepository(Post::class)->findOneBy([
            'slug' => $slug
        ]);
        if($post === null)
        {
            throw new EntityNotFoundException;
        }
        return $this->render("post_detail", ['postInfo' => $post]);
    }
}
