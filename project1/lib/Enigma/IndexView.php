<?php

namespace Enigma;


class IndexView
{
    public function __construct(System $system){
        $this->system = $system;
    }

    public function present(){
        $html=<<<HTML
<header>
  <figure><img src="images/banner-800.png" width="800" height="357" alt="Header image"/></figure>
</header>
<h1 class="center">Welcome to Chenshu Xu's Endless Enigma!</h1>
<div class="body">
  <form class="dialog" method="post" action="post/index-post.php">
    <div class="controls">
      <p class="name"><label for="name">Name </label><br><input type="text" id="name" name="name"></p>
      <p>
        <button>Start</button>
      </p>
HTML;

        if ($this->system->getError()){
            $html .= "<p class=\"message\">You must enter a name!</p>";
        }

        $html .=<<<HTML
    </div>
  </form>
</div>
<footer>
  <p class="center"><img src="images/banner1-800.png" width="800" height="100" alt="Footer image"/></p>
</footer>
HTML;

        return $html;
    }

    private $system;
}