<?php echo $this->getChild('header')->toHtml(); ?>

<section class="hero">

    <div class="leftbar">
        <div class="leftbar__lists">
            <?php echo $this->getChild('left')->toHtml(); ?>
        </div>
    </div>
    <div class="rightbar">
        <?php echo $this->createBlock('Block_Core_Layout_Message')->toHtml(); ?>
        <?php echo $this->getChild('content')->toHtml(); ?>
    </div>
</section>

<?php echo $this->getChild('footer')->toHtml(); ?>