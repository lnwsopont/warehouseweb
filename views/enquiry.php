<html>
    <head>
        <title>title</title>


        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    </head>
    <body>
        <div class="container">

            <form action="/enquiry" method="POST">
                <div class="row">
                    <div class="col s10">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
                                <label for="textarea1">Equiry</label>
                            </div>
                        </div>
                    </div>
                    <div class="col s2">
                        <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-top: 40px;">Send</button>
                        </button>

                    </div>
                </div>
            </form>


            <ul class="collection">
                <? foreach ($messages as $message): ?>
                    <? if ($message['emp_id'] == 0): ?>
                        <li class="collection-item ">
                            <span class="title"><?= $_SESSION['user']['cus_fname'] ?></span> 
                            <span style="color: #aaa; font-size: 10px;"><?= $message['sent_datetime'] ?></span>
                            <p>
                                <?= str_replace("\n", "<br/>", $message['msg']) ?>

                            </p>
                        </li>
                    <? else: ?>
                        <li class="collection-item <?= $message["status"] == 2 ? "indigo lighten-4" : "" ?>" style="text-align: right;">
                            <span style="color: #aaa; font-size: 10px;"><?= $message['sent_datetime'] ?></span>
                            <span class="title">MUIC Warehouse Co.ltd</span> 
                            <p>
                                <?= str_replace("\n", "<br/>", $message['msg']) ?>                                
                            </p>
                        </li>
                    <? endif; ?>
                <? endforeach; ?>
            </ul>
        </div>
    </body>
</html>