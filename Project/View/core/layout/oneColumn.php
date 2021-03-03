<?php

// $children = $this->getChildren();

// foreach ($children as $child) {
//     $child->toHtml();
// }


echo $this->getChild('header')->toHtml();
echo $this->createBlock('Block_Core_Layout_Message')->toHtml();
echo $this->getChild('content')->toHtml();
echo $this->getChild('footer')->toHtml();
