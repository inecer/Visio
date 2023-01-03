<?php $this->layout('layout')?>

<?php $this->start('managePictureOwner_content') ?>
    <div class="p-56 min-h-screen flex justify-center bg-gray-700">
        <div>
    <?php if($imageTraitees): ?>
            <table class="table-auto leading-10 w-auto">
    <tbody class="bg-white divide-y divide-indigo-300">
    <h1 class="absolute top-[150px] right-[730px] font-bold text-7xl text-white">Mes images</h1>
    <br>
    <?php foreach($imageTraitees as $imagesTraitee): ?>
            <tr class="divide-x divide-indigo-300">
            <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($imagesTraitee['title'])?></td>
            <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($imagesTraitee['description'])?></td>
            <td>
                <img src="<?=$this->e($imagesTraitee['url'])?>"
            </td>
            <td class="p-2 md:border md:border-indigo-500 text-left block md:table-cell">
                <span class="inline-block  w-1/3 hidden font-bold">Actions</span>
                <a href="<?= $this->url('managePicture_mngPictureEditById') . $this->e($imagesTraitee['id'])?>" class="transition duration-300 bg-sky-500 hover:bg-indigo-500 text-white font-bold py-2 px-6 border border-sky-700 hover:border-indigo-300 rounded">Modifier</a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>

                <thead class="z-10 divide-y divide-indigo-500 hover:divide-indigo-400 transition duration-300">
                <tr class="bg-indigo-100 divide-x divide-indigo-800">
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Titre</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Description</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Mes images </th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Actions</th>
                </tr>
                </thead>
                <?php endif ?>
            </table>
    <br>
    <br>
            <?php if($imageNonTraitees): ?>
                <?php foreach($imageNonTraitees as $imageNonTraitee): ?>
                    <table class="table-auto leading-10 w-auto">
                    <tbody class="bg-white divide-y divide-indigo-300">
                    <h2 class="animate-pulse font-bold text-4xl text-white">Images disponible !</h2>
                    <br>
                    <tr class="divide-x divide-indigo-300">
                        <td>
                            <img src="<?=$this->e($imageNonTraitee['url'])?>"/>
                        </td>
                        <td class="p-2 md:border md:border-indigo-500 text-left block md:table-cell">
                            <span class="inline-block  w-1/3 hidden font-bold">Actions</span>
                            <a href="<?= $this->url('managePicture_mngPictureServerAdd').$imageNonTraitee['dzi']?>" class="rounded transition duration-300 bg-green-500 hover:bg-indigo-500 text-white font-bold py-2 px-4 border border-green-700 hover:border-indigo-300">Ajouter</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>

                <thead class="z-10 divide-y divide-indigo-500 hover:divide-indigo-400 transition duration-300">
                <tr class="bg-indigo-100 divide-x divide-indigo-800">
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Mes images</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Actions</th>
                </tr>
                </thead>
                </table>
            <?php endif ?>
            <a href="<?= $this->url('managePicture_mngPicture')?>" class="animate-bounce absolute top-[250px] right-[850px] rounded-full transition duration-300 bg-rose-500 hover:bg-indigo-500 text-white font-bold py-2 px-4 border border-rose-700 hover:border-indigo-300">Liste des images</a>
        </div>
    </div>
<?php $this->stop('managePictureOwner_content') ?>