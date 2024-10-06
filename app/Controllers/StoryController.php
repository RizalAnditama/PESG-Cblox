<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StoryController extends BaseController
{

    public function index($id)
    {
        $data = $this->getStory()[$id];

        if ($data->isStoryTelling) {
            return view("story-telling.php", json_decode(json_encode($data), true));
        }
    }

    public function skip($current_id) {}

    public function getStory()
    {
        $json = file_get_contents("story.json");
        $datas =  json_decode($json);
        return $datas;
    }
}
