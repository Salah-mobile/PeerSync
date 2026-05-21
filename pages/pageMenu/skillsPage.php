<?php
if(isset($_POST["add"])){
  
}
?>
<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-xl shadow-md">
<h2 class="text-xl font-bold text-gray-800 mb-4">Ajouter une nouvelle tâche</h2>
<form class="flex gap-2" action="#" method="post">
    <input 
        type="text" 
        placeholder="Kteb l-mozhima hna..." 
        class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700"
        name="comp"
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