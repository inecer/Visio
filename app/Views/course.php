<?php $this->layout('layout'); ?>

<?php $this->start('course_content') ?>
<div class="p-96 min-h-screen flex justify-center bg-gray-700">
    <div class="absolute top-[200px] bg-white p-16 rounded shadow-2xl w-2/3">
    <h1 class=" underline decoration-indigo-500 font-bold text-7xl text-gray-900"> <?=$this->e($courses['title'])?></h1>
        <br>
        <h1 class="text-left text-2xl text-gray-800">Description : </h1>
    <div class=" bg-indigo-500 pb-16 text-white  rounded ">
        <p><?=$this->e($courses['description'])?></p>
    </div>
        <br>
        <div class="columns-3xs">
            <?php foreach($pictures as $picture): ?>
                <div>
                    <?php if (in_array($picture['id'], $course_picture)): ?>
                    <a href="<?=$this->url("course_courseImg").$picture['dzi']?>">
                        <label><img class="object-fill rounded w-24 h-24" src="<?=$this->e($picture['url'])?>" /></label>
                    </a>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
        <br>
        <br>
        <a class="text-gray-700 text-center hover:text-indigo-500 font-bold" href="<?=$this->url("course_courseList")?>" >Retour</a>
    </div>
</div>
<?php $this->stop('course_content') ?>
