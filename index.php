<html>
    <head>

    </head>    
    
    <body>

    <h1>
            <?php



            $var1 = "HOLA MUNDO";
            $var2 = 2910;
            $var3 = true;
            $var4 = 3.1416;
            $var5 = "CHAO MUNDO";

            echo $var1;
            ?>
            
            <html>
                <br>
            </html>
            
            <?php
            
                echo $var5;

            ?>

    </h1>        

                <html>

                    <h2>

                        <?php

                            echo $var2;

                        ?>

                    </h2>    

                
    



                </html>

            <?php
            
                $vector = [
                    
                    "1",
                    "2",
                    "3",
                    "4",
                    "5"

                ];

                for($i=0; $i<= count($vector); $i++){
                    echo $vector[$i]."<br>";
                }
            
            ?>

            
</body>
</html>