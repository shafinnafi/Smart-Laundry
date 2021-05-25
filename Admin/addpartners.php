<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add-partner</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/addpartners.css">

    <script type="text/javascript" src="/bootstrap.min.js"></script>

    <style>
        body {
            font: 16px arial;
            margin: 0;
            padding: 0;
            background: white;
        }

        #header {
            text-align: center;
            background-color: skyblue;
            padding: 10px;
        }



        #header h1 {
            color: #fff;
            font-size: 40px;
            font-style: italic;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0;
        }

        #cancel {
            font-size: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 5px 10px;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 5px;
            margin: 10% 0 0 5%;
            cursor: pointer;
            transition: all 0.3s;

        }

        
    </style>
</head>

<body>

    <?php require_once 'addpartneraction.php' ?>
    <?php $pass = ""; ?>

    <div id="main-content">
        <div id="header">
            <h2>Add New Partner</h2>
        </div>

        <div id="wrapper">
            <form name="pgenerate" class="post-form" action="addpartneraction.php" enctype="multipart/form-data" method="post" >
                <div class="form-group">
                    <label>Partner Name:</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>User Name:</label>
                    <input type="text" name="uname" required>
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="address" required>
                </div>

                <div class="form-group">
                    <label>Choose logo:</label>
                    <input type="file" name="logo"  required>
                </div>              

                <div class="form-group">
                    <label>Phone:</label>
                    <input type="text" name="phone" required>
                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" name="output">
                </div>



                <div id="button">
                    <input type="button" value="Generate Password" onClick="populateform(this.form.thelength.value)" style="font-size: 12px;
            
                text-transform: uppercase;
               
                color: #fff;
                background-color: #333;
                padding: 10px 10px;
                border: none;
                border-radius: 5px;
                margin: 0 0 0 325px;
                cursor: pointer;
                transition: all 0.3s;">

                </div>

                <div>

                    <input type="hidden" name="thelength" size=3 value="4">

                </div>

                <input class="submit" type="submit" name="save" value="Save" />

                <button type="button" id="cancel" data-dismiss="modal">Cancel</button>

                <!-- <div class="modal-footer">
                    				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
                </div> -->
            </form>
        </div>
    </div>


    <script src="addpartners.js"></script>
</body>

</html>