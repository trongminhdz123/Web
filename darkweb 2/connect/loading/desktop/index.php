<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hacking Desktop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel='stylesheet' href='https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chat.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<?php
session_start();







if (isset($_SESSION['id'])) {
    echo '
<body>
    <!-- partial:index.partial.html -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



    <div class="desktop">
        <div class="start-menu-fade"></div>
        <div class="start-menu">
            <div class="start-menu__list">
                <div class="media">
                    <a class="user-info menu-toggle" href="#" data-menu="user">
                        <img class="user-info__img media__img" src="https://i.imgur.com/KkCqvK9.png" alt="User image">
                        ';
        include("../../inc/config.php");
        // Get contents of the lspd table
        $reponse = $bdd->query('SELECT * FROM users limit 1'); {
        ?>
<div class="user-info__name media__body">
    <?php echo $_SESSION['username']; ?>
</div>
<?php
}
$reponse->closeCursor(); // Complete query
echo '
                    </a>
                    <div class="menu" data-menu="user">
                        <a href="#">Change account picture</a>
                        <a href="#">Lock</a>
                        <a href="#">Sign out</a>
                    </div>
                    <a class="user-info__power menu-toggle" href="#" data-menu="power">
                        <i class="fa fa-power-off"></i>

                    </a>
                </div>

                <div class="menu" data-menu="power">
                <a href="../../inc/logout.php">Disconnect</a>
                <a href="../../../index.html">Restart</a>
                </div>


                <ul class="start-menu__recent">
                    <li class="start-menu__explorer">
                        <a href="#" data-window="explorer">
                            <i class="fa fa-folder"></i>
                            File Explorer
                        </a>
                    </li>
                    <li class="start-menu__mail">
                        <a href="#" data-window="mail">
                            <i class="fa fa-envelope"></i>
                            Mail
                        </a>
                    </li>
                    <li class="start-menu__notepad">
                        <a href="#" data-window="notepad">
                            <i class="fa fa-pencil"></i>
                            Notepad
                        </a>
                    </li>
                    <li class="start-menu__explorer">
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            File Explorer
                        </a>
                    </li>
                    <li class="start-menu__mail">
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            Mail
                        </a>
                    </li>
                    <li class="start-menu__notepad">
                        <a href="#">
                            <i class="fa fa-pencil"></i>
                            Notepad
                        </a>
                    </li>
                </ul>

                <a class="all-apps" href="#">
                    All apps
                    <i class="fa fa-arrow-right"></i>
                </a>
                <form class="search">
                    <input type="text" class="search__input" placeholder="Ask me anything">
                    <button class="search__btn">
                    </button>
                </form>
            </div>
            <div class="start-screen-scroll">
                <div class="start-screen">
                    <a class="start-screen__tile start-screen__tile--explorer masonry-item" href="#"
                        data-window="explorer">
                        <i class="fa fa-folder"></i>
                        <span>File Explorer</span>
                    </a>
                    <a class="start-screen__tile masonry-item" href="#">
                    </a>
                    <a class="start-screen__tile start-screen__tile--wide masonry-item" href="#" data-ss-colspan="2">
                    </a>
                    <div class="start-screen__smallgroup masonry-item">
                        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
                        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
                        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
                    </div>
                    <a class="start-screen__tile masonry-item" href="#">
                    </a>
                    <a class="start-screen__tile masonry-item" href="#">
                    </a>
                    <a class="start-screen__tile start-screen__tile--notepad masonry-item" href="#">
                    </a>
                    <a class="start-screen__tile start-screen__tile--large start-screen__tile--mail masonry-item"
                        href="#" data-ss-colspan="2">
                        <i class="fa fa-envelope"></i>
                        <span>Mail</span>
                    </a>
                    <a class="start-screen__tile masonry-item" href="#">
                    </a>
                    <a class="start-screen__tile masonry-item" href="#">
                    </a>
                    <a class="start-screen__tile masonry-item" href="#">
                    </a>
                </div>
            </div>
        </div>
        <div class="icon">
            <a class="taskbar__item" href="#" data-window="chat">
                <img src="img/chat.png" style="width: 80px; height: 80px;">
            </a>
        </div>

        <div class="taskbar">
            <a class="taskbar__item taskbar__item--start" href="#" data-window="start">
                <i class="fa fa-windows"></i>
            </a>
            <a class="taskbar__item taskbar__item--explorer" href="#" data-window="explorer">
                <i class="fa fa-folder"></i>
            </a>
            <a class="taskbar__item taskbar__item--mail" href="#" data-window="mail">
                <i class="fa fa-envelope"></i>
            </a>
            <a class="taskbar__item taskbar__item--notepad" href="#" data-window="notepad">
                <i class="fa fa-pencil"></i>
            </a>

            <div class="taskbar__tray">
                <span class="time">
                    <script>

                    </script>
                </span>
            </div>
        </div>


        <div class="window window--explorer window--minimized" data-window="explorer"
            style="width:670px;height:400px;top:5%;left:10%;">
            <div class="window__titlebar">
                <div class="window__controls window__controls--left">
                    <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
                    <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
                </div>



                <span class="window__title">
                    File Explorer
                </span>

                <div class="window__controls window__controls--right">
                    <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
                    <a class="window__maximize" href="#"><i class="fa"></i></a>
                    <a class="window__close" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>

            <ul class="window__menu">
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-search"></i>
                        Search
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-share-alt"></i>
                        Share
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-plug"></i>
                        Devices
                    </a>
                </li>
                <li class="divided">
                    <a href="#">
                        <i class="menu__icon fa fa-cog"></i>
                        Settings
                    </a>
                </li>
            </ul>

            <div class="window__actions">
                <a class="window__back" href="#">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="window__forward" href="#">
                    <i class="fa fa-arrow-right"></i>
                </a>
                <div class="window__path">
                    <a href="#">
                        <i class="fa fa-desktop"></i>
                        Desktop
                    </a>
                </div>
                <form class="search">
                    <input type="text" class="search__input" placeholder="Search files and folders">
                    <button class="search__btn">
                    </button>
                </form>
            </div>

            <div class="window__body">

                <div class="window__side">

                    <ul class="side__list">
                        <li><a href="#">Home</a></li>
                        <li>
                            <a href="#">Favorites</a>
                            <ul>
                                <li><a href="#">Desktop</a></li>
                                <li><a href="#">Downloads</a></li>
                                <li><a href="#">Recent Places</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">This Device</a>
                            <ul style="display:none">
                                <li><a href="#">Desktop</a>
                                    <ul style="display:none">
                                        <li>
                                            <a href="#">Folder 1</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Documents</a></li>
                                <li><a href="#">Downloads</a></li>
                                <li><a href="#">Local Disk (C:)</a></li>
                            </ul>
                </div>
                <div class="window__main">
                    <div class="folders">
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Folder 1</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Folder 2</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Folder 3</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Folder 4</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Folder 5</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Folder 6</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>File</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="window window--mail" data-window="mail"
            style="display:none;width:400px;height:300px;top:40%;left:40%;">
            <div class="window__titlebar">
                <div class="window__controls window__controls--left">
                    <a class="window__icon" href="#"><i class="fa fa-envelope"></i></a>
                    <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
                </div>



                <span class="window__title">
                    Mail
                </span>

                <div class="window__controls window__controls--right">
                    <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
                    <a class="window__maximize" href="#"><i class="fa"></i></a>
                    <a class="window__close" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>

            <ul class="window__menu">
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-search"></i>
                        Search
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-share-alt"></i>
                        Share
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-plug"></i>
                        Devices
                    </a>
                </li>
                <li class="divided">
                    <a href="#">
                        <i class="menu__icon fa fa-cog"></i>
                        Settings
                    </a>
                </li>
            </ul>

            <div class="window__body">
                <div class="window__side">

                </div>
                <div class="window__main">
                </div>
            </div>

        </div>


        <div class="window window--notepad" data-window="notepad"
            style="display:none;width:600px;height:300px;top:10%;left:30%;">
            <div class="window__titlebar">
                <div class="window__controls window__controls--left">
                    <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
                    <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
                </div>



                <span class="window__title">
                    Notepad
                </span>

                <div class="window__controls window__controls--right">
                    <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
                    <a class="window__maximize" href="#"><i class="fa"></i></a>
                    <a class="window__close" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>

            <ul class="window__menu">
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-download"></i>
                        Save
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-folder-open"></i>
                        Open
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-print"></i>
                        Print
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-share-alt"></i>
                        Share
                    </a>
                </li>

                <li class="divided">
                    <a href="#">
                        <i class="menu__icon fa fa-file"></i>
                        Format
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="menu__icon fa fa-cog"></i>
                        Settings
                    </a>
                </li>
            </ul>

            <div class="window__body">
                <div class="window__main">
                    <textarea class="full-textarea"></textarea>
                </div>
            </div>

        </div>

        <div class="window window--chat" data-window="chat" style="display:none;width:100%;height:100%;">
            <div class="window__titlebar">



                <span class="window__title">
                    Chat
                </span>

                <div class="window__controls window__controls--right">
                    <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
                    <a class="window__maximize" href="#"><i class="fa"></i></a>
                    <a class="window__close" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>

            <div class="window__body">
                <div class="window__chat">

                <ul class="messages">
                ';
include("../../inc/config.php");
// Get contents of the lspd table
$reponse = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 6');

// Display each entry one by one
while ($data = $reponse->fetch()) {
?>
<li class="message">
    <h1 class="name"><?php echo $data['username']; ?></h1><img class="user" src="img/avatar.png" />
    <p class="text"><?php echo $data['message']; ?></p>
</li>
<?php
}
$reponse->closeCursor(); // Complete query
echo '
<form action="add_chat_post.php" method="post">
';
include("../../inc/config.php");
// Get contents of the lspd table
$reponse = $bdd->query('SELECT * FROM users LIMIT 1');

// Display each entry one by one
while ($data = $reponse->fetch()) {
?>
<input type="text" name="username" hidden value="<?php echo $_SESSION['username']; ?>">
<?php
}
$reponse->closeCursor(); // Complete query
echo '
<textarea class="textmessage" name="message"  rows="4" placeholder="Your message..." required></textarea>
<input type="submit" class="send" value="Send">
<button class="refresh" onClick="window.location.reload();">Refresh</button>
</form>
</ul>
</div>
</div>

</div>



</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js"></script>
<script src="js/script.js"></script>
<script src="js/scriptchat.js"></script>

</body>';

} else {
header("Location: ../../index.php");
}
?>

</html>