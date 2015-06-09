<?php 
    $data['current']    = 'cms';
    $data['active']     = 'cmsindex';
    $this->getBlock('design/header-admin', $data);
    $href = __WWW__ . '/cms/editpage';
    $button_label = "Créer une page";
?>
    <div class="well content-box">
        <div class="content-box-header">
            <h3>Liste des pages</h3>
        </div>
        <div class="content-box-content">
<?php 
    $this->getParentBlock($data);
?>
        </div>
    </div>
    <a id="clementine_cms_add_page" class="clementine_crud-createbutton clementine_crud-list-createbutton btn btn-primary btn-lg pull-right btn-fab btn-material-red" href="<?php echo $href; ?>" title="<?php echo $button_label; ?>">
        <i class="glyphicon glyphicon-plus"></i><span class="text-hide"><?php echo $button_label; ?></span>
    </a>
<?php 
    $this->getBlock('design/footer-admin', $data);
?>
