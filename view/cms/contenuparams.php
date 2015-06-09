<?php
    $this->getBlock('design/header-admin', $data);
?>
<div class="clementine_cms_contenu_params_wrapper">
<?php
    $this->getParentBlock($data);
?>
</div>
<a class="clementine_cms-backbutton backbutton btn btn-lg btn-default btn-raised btn-white pull-left btn-fab" href="<?php echo __WWW__; ?>/cms/editpage?id=<?php echo $data['id_page']; ?>" title="Retour">
    <i class="glyphicon glyphicon-arrow-left"></i><span class="text-hide">Retour</span>
</a>
<?php
    $this->getBlock('design/footer-admin', $data);
?>
