<!--<!DOCTYPE html>-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="media/icons/l_logo_azul_ico.ico" type="image/x-icon">
    <title>Loudio</title>
    <link rel="stylesheet" href="style/rules.css">
</head>


<body>
    <ul>
        <?php         
        $servername = "localhost";
        $username = "root"; 
        $database = "songs";
        
        $conn = new mysqli($servername, $username, '', $database);

        //conexión
        if ($conn->connect_error) {
            die("Database connection error: " . $conn->connect_error);
        }

        // Close the database connecction
        //$conn->close();
        ?>
    </ul>
    <div class="left_column">

        <div class="image_logo">
            <img class="logo" src="media/icons/logo.png" alt="image">
        </div>

        <div class="menu">
            <ul>
                <li>
                    <div class="search-bar" id="btn_account">
                        <a href="#"><img src="media/icons/white_user.png" width="35" height="35"
                                alt="image">Account</a>
                    </div>
                </li>

                <li>
                    <div class="search-bar" id="btn_driving">
                        <a href="#"><img src="media/icons/white_car.png" width="35" height="35" alt="image">Driving Mode</a>
                    </div>
                </li>

                <li>
                    <div class="search-bar" id="btn_catalog">
                        <a href="#"><img src="media/icons/catalog.png" width="35" height="35" alt="image">Catalog</a>
                    </div>
                </li>

                <li>
                    <div class="search-bar" id="btn_library">
                        <a href="#"><img src="media/icons/library.png" width="35" height="35"
                                alt="image">Library</a>
                    </div>
                </li>
                <li>
                    <div class="search-bar" id="btn_logout">
                        <a href="#"><img src="media/icons/logout.png" width="35" height="35" alt="image">Logout</a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <div class="left_column_responsive">
        <img class="logo_without_login" src="media/icons/logo.png" alt="image">
        <img class="menu_responsive" id="menu_responsive" src="media/icons/menu.png" alt="image">
        <div class="content_menu_responsive" id="content_menu_responsive">
            <ul>
                <li>
                    <div class="search_bar" id="btn_account_r">
                        <a href="#"><img src="media/icons/white_user.png" width="35" height="35" alt="image"></a>
                    </div>
                </li>

                <li>
                    <div class="search_bar" id="btn_driving_r">
                        <a href="#"><img src="media/icons/white_car.png" width="35" height="35" alt="image"></a>
                    </div>
                </li>

                <li>
                    <div class="search_bar" id="btn_catalog_r">
                        <a href="#"><img src="media/icons/catalog.png" width="35" height="35" alt="image"></a>
                    </div>
                </li>

                <li>
                    <div class="search_bar" id="btn_library_r">
                        <a href="#"><img src="media/icons/library.png" width="35" height="35" alt="image"></a>
                    </div>
                </li>
                <li>
                    <div class="search_bar" id="btn_logout_r">
                        <a href="#"><img src="media/icons/logout.png" width="35" height="35" alt="image"></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="right_column">

        <div class="library" id="library">

            <div class="main_box">

                <div class="news">
                    <div class="foto_news">
                        <img src="media/images/predet.png" height="300" alt="image">
                    </div>
                    <div class="tit_news">
                        <h1>News</h1>
                    </div>
                    <div class="option_news">
                        <ul>
                            <li>
                                <?php
                                $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 0";
                                $result = $conn->query($sql);
                        
                                if ($result->num_rows > 0) {
                                    // Get the first result
                                    $row = $result->fetch_assoc();
                                    echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                                } else {
                                    echo "No songs were found.";
                                }
                                ?>
                            </li>
                            <li>
                                <?php
                    
                                $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 1";
                                $result = $conn->query($sql);
                        
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                                } else {
                                    echo "No songs were found..";
                                }
                                ?>
                            </li>
                            <li>
                                <?php
                                $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 2";
                                $result = $conn->query($sql);
                        
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                                } else {
                                    echo "No songs were found..";
                                }
                                ?>
                            </li>
                            <li>
                                <?php
                                $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 3";
                                $result = $conn->query($sql);
                        
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                                } else {
                                    echo "No songs were found..";
                                }
                                ?>
                            </li>
                            <li>
                                <?php
                                $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 15";
                                $result = $conn->query($sql);
                        
                                if ($result->num_rows > 0) {
            
                                    $row = $result->fetch_assoc();
                                    echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                                } else {
                                    echo "No songs were found..";
                                }
                                ?>
                            </li>
                            <li>
                                <?php
                                $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 16";
                                $result = $conn->query($sql);
                        
                                if ($result->num_rows > 0) {
                                    // Get the first result
                                    $row = $result->fetch_assoc();
                                    echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                                } else {
                                    echo "No songs were found.";
                                }
                                ?>
                            </li>
                            <li>
                                <?php
                                $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 13";
                                $result = $conn->query($sql);
                        
                                if ($result->num_rows > 0) {
                                    // Get the first result
                                    $row = $result->fetch_assoc();
                                    echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                                } else {
                                    echo "No songs were found.";
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="recomendations">
                    <div class="tit_recomendations">
                        <h1>Recomendations</h1>
                    </div>

                    <div class="images_recomendations">
                        <?php
                        $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 14"; 
                        $result = $conn->query($sql);
                
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo "<div class='ft_tit'>";
                            echo "<img src='media/songs/QxBZRP.jpg' alt='image' width='150' height='150'>";
                            echo "<p class='song_name'>" . $row["name_song"] . "</p>";
                            echo "</div>";
                        } else {
                            echo "No recommended songs were found.";
                        }
                        ?>
                        <?php
                        $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 15"; 
                        $result = $conn->query($sql);
                    
                        if ($result->num_rows > 0) {
                            // Get the first result
                            $row = $result->fetch_assoc();
                            echo "<div class='ft_tit'>";
                            echo "<img src='media/songs/Bachata.jpg' alt='image' width='150' height='150'>";
                            echo "<p class='song_name'>" . $row["name_song"] . "</p>";
                            echo "</div>";
                        } else {
                            echo "No recommended songs were found.";
                        }
                        ?>
                        <?php
                        $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 4";
                        $result = $conn->query($sql);
                    
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo "<div class='ft_tit'>";
                            echo "<img src='media/songs/Micro.jpg' alt='image' width='150' height='150'>";
                            echo "<p class='song_name'>" . $row["name_song"] . "</p>";
                            echo "</div>";
                        } else {
                            echo "No recommended songs were found.";
                        }
                        ?>
                        <div class="ft_tit">
                            <img src="media/songs/plegarias.png" alt="image" width="150" height="150"
                                >
                            <p>Plegarias</p>
                        </div>
                        <div class="ft_tit">
                            <img src="media/songs/Titi.jpg" alt="image" width="150" height="150"
                                >
                            <p>Titi me preguntó</p>
                        </div>
                    </div>

                </div>

                <div class="tendencies">
                    <div class="pic_tendencies">
                        <img id="min_tendencies" src="media/images/predet.png" width="300" height="300"
                            alt="image">
                    </div>
                    <div class="tit_tendencies">
                        <h1>Tendencies</h1>
                    </div>
                    <div class="options_tendencies">
                        <ul>
                            <li>
                            <?php
                            $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 0";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // Obtener el primer resultado
                                $row = $result->fetch_assoc();
                                echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                            } else {
                                echo "No songs were found.";
                            }
                            ?>
                            </li>
                            <li>
                            <?php
                            $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 1";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // Obtener el primer resultado
                                $row = $result->fetch_assoc();
                                echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                            } else {
                                echo "No songs were found.";
                            }
                            ?>    
                            </li>
                            <li>
                            <?php
                            $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 2";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // Obtener el primer resultado
                                $row = $result->fetch_assoc();
                                echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                            } else {
                                echo "No songs were found.";
                            }
                            ?>
                            </li>
                            <li>
                            <?php
                            $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 3";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // Obtener el primer resultado
                                $row = $result->fetch_assoc();
                                echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                            } else {
                                echo "No songs were found.";
                            }
                            ?>
                            </li>
                            <li>
                            <?php
                            $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 15";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // Obtener el primer resultado
                                $row = $result->fetch_assoc();
                                echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                            } else {
                                echo "No songs were found.";
                            }
                            ?>
                            </li>
                            <li>
                            <?php
                            $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 16";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // Obtener el primer resultado
                                $row = $result->fetch_assoc();
                                echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                            } else {
                                echo "No songs were found.";
                            }
                            ?>
                            </li>
                            <li>
                            <?php
                            $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 13";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // Obtener el primer resultado
                                $row = $result->fetch_assoc();
                                echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                            } else {
                                echo "No songs were found.";
                            }
                            ?>
                            </li>
                            <li>
                            <?php
                            $sql = "SELECT name_song FROM songs LIMIT 1 OFFSET 3";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // Obtener el primer resultado
                                $row = $result->fetch_assoc();
                                echo "<div class='song_name'><p>" . $row["name_song"] . "</p></div>";
                            } else {
                                echo "No songs were found.s";
                            }
                            ?>
                            </li>
                        </ul>
                    </div>
                </div>

                
                <div class="last">
                    <div class="tit_last">
                        <h1>Playlist</h1>
                    </div>

                    <div class="imagenes_last" id="imagenes_last">

                    </div>
                </div>
            </div>
        </div>

        <div class="account" id="account">
            <form name="usermodification" class="usermodification">
                <div class="image_account">
                    <img src="media/iconos/usuario_negro.png" alt="image">
                </div>
                <label for="username" class="label_input">Username:</label><br>
                <input class="field" type="text" placeholder="  Enter username" name="username" id="username"
                    required><br>
                <label for="psw" class="label_input">Password:</label><br>
                <input class="field" type="password" placeholder="  Enter password" name="psw" id="psw" required><br>

                <label for="ns" class="label_input">Name and Surname:</label><br>
                <input class="field" type="text" id="ns" placeholder="  Enter Name and Surname" name="ns" required><br>
                <label for="email" class="label_input">Email:</label><br>
                <input class="field" type="email" placeholder="  Email" id="email" value=required><br>
                <label for="birthdate" class="label_input">Birthdate:</label><br>
                <input class="field" type="date" placeholder="  Birthdate" id="birthdate" required><br>

                <button type="button" class="btn" id="modify" onclick="modifyuser()">Update Data</button>
        </div>

    <div class="logout">
        <div class="overlay"></div>
        <div class="modal">
            <h2 class="title-modal">¿Are you sure you want to log out?</h2>
            <button class="btn-cierre" id="accept">Accept</button>
            <button class="btn-cierre" id="cancel">Cancel</button>
        </div>
    </div>

    </div>

    <div class="search_bar">
        <!--En la cabecera de la página sale la barra de búsqueda-->
        <!-- <input type="text" name="barra_busqueda" class="busqueda" id="busqueda"> -->
    
        <div id="find">
            <form>
                <label for="searcher" class="label_searcher">Searcher</label>
                <input type="text" class="finder" id="searcher" name="name"
                    placeholder="Introduce a song" autocomplete="off" />
            </form>
        </div>
        <div class="div_result" id="result"></div>
    
    </div>
        
    <div class="reproductor" id="reproductor_principal">
        
        <img class="images_footer" id="foto_footer" src="media/images/predet.png" alt="image">
        <audio class="but-audio" id="reproductor_audio" src="" controls="controls"></audio>
    </div>

    <div class="driving_mode" id="driving_mode">
        <img class="logo_driving" src="media/icons/logo.png" alt="image"></img>
        <button class="drive_output_button" id="drive_output_button"><img src="media/icons/logout.png"
                alt="image"></button>

        <div class="image_driving">
            <img class="photo_driving" id="photo_driving" src="media/images/predet.png" alt="image">
        </div>

        <div class="tit_driving" id="tit_driving"></div>

        <div class="reproductor" id="reproductor_drive">
            <audio id="player" ontimeupdate="updateProgress();">
                <source id="source">
                Audio not supported
            </audio>

            <div id="controls">

                <i class="rewind_driving" id="rewind" onclick="prevMusic();"><img class="rewind_driving"
                        src="media/icons/rewind.png" alt="image"></i>
                <i class="play_driving" id="play_pause" onclick="togglePlay();"><img class="play_driving"
                        id="play_driving" src="media/icons/pause.png" alt="image"></i>
                <i class="forward_driving" id="forward" onclick="nextMusic();"><img class="forward_driving"
                        src="media/icons/forward.png" alt="image"></i>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="main.js"></script>
</body>

</html>