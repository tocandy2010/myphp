<?php
//Model
function processDate()
{
    $data = [
        'title' => "yijie title",
        'who' => "yijie"
    ];
    return $data;
}

// call View
function loadView($viewFile,$data){
    $query = http_build_query(['data'=>$data]);
    echo file_get_contents("http://localhost/myphp/views/{$viewFile}.php?{$query}");
}

$data = processDate();
loadView('view1',$data)


?>