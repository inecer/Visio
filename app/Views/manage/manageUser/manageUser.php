<?php $this->layout('layout')?>

<?php $this->start('manageUser_content') ?>
    <div class="p-56 min-h-screen flex justify-center bg-gray-700">
        <h1 class="absolute top-[150px] font-bold text-7xl text-white">Utilisateurs</h1>
        <div>
            <table class="table-auto leading-10 w-auto">
                <thead class="z-10 divide-y divide-indigo-500 hover:divide-indigo-400 transition duration-300">
                <tr class="bg-indigo-100 divide-x divide-indigo-800">
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Nom</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Prénom</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Email</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Roles
                        <div>
                            <select name="id_status" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white hover:bg-indigo-500 hover:text-white focus:border-indigo-500 focus:outline-none" aria-label="Default select example" onchange="location = this.value;">
                                <option selected >Filtre par rôle :</option>
                                <option value="<?= $this->url('manageUser_mngUser')?>">Tous</option>
                                <option value="<?= $this->url('manageUser_mngUserByRole')?>1">Administrateur</option>
                                <option value="<?= $this->url('manageUser_mngUserByRole')?>2">Enseignant</option>
                                <option value="<?= $this->url('manageUser_mngUserByRole')?>3">Auteur</option>
                                <option value="<?= $this->url('manageUser_mngUserByRole')?>4">Etudiant</option>
                            </select>
                        </div></th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Statut ban</th>
                    <th class="w-64 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-500 hover:bg-indigo-400 transition duration-300 ">Actions</th>
                </tr>

                </thead>
                <tbody class="bg-white divide-y divide-indigo-300">
                <?php foreach($users as $user): ?>
                    <tr class="divide-x divide-indigo-300">
                        <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($user['name'])?></td>
                        <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($user['firstName'])?></td>
                        <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($user['email'])?></td>
                        <?php if ($this->e($user['label'])):?>
                            <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200"><?=$this->e($user['label'])?></td>
                        <?php else:?>
                            <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200">Aucun</td>
                        <?php endif ?>
                        <?php if ($this->e($user['blocked']) == 1):?>
                            <td class=" px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-20 font-bold">Bannis</td>
                        <?php else:?>
                            <td class="px-6 py-4 whitespace-nowrap bg-white border-r border-indigo-200 ">Non bannis</td>
                        <?php endif ?>
                        <td class="p-2 md:border md:border-indigo-500 text-left block md:table-cell">
                            <span class="inline-block  w-1/3 hidden font-bold">Actions</span>
                            <a href="<?= $this->url('manageUser_mngUserEditById') . $this->e($user['id'])?>" class="transition duration-300 bg-sky-500 hover:bg-indigo-500 text-white font-bold py-2 px-6 border border-sky-700 hover:border-indigo-300 rounded">Modifier</a>
                            <a href="<?= $this->url('manageUser_mngUserDelete') . $this->e($user['id'])?>" class="transition duration-300 bg-red-500 hover:bg-indigo-500 text-white font-bold py-2 px-6 border border-red-700 hover:border-indigo-300 rounded">Supprimer</a>
                            <?php if ($this->e($user['blocked']) == 1):?>
                                <a href="<?= $this->url('manageUser_mngUserUnban') . $this->e($user['id'])?>" class="transition duration-300 bg-amber-400 hover:bg-indigo-500 text-white font-bold py-2 px-6 border border-amber-500 hover:border-indigo-300 rounded">Débannir</a>
                            <?php else: ?>
                                <a href="<?= $this->url('manageUser_mngUserBan') . $this->e($user['id'])?>" class="transition duration-300 bg-orange-600 hover:bg-indigo-500 text-white font-bold py-2 px-6 border border-orange-700 hover:border-indigo-300 rounded">Bannir</a>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $this->stop('manageUser_content') ?>