<div id="gal_muraw" class="gal-wrap">
    <div class="diff titulo-g" id="off_muraw">
        <p>
            2016 <span class="traco">--------------</span> <span class="final">Muraw-flerte</span>
        </p>
    </div>
    <div class="galeria">
        <?php 
        /** settings **/ 
        $images_dir = 'images/2016b/'; 
        $thumbs_dir = 'thumbs/'; 
        $thumbs_width = 100; 
        $images_per_row = 5; 

        /** generate photo gallery **/ 
        $image_files = get_files($images_dir); 
        if(count($image_files)) { 
            $index = 0; 
            foreach($image_files as $index=>$file) { 
                $index++; 
                $thumbnail_image = $thumbs_dir.$file; 
                if(!file_exists($thumbnail_image)) { 
                    $extension = get_file_extension($thumbnail_image); 
                    if($extension) { 
                        make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width); 
                    } 
                } 
                echo '<a href="',$images_dir.$file,'" data-lightbox="image-1" rel="gallery"><img class="thumb" data-src="',$thumbnail_image,'" /></a>'; 
            } 
            echo '<div class="clear"></div>'; 
        } 
        else { 
            echo '<p>nada aqui ainda.</p>'; 
        } 
        ?> 
    </div>
</div>
