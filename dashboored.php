<!DOCTYPE html>
<html lang="en">
<?php
    require 'databaseconnect.php';
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./card.css">
    <link rel="stylesheet" href="./cardform.css">
    <link rel="stylesheet" href="./navbar.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="detail.js"></script>
    <link rel="stylesheet" href="./navbar_dash.css">
    <link rel="stylesheet" href="./main_page.css">
    
    <style>
        body {
            transition: filter 0.3s;
        }
        
        #add-notes {
            cursor: pointer;
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border-radius: 15px;
        }
        
        #add-notes:hover {
            background-color: #B0DAFF;
            color: #fff;
        }
    </style>
</head>

<body>
    <div id = 'nav_desh'>
        <div id="logo">
            <img src="" alt="Logo" >
        </div>
        <div id="nav">
            <ul>
                <li><a href="" style="font-size: 20px;">Daily</a></li>
                <li><a href="" style="font-size: 20px;">Weekly</a></li>
                <li><a href="" style="font-size: 20px;">Photos</a></li>
                <li><a href="logout.php" style="font-size: 20px;" id="logout">Logout</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class = "main_page">
        <div class="button" id="btn">
            <a href="javascript:void(0)" id="add-notes"> + Add</a>
        </div>
        <div id="note-full-container">
            <!-- <div class="card-view" id="card">
                <span class="side-stick"></span>
                <h3 class="title">Book a Ticket for Movie <i class="point "></i></h3>
                <p class="note-date">11 March 2009</p>
                <div class="note-content">
                    <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs.Integer posuere erat a ante venenatis.</p>
                </div>
            </div> -->
            <?php
                $sql = "SELECT *FROM `DAILY`";
                $res = mysqli_query($conn,$sql);
                $no_of_row = mysqli_num_rows($res);
                
                $count = 0;

                while($no_of_row!=$count){
                    $obj = mysqli_fetch_assoc($res);
                ?>
                <div class="card-view" id="card">
                    <span class="side-stick"></span>
                    <h3 class="title"><?php echo $obj['Title']?><i class="point "></i></h3>
                    <p class="note-date"><?php echo $obj['Date']  ?></p>
                    <p class="note-content text-muted" data-notecontent="<?php echo $obj['Description']?>">
                    <?php echo $obj['Description']?>
                    </p>   
                    <p class="user_name">By : <?php echo $obj['User_name'] ?></p>             
                </div>
                <?php
                $count = $count + 1;
                }
            ?>
        </div>


        <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content border-0">
                    <div class="modal-header bg-info text-white">
                        <h5 class="modal-title text-white">Add Notes</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="notes-box">
                            <div class="notes-content">
                                <form action="javascript:void(0);" id="addnotesmodalTitle">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="note-title">
                                                <!-- <label>Note Title</label> -->
                                                <input type="text" id="note-has-title" class="form-control" minlength="25"  name="title" placeholder="Title">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="note-description">
                                                <!-- <label>Note Description</label> -->
                                                <textarea id="note-has-description" class="form-control" minlength="60" name="Desc" placeholder="Description" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button id="btn-n-save" class="float-left btn btn-success" style="display: none;">Save<button> -->
                        <button class="btn btn-danger" data-dismiss="modal">Discard</button>
                        <button name="add-btn" id="btn-n-add" class="btn btn-info" disabled="disabled">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

</body>

</html>