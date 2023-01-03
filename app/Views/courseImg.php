<?php $this->layout('layout'); ?>

<?php $this->start('course_content') ?>
<div class="p-56 min-h-screen flex justify-center bg-gray-700">
    <div class="bg-white p-16 rounded shadow-2xl">
    <div class="content">

        <div class="viewerFrame">
            <?php if ($this->e($coloring['label'])): ?>
            <h1><span  class="text-2xl font-bold mb-10 text-gray-800">Cortex visuel humain</span> : <span class="font-bold mb-10 text-gray-400"><?=$this->e($coloring['label'])?></span></h1>
            <?php else: ?>
            <h1><span  class="text-2xl font-bold mb-10 text-gray-800">Cortex visuel humain</span> : <span class="font-bold mb-10 text-gray-900">Aucune coloration !</span></h1>
            <?php endif ?>
            <!-- The toolbar mounts itself into a DIV on your page -->
            <div id="my-toolbar-container"></div>
            <div id="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" style="margin: 10px">
                <div id="custom-handle" class="ui-slider-handle"></div>
            </div>

            <div id="viewer" class="viewer w-96 h-64"></div>
        </div>

        <div id="thumbnails" class="thumbnails">
            <a class="absolute top-[740px] text-gray-700 hover:text-gray-500 font-bold" href="javascript:history.back()">Retour</a>
        </div>
    </div>
    </div>
</div>


<!-- JS -->
<script src="<?= $this->assetUrl('js/openseadragon.min.js') ?>"></script>

<script>
    OpenSeadragon({
        showNavigator:  true,
        id: "viewer",
        prefixUrl: "<?= $this->assetUrl('img/openSeadragon/') ?>",
        tileSources: 'https://crsonline.biomedicale.parisdescartes.fr/visio/public/assets/dzi/<?=$this->e($img)?>/file.dzi'
    });
</script>
<?php $this->stop('course_content') ?>


