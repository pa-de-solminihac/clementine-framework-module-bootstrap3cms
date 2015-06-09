<?php 
    $data['current']    = 'cms';
    $data['active']     = 'cmsindex';
    $this->getBlock('design/header-admin', $data);
?>

    <!-- titre de la page -->
<?php
    if (isset($data['page']) && $data['page']) {
        $save_button = 'Enregistrer';
    } else {
        $save_button = 'Créer';
    }
?>

    <!-- formulaire parametres de la page -->
    <form name="edit_page" method="post" action="<?php echo __WWW__; ?>/cms/editpage?id=<?php
    if (isset($data['page']['id'])) {
        echo $data['page']['id']; 
    }
?>" enctype="multipart/form-data">
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
    $this->getParentBlock($data);
?>
            </div>
        </div>

    <a class="clementine_cms-backbutton backbutton btn btn-lg btn-default btn-raised btn-white pull-left btn-fab" href="<?php echo __WWW__ . '/cms'; ?>" title="Retour">
        <i class="glyphicon glyphicon-arrow-left"></i><span class="text-hide">Retour</span>
    </a>

<?php
    if (isset($data['page']) && $data['page']) {
?>

            <a class="supprimer clementine_cms-delbutton delbutton btn btn-lg btn-danger btn-raised pull-right btn-fab"
                href=""
                onclick="return delete_page('<?php echo $data['page']['id']; ?>');"
                title="Supprimer">
                <i class="glyphicon glyphicon-trash"></i><span class="text-hide">Supprimer</span>
            </a>

            <a target="_blank" class="clementine_cms-viewpagebutton viewpagebutton btn btn-lg btn-default btn-raised pull-right btn-fab"
                href="<?php echo __WWW__ . '/' . $data['page']['slug']; ?>"
                title="Voir la page">
                <i class="glyphicon glyphicon-eye-open"></i><span class="text-hide">Voir la page</span>
            </a>
<?php
    }
?>

        <button
            type="submit"
            class="clementine_cms-savebutton savebutton btn btn-lg btn-primary btn-raised pull-right btn-fab"
            title="<?php echo $save_button; ?>">
            <i class="glyphicon glyphicon-ok"></i><span class="text-hide"><?php echo $save_button; ?></span>
        </button>

    </form>
<?php
    $this->getBlock('design/footer-admin', $data);
?>
