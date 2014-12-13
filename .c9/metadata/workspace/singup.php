{"changed":true,"filter":false,"title":"singup.php","tooltip":"/singup.php","value":"<?php\nsession_start();\n\ninclude 'User.php';\n\n\n$objUser = new User();\n$objUser->findUserByEmail(\"meme\");\n\n\n?>\n<html>\n  <head>\n\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n\t<meta name=\"robots\" content=\"noindex,nofollow\" />\n    <title>Login Form</title>\n    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\">\n    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>\n    <script src=\"http://code.jquery.com/jquery-2.1.0.min.js\"></script>\n</head>\n\n<body>\n    \n    <div style=\"width:300px; margin:0 auto;\">\n      \n    \n      <?php\n      \n        if( !empty($_SESSION['formError']) ){\n          ?>\n          <div class=\"error\" style=\"color:red\">\n          <?php\n          \n            foreach( $_SESSION['formError'] as $strMessage ){\n              ?>\n              <p>\n                <?php\n                echo $strMessage;\n                ?>\n              </p>\n              <?php\n            }\n          ?>\n          </div>\n          <?php\n          unset( $_SESSION['formError'] );\n        }\n      ?>\n    \n          \n      <form role=\"form\" method=\"POST\" action=\"form.php\">\n          <div class=\"form-group\">\n            <label for=\"login\">Login*</label>\n            <input type=\"text\" class=\"form-control\" name=\"login\" required placeholder=\"Login\">\n          </div>\n          <div class=\"form-group\">\n            <label for=\"password\">Password*</label>\n            <input type=\"password\" data-minlength=\"6\" class=\"form-control\" name=\"password\" required  placeholder=\"Password\">\n          </div>\n          <div class=\"form-group\">\n            <label for=\"first_name\">Name*</label>\n            <input type=\"text\" class=\"form-control\" name=\"first_name\" required placeholder=\"Name\">\n          </div>\n          <div class=\"form-group\">\n            <label for=\"lastname\">Last Name*</label>\n            <input type=\"text\" class=\"form-control\" name=\"lastname\" required placeholder=\"Last Name\">\n          </div>\n          <div class=\"form-group\">\n            <label for=\"email\">Email</label>\n            <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">\n          </div>\n          <div class=\"form-group\">\n            <label for=\"tel\">Phone</label>\n            <input type=\"tel\" class=\"form-control\" name=\"tel\" placeholder=\"Phone\">\n          </div>\n          <div class=\"form-group\">\n            <label for=\"dob\">DOB</label>\n            <input type=\"date\" class=\"form-control\" name=\"dob\" placeholder=\"DOB\">\n          </div>\n              <button type=\"submit\" class=\"btn btn-default\">Submit</button>\n        </form>\n    </div>\n      \n  </body>","undoManager":{"mark":-1,"position":0,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":83,"column":9},"action":"insert","lines":["<?php","session_start();","","include 'User.php';","","","$objUser = new User();","$objUser->findUserByEmail(\"meme\");","","","?>","<html>","  <head>","\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />","\t<meta name=\"robots\" content=\"noindex,nofollow\" />","    <title>Login Form</title>","    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\">","    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>","    <script src=\"http://code.jquery.com/jquery-2.1.0.min.js\"></script>","</head>","","<body>","    ","    <div style=\"width:300px; margin:0 auto;\">","      ","    ","      <?php","      ","        if( !empty($_SESSION['formError']) ){","          ?>","          <div class=\"error\" style=\"color:red\">","          <?php","          ","            foreach( $_SESSION['formError'] as $strMessage ){","              ?>","              <p>","                <?php","                echo $strMessage;","                ?>","              </p>","              <?php","            }","          ?>","          </div>","          <?php","          unset( $_SESSION['formError'] );","        }","      ?>","    ","          ","      <form role=\"form\" method=\"POST\" action=\"form.php\">","          <div class=\"form-group\">","            <label for=\"login\">Login*</label>","            <input type=\"text\" class=\"form-control\" name=\"login\" required placeholder=\"Login\">","          </div>","          <div class=\"form-group\">","            <label for=\"password\">Password*</label>","            <input type=\"password\" data-minlength=\"6\" class=\"form-control\" name=\"password\" required  placeholder=\"Password\">","          </div>","          <div class=\"form-group\">","            <label for=\"first_name\">Name*</label>","            <input type=\"text\" class=\"form-control\" name=\"first_name\" required placeholder=\"Name\">","          </div>","          <div class=\"form-group\">","            <label for=\"lastname\">Last Name*</label>","            <input type=\"text\" class=\"form-control\" name=\"lastname\" required placeholder=\"Last Name\">","          </div>","          <div class=\"form-group\">","            <label for=\"email\">Email</label>","            <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">","          </div>","          <div class=\"form-group\">","            <label for=\"tel\">Phone</label>","            <input type=\"tel\" class=\"form-control\" name=\"tel\" placeholder=\"Phone\">","          </div>","          <div class=\"form-group\">","            <label for=\"dob\">DOB</label>","            <input type=\"date\" class=\"form-control\" name=\"dob\" placeholder=\"DOB\">","          </div>","              <button type=\"submit\" class=\"btn btn-default\">Submit</button>","        </form>","    </div>","      ","  </body>"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":0},"end":{"row":21,"column":6},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1417720993336}