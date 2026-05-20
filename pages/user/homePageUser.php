<?php
require "../../src/Entities/user.php";
session_start();
if(!isset($_SESSION["user"])){
    header("Location: ../../index.php");
    exit();
}else{
    $user=$_SESSION["user"];
    // var_dump($user);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between hidden md:flex shrink-0">
            <div>
                <div class="h-16 flex items-center px-6 border-b border-slate-800 gap-2 font-bold text-white text-lg">
                    <i data-lucide="layout-dashboard" class="w-6 h-6 text-indigo-400"></i>
                    <span>PeerSync</span>
                </div>                
                <!-- Navigation Links -->
                <nav class="p-4 space-y-1">
                 <form action="#" method="get">
                       <a href="?page=skills"  class="flex items-center gap-3 px-4 py-2.5 rounded-lg bg-indigo-600 text-white font-medium transition">
                        <span>skills</span>
                    </a>
                    <a href="?page=requests" class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition text-slate-400">
                        <span>My Help Requests</span>
                    </a>
                    <a href="?page=answers"  class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition text-slate-400">
                        <span>Answers</span>
                    </a>
                    <a href="?page=reviews" class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition text-slate-400">
                        <span>Reviews</span>
                    </a>
                 </form>
                </nav>
            </div>
            <div class="p-4 border-t border-slate-800 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center text-indigo-400 font-semibold border border-indigo-500/30">
                    <?=$user["nom"][0].$user["prenom"][0]?>
                </div>
                <div class="overflow-hidden">
                    <p class="text-sm font-medium text-white truncate"><?=$user["nom"]." ".$user["prenom"]?></p>
                    <p class="text-xs text-slate-500 truncate"><?=$user["email"]?></p>
                </div>
            </div>
        </aside>
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            
            <!-- TOP BAR / HEADER -->
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 shrink-0">
                <div class="flex items-center gap-4">
                    <button class="md:hidden text-slate-600 hover:text-slate-900">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                    <h1 class="text-xl font-semibold text-slate-900">PeerSync</h1>
                </div>
            </header>

            <!-- VIEWPORT SCROLL CONTAINER -->
            <main class="flex-1 overflow-y-auto p-6 space-y-6">
                   <?php
                    $page = $_GET["page"] ?? "skills";
                    if ($page === "skills") {
                        require "../pageMenu/skillsPage.php";
                    } elseif ($page === "requests") {
                        require "../pageMenu/requestPage.php";
                    } elseif ($page === "answers") {
                        require "../pageMenu/answersPage.php";
                    } elseif ($page === "reviews") {
                        require "../pageMenu/reviewPage.php";
                    }
                   ?>
            </main>
        </div>
    </div>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
<?php 
}