<?php
require_once "../../src/Repostries/helpReqRepo.php";

$reqestRepo = new HelpReqRepo();
$user=$_SESSION["user"];
$results = $reqestRepo->diplayAllHelpR($user["id"]);
?>

<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold text-slate-900 tracking-tight">Demandes d'aide globales</h2>
            <p class="text-sm text-slate-500 mt-1">Consultez et assignez-vous les tickets d'aide créés par les étudiants.</p>
        </div>
        <span class="bg-indigo-50 text-indigo-700 text-xs font-semibold px-3 py-1.5 rounded-full border border-indigo-200/60">
            <?= count($results ?? []) ?> Ticket(s) disponible(s)
        </span>
    </div>

    <div class="grid grid-cols-1 gap-4">
        <?php if (!empty($results)): ?>
            <?php foreach ($results as $request): ?>
                
                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-xs flex flex-col sm:flex-row sm:items-center justify-between gap-6 transition-all duration-200 hover:shadow-md hover:border-slate-300">
                    
                    <div class="space-y-3 flex-1 min-w-0">
                        
                        <div class="flex items-center gap-2">
                            <span class="inline-flex items-center gap-1.5 bg-slate-100 text-slate-700 text-xs font-medium px-2.5 py-0.5 rounded-md">
                                <i data-lucide="user" class="w-3.5 h-3.5 text-slate-500"></i>
                                Étudiant
                            </span>
                            <span class="text-sm font-semibold text-slate-700 truncate">
                                <?= htmlspecialchars($request['student_nom'] . ' ' . $request['student_prenom']) ?>
                            </span>
                        </div>
                        
                        <div>
                            <h3 class="text-base font-bold text-slate-900 line-clamp-1">
                                <?= htmlspecialchars($request['title']) ?>
                            </h3>
                            <p class="text-sm text-slate-600 mt-1 line-clamp-2 leading-relaxed">
                                <?= htmlspecialchars($request['description']) ?>
                            </p>
                        </div>
                        
                        <div class="flex items-center gap-4 text-xs text-slate-400 pt-1 border-t border-slate-100/80">
                            <span class="flex items-center gap-1">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                <?= htmlspecialchars(date('d M Y à H:i', strtotime($request['created_at']))) ?>
                            </span>
                        </div>
                    </div>

       
                    <div class="flex items-center shrink-0 self-end sm:self-center">
                        <?php if (($request['status'] ?? 'pending') === 'pending'): ?>
                            <form action="assign_process.php" method="POST" class="m-0">
                                <input type="hidden" name="request_id" value="<?= $request['id'] ?>">
                                <button type="submit" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm px-4 py-2.5 rounded-lg transition-colors cursor-pointer shadow-sm focus:outline-hidden focus:ring-2 focus:ring-indigo-500/20">
                                    <i data-lucide="user-plus" class="w-4 h-4"></i>
                                    <span>Assigner</span>
                                </button>
                            </form>
                        <?php else: ?>
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 text-xs font-semibold px-3 py-1.5 rounded-full border border-emerald-200">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i>
                                Déjà assigné
                            </span>
                        <?php endif; ?>
                    </div>

                </div>

            <?php endforeach; ?>
        <?php else: ?>
           
            <div class="bg-slate-50 border-2 border-dashed border-slate-200 rounded-xl p-12 text-center">
                <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center mx-auto mb-3 text-slate-400">
                    <i data-lucide="inbox" class="w-6 h-6"></i>
                </div>
                <h3 class="text-sm font-semibold text-slate-800">Aucune demande disponible</h3>
                <p class="text-xs text-slate-500 mt-1">Tous les tickets d'aide ont été traités ou assignés.</p>
            </div>
        <?php endif; ?>
    </div>
</div>


<script>
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>