<?php
/* function:  generates thumbnail */
function make_thumb($src,$dest,$desired_width) {
    /* read the source image */
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);
    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height*($desired_width/$width));
    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width,$desired_height);
    /* copy source image at a resized size */
    imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image,$dest);
}

/* function:  returns files from dir */
function get_files($images_dir,$exts = array('jpg')) {
    $files = array();
    if($handle = opendir($images_dir)) {
        while(false !== ($file = readdir($handle))) {
            $extension = strtolower(get_file_extension($file));
            if($extension && in_array($extension,$exts)) {
                $files[] = $file;
            }
        }
        closedir($handle);
    }
    return $files;
}

/* function:  returns a file's extension */
function get_file_extension($file_name) {
    return substr(strrchr($file_name,'.'),1);
}
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fullpage.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/smoothbox.css')}}"> 
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/smoothbox.jquery2.js')}}"></script>
    <script src="{{asset('js/jquery.fullpage.min.js')}}"></script>
    <title>▲</title>
</head>
<body> 
    <div id="fullpage">    
        <div class= "section" data-anchor="page1">
            <div class="xxx">
                <div id="head">
                    <div id="titulo">
                        transaKryTica
                    </div>

                    <div id="menu">
                        <a href="#page2">sobre</a>
                        <a href="#page3">lowcura</a>
                        <a href="#">flerte</a>
                        <a href="#">gentes</a>
                        <a href="#">mídia</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" data-anchor="page2">
            <div class="xxx">
                <div class="conteudo">
                    <div id="sobre">
                        <h1>transa</h1>
                        <p>
                         Lorem ipsum ultrices ut semper congue nec, bibendum faucibus aptent phasellus adipiscing tortor ut, in curabitur semper ut facilisis. mi lacinia malesuada et sapien nostra mi cubilia rhoncus nullam venenatis eros potenti curae, quam est phasellus suspendisse sapien lectus turpis dictum taciti suscipit a. luctus nisi etiam sagittis malesuada massa vulputate feugiat lorem, habitant fames risus vel tortor sollicitudin sem facilisis, posuere semper luctus duis massa varius purus. curae nisi volutpat nunc arcu cras hac ullamcorper varius, tristique erat in donec posuere etiam habitant placerat, dui ultrices eu cubilia et neque orci.                         
                     </p>
                     <p>
                         Congue dictumst nullam leo hendrerit, volutpat ut cras. 
                     </p>  
                 </div> 
             </div>
         </div>
     </div>
     <div class="section" data-anchor="page3">
        <div class="xxx">
            <div id="galeria"> 
                <?php
                /** settings **/
                $images_dir = 'images/2016/';
                $thumbs_dir = 'thumbs/';
                $thumbs_width = 200;
                $images_per_row = 4;

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
                     echo '<a href="',$images_dir.$file,'" class="photo-link smoothbox sb" rel="gallery"><img src="',$thumbnail_image,'" /></a>';
                     if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
                 }
                 echo '<div class="clear"></div>';
             }
             else {
                 echo '<p>There are no images in this gallery.</p>';
             }
             ?>
             </div>
         </div>
     </div>
</div>
</body>
</html>