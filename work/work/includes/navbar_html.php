
<header>
        <nav>
            <div id="logo">
                <a href="./feed.html">
                    <img src="/images/worklogo.png" alt="logo">
                </a>
            </div>
            <ul class="nav-links">
                <li>
                <?php 
                        if(isset($_SESSION['UN'])){
                            echo '<a href="/feed">Feed<a>';

                        }
                        ?>
                </li>
                <li>
                <?php 
                        if(isset($_SESSION['UN'])){
                            echo '<a href="/diensten">Diensten<a>';

                        }
                        ?>
                </li>
                <li>
                <?php 
                        if(isset($_SESSION['UN'])){
                            echo '<a href="/projecten">Projecten<a>';

                        }
                        ?>
                </li>
                <li>
                        <?php 
                        if(isset($_SESSION['UN'])){
                            echo '<a href="/profiel">'  . $_SESSION['UN'] . '<a>';

                        }else{
                            echo '<a href="/">inloggen</a>';
                        }
                        ?>
                
                </li>
                <li>
                    <?php if(isset($_SESSION['ID'])){
                        echo '<a href="/uitloggen/uitloggen.php">Uitloggen</a>';
                    }?>
                </li>
            </ul>
            <div class="burger">
                <a href="#">
                    <div class="line1"></div>
                </a>
                <a href="#">
                    <div class="line2"></div>
                </a>
                <a href="#">
                    <div class="line3"></div>
                </a>
            </div>
        </nav>
    </header>
