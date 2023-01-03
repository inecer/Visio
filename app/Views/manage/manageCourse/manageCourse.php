<?php $this->layout('layout')?>

<?php $this->start('manageCourse_content') ?>
    <div class="p-56 min-h-screen flex justify-center bg-gray-700">
        <h1 class="absolute top-[150px] font-bold text-7xl text-white">Cours</h1>
        <div>
            <table class="table-auto leading-10 w-auto">
                <thead class="z-10 divide-y divide-indigo-500 hover:divide-indigo-400 transition duration-300">
                <tr class="bg-indigo-100 divide-x divide-indigo-800">
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Titre</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Description</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Actions<a href="<?= $this->url('manageCourse_mngCourseAdd')?>" class="rounded-full transition duration-300 bg-green-500 hover:bg-indigo-500 text-white font-bold py-2 px-4 border border-green-700 hover:border-indigo-300">Ajouter</a></th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-indigo-300">
                <?php foreach($courses as $course): ?>
                    <tr class="divide-x divide-indigo-300">
                        <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($course['title'])?></td>
                        <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($course['description'])?></td>
                        <td class="p-2 md:border md:border-indigo-500 text-left block md:table-cell">
                            <span class="inline-block  w-1/3 hidden font-bold">Actions</span>
                            <a href="<?= $this->url('manageCourse_mngCourseDelete') . $this->e($course['id'])?>" class="transition duration-300 bg-red-500 hover:bg-indigo-500 text-white font-bold py-2 px-6 border border-red-700 hover:border-indigo-300 rounded">Supprimer</a>
                            <a href="<?= $this->url('manageCourse_mngCourseEditById') . $this->e($course['id'])?>" class="transition duration-300 bg-sky-500 hover:bg-indigo-500 text-white font-bold py-2 px-6 border border-sky-700 hover:border-indigo-300 rounded">Modifier</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $this->stop('manageCourse_content') ?>