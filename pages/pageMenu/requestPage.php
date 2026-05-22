<?php
require_once "../../src/Repostries/compRepo.php";
require_once "../../src/Repostries/helpReqRepo.php";
$user=$_SESSION["user"];
$skillsRep=new compRepo();
$skills=$skillsRep->displaySkillUser($user["id"]);
$reqestRepo=new HelpReqRepo();
$myreqestH=$reqestRepo->displayReqUser($user["id"]);
if (isset($_POST["delete"])) {
    $reqestRepo->deleteHelpRequest($_POST["delete"]);
    header("Location: ../user/homePageUser.php?page=requests");
    exit();
}
?>
<!-- Request Form Section -->
<div class="bg-white p-6 rounded-lg shadow-md mb-8">
    <h2 class="text-xl font-bold mb-4 text-gray-800">Create a New Request</h2>
    
    <form id="requestForm" class="space-y-4" action="../../src/Services/helpReqService.php" method="post">
        <!-- Input: Name of the request -->
        <div>
            <label for="requestName" class="block text-sm font-medium text-gray-700 mb-1">Request Name</label>
            <input type="text" id="requestName" name="requestName" required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                   placeholder="e.g., Bug fix in the parent file...">
        </div>

        <!-- Select: Skills -->
        <div>
            <label for="requestSkill" class="block text-sm font-medium text-gray-700 mb-1">Required Skill</label>
            <select id="requestSkill" name="requestSkill" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="" disabled selected>Select a skill...</option>
                <?php
                foreach ($skills as $skill) {
                    ?>
                    <option value="<?=$skill["id"]?>"><?=$skill["name"]?></option>
                    <?php
                }
                ?>
            </select> 
        </div>

        <!-- Description -->
        <div>
            <label for="requestDescription" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea id="requestDescription" name="requestDescription" rows="4" required
                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                      placeholder="Describe your issue or what you need help with here..."></textarea>
        </div>

        <!-- Button: Add -->
        <div class="flex justify-end">
            <button type="submit" 
                    name="addR"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-200">
                Add Request
            </button>
        </div>
    </form>
</div>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4 text-gray-800">Requests List</h2>
    
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Skill</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">created_at</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody id="requestsTableBody" class="bg-white divide-y divide-gray-200">
                <?php
                if(empty($myreqestH)){
                    echo "empty";
                }else{
                    ?>
                    <?php
                    foreach ($myreqestH as $req ) {
                        ?>
                           <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?=$req["title"]?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800"><?=$req["skillName"]?></span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate"><?=$req["description"]?></td>
                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate"><?=$req["status"]?></td>
                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate"><?=$req["created_at"]?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                               <form action="#" method="post">
                                 <button class="text-red-600 hover:text-red-900 font-medium" name="delete" value=<?=$req["id"]?>>Delete</button>
                                </form>
                            </td>
                            </tr>    
                        <?php
                    }
                    ?>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>