<?php
$tabs = $this->getTabs();
?>

<?php foreach ($tabs as $key => $tab) : ?>
    <a onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl(null, null, ['tabs' => $key]); ?>').load()" href="javascript:void(0)"><?= $tab['label'] ?></a>
<?php endforeach  ?>