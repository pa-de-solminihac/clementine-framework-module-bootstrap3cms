<?php
// redirection si un seul type de contenu possible
if (isset($data['content'])) {
    $contenu = $data['content'];
    $nb_types_contenus = 0;
}
if (count($contenu) > 1) {
    foreach ($contenu as $type) {
        $option = substr($type, 1 + strlen($this->getModel('cms')->table_cms_contenu));
        // si le type de contenu n'a pas de nom on ne le propose pas
        if (!empty(Clementine::$config['module_contenus'][$option . '_name'])) {
            ++$nb_types_contenus;
        }
    }
}
if (!$nb_types_contenus) {
    $url = __WWW__ . '/contenus/addcontenu?id_zone=';
    if ($request->get('int', 'id')) { 
        $url .= $request->get('int', 'id'); 
    } else { 
        $url .= '0'; 
    } 
    $url .= '&id_page=';
    if ($request->get('int', 'page')) { 
        $url .= $request->get('int', 'page'); 
    } else { 
        $url .= '0'; 
    } 
    $url .= '&type_content=' . $contenu[0];
?>
<script type="text/javascript">
    window.document.location.href = '<?php echo $url; ?>';
</script>
<?php
    return;
}
?>
<style>
div.form_contenu_edit a {
    padding: 1em;
    display: block;
    background: #CCC;
    text-align: center;
}
div.form_contenu_edit a:hover {
    background: #DDD;
    color: #000;
    font-weight: bold;
}
</style>
<h1>Ajouter un contenu</h1>
<h2>Choisissez un type de contenu</h2>
<p>
<?php 
    $this->getParentBlock($data);
?>
</p>
<p>
</p>
