<?php
 $arr = [
     'page1' => [
         'page' => 'page1',
         'html' => 'page1.html'
     ],
     'page2' => [
        'page' => 'page2',
        'html' => 'page2.html'
    ],
];

echo '    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">';

function menu($arr, $gor = true) {
    if ($gor) {
        $html = '<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">'; 
        
        foreach ($arr as $item) {
            $html .= '<li class="nav-item">
            <a class="nav-link" href="' . $item['html'] . '">' . $item['page'] . '</a>
          </li>';
        }
        $html .= "</ul>
        </div>
      </nav>";
    }elseif (!$gor) {
        $html = '<nav class="sidebar-sticky bg-light navbar-light navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav flex-column">';
        foreach ($arr as $item) {
            $html .= '<li class="nav-item">
            <a class="nav-link" href="' . $item['html'] . '">' . $item['page'] . '</a>
          </li>';
        }
        $html .= "</ul>
        </div>
      </nav>";
    }

    return $html;
}
echo menu($arr);
echo menu($arr, false);