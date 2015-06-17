<?php 
    $data['current']    = 'cms';
    $data['active']     = 'cmsindex';
    $this->getBlock('design/header-admin', $data);
?>

    <!-- formulaire parametres de la page -->
    <div class="content-box ">
        <div class="content-box-header">
            <h3>
                Informations de la page
<?php
    if (isset($data['page']) && $data['page']) {
?>
                <a class="parametres btn btn-xs btn-default " rel="modal" href="<?php echo __WWW__ . '/cms/pageparams?id_page=' . $data['page']['id']; ?>" title="Gérer les tags">
                    <i class="glyphicon glyphicon-tags"></i><span class="text-hide">Gérer les tags</span>
                </a>
                <div class="spacer"></div>
<?php
    }
?>
            </h3>
        </div>
        <div class="content-box-content">
<?php 
    $this->getParentBlock($data, $request);
?>
        </div>
    </div>

<?php
    $this->getBlock('design/footer-admin', $data);
?>
