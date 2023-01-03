<?php $this->layout('layout')?>

<?php $this->start('managePicture_content') ?>
    <div class="p-56 min-h-screen flex justify-center bg-gray-700">
        <h1 class="absolute top-[150px] font-bold text-7xl text-white">Images</h1>
        <div>
            <table class="table-auto leading-10 w-auto">
                <thead class="z-10 divide-y divide-indigo-500 hover:divide-indigo-400 transition duration-300">
                <tr class="bg-indigo-100 divide-x divide-indigo-800">
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Titre</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Description</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Image </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-indigo-300">
                <?php foreach($pictures as $picture): ?>
                    <tr class="divide-x divide-indigo-300">
                        <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($picture['title'])?></td>
                        <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($picture['description'])?></td>
                        <td>
                                <img src="<?=$this->e($picture['url'])?>"
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <a href="<?= $this->url('managePicture_mngPictureOwner')?>" class="animate-bounce absolute top-[250px] right-[860px] rounded-full transition duration-300 bg-rose-500 hover:bg-indigo-500 text-white font-bold py-2 px-4 border border-rose-700 hover:border-indigo-300">Mes images</a>
        </div>
    </div>
<?php $this->stop('managePicture_content') ?>