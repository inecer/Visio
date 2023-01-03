<?php $this->layout('layout'); ?>

<?php $this->start('courseList_content') ?>
    <div class="p-56 min-h-screen flex justify-center bg-gray-700">
        <div class="grid grid-cols-6 gap-4 space-x-8">
            <?php foreach($courses as $course): ?>
                <div class="space-y-4">
                    <div class=" rounded-lg transform hover:-translate-y-2 transition-transform duration-500 ease-in-out">
                        <a href="<?= $this->url('course_courseById'). $this->e($course['id'])?>" class="p-12 shadow-xl rounded bg-white text-gray-700 hover:bg-indigo-500 hover:text-white font-mono font-semibold text-center"><?=$this->e($course['title'])?></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php $this->stop('courseList_content') ?>
