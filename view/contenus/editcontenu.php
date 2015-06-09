<?php
    $arr = array("active" => "cms", "current" => "editpage");
    $this->getBlock('design/header-admin', $arr);
    $this->getParentBlock($data);
?>
    <button
        onclick="jQuery('#form_content_edit_submit input').each(function() {
            /* fix pour ckeditor */
            if (jQuery().ckeditor) {
                try {
                    jQuery('textarea').ckeditor(function(){
                        this.destroy();
                    });
                } catch (e) {
                    // exception : si le destroy provoque un plantage on ne veut pas pour autant que le formulaire ne soit pas sauve
                    erreur = e;
                }
            }
        });
        jQuery('form[name=add_content]').submit();
        return false; "
        type="submit"
        class="clementine_cms-savebutton savebutton btn btn-lg btn-primary btn-raised pull-right btn-fab"
        title="Enregistrer">
        <i class="glyphicon glyphicon-ok"></i><span class="text-hide">Enregistrer</span>
    </button>

    <a class="clementine_cms-backbutton backbutton btn btn-lg btn-default btn-raised btn-white pull-left btn-fab" href="<?php echo __WWW__; ?>/cms/editpage?id=<?php echo $data['page']; ?>" title="Retour">
        <i class="glyphicon glyphicon-arrow-left"></i><span class="text-hide">Retour</span>
    </a>

<?php
    $this->getBlock('design/footer-admin', $data);
?>
