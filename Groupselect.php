<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Group.css">
    <link rel="stylesheet" href="Groupform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <div class="add-group">
        <a id = "add_g">Add</a>
    </div> -->

    <div class="Group">
        <div class="Title_bar">
            <div class="Group_No">
                <h2>@</h2>
            </div>
            <div class="Title">
                <h2>Project Management System</h2>
            </div>
        </div>
        <div class="Group_Member">
            <ul>
                <li>Bhavya</li>
                <li>Veer</li>
            </ul>
        </div>
    </div>

    <div class="form-container">
        <form class="add_group" action="Groupselect.php" method="POST">
            <div class="form-group">
                <label for="Project_name">Enter a name:</label>
                <input type="text" name="Project_name" id="Project_name" placeholder="PMS">
            </div>

            <div class="form-group">
                <label for="Members">Number of Members:</label>
                <input type="number" name="Members" id="Members" max="3" placeholder="1" oninput="generateMemberFields()">
            </div>

            <div id="memberFieldsContainer" class="member-fields"></div>
        </form>
    </div>
    <!-- <style>
    
    </style> -->
    <script>

    function generateMemberFields() {
        var container = document.getElementById("memberFieldsContainer");
        container.innerHTML = ""; // Clear any existing member fields
        

        var count = parseInt(document.getElementById("Members").value);
        if(count>3)
        {
            count = 3;
            document.getElementById("Members").value = 3;
        }
        for (var i = 1; i < count; i++) {  
            var input = document.createElement("input");
            var id = document.createElement("input");
            var inp = document.createElement("div");

            inp.class="member_detail";

            id.type = "number";
            id.name = "id" + i;
            id.id = "id" + i;
            id.min ="0";
            id.placeholder = "id_" + i;

            input.type = "number";
            input.name = "sem" + i;
            input.id = "sem" + i;
            input.max = "8";
            input.min ="1";
            input.placeholder ="sem";

            inp.appendChild(id);
            inp.appendChild(input);

            container.appendChild(inp);
        }
    }
</script>
</body>
</html>