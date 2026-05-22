<?php
require_once "../../src/Repostries/compRepo.php";
$user = $_SESSION["user"];
$comR = new compRepo();
$skills = $comR->displaySkillUser($user["id"]);
?>
<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-xl shadow-md space-y-6">
    <div>
        <h2 class="text-xl font-bold text-gray-800 mb-4">Ajouter une nouvelle compétence</h2>
        <form class="flex gap-2" action="../../src/Services/skillService.php" method="post">
            <input 
                type="text" 
                placeholder="Ex: PHP, Tailwind, MySQL..." 
                class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700"
                name="comp"
                required
            />
            <button 
                type="submit" 
                class="px-5 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-sm"
                name="add"
            >
                Ajouter
            </button>
        </form>
    </div>
    <hr class="border-gray-100" />
    <div>
        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Mes Compétences</h3>
        <?php if (!empty($skills)): ?>
            <div class="flex flex-wrap gap-2">
                <?php foreach($skills as $skill): ?>
                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium bg-blue-50 text-blue-700 border border-blue-100 shadow-sm">
                        <?= htmlspecialchars($skill["name"]) ?>
                    </span>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-sm text-gray-400 italic">Aucune compétence ajoutée pour le moment.</p>
        <?php endif; ?>
    </div>

</div>