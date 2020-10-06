    public function ImageEncode($id,$name) {
        //IMAGE_PATH Pyhsical path
        $imgpath=env('IMAGE_PATH', asset("/image/"))."/".$id."/".$name;
        $path = $imgpath;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = $imgpath;
        $base64 = base64_encode(file_get_contents($imgpath));
        return $base64;
        
    }
