<?php
require "header.php";

$p = $_POST["keuze"];
if($p == 1)
{
    $plaats = $_POST["plaats"];
    if(isset($_POST['leeftijd']) && $_POST['leeftijd'] > 0 )
    {
        $leeftijd = $_POST["leeftijd"];

        $sql = "select  *  FROM gegevens WHERE (plaats  = '" . $plaats . "' AND  besmet='1' AND Leeftijd='" . $leeftijd . "')  ";
        $result_sql = mysqli_query($conn, $sql);
        $conn->query($sql);

        $aantal = 0;

        while ($subject1 = mysqli_fetch_assoc($result_sql)) {
            $aantal++;
        }
        $conn->close();
        ?>


        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird">


                <?php if($aantal == 1){ ?>
                     <h4 class="w3-padding-32">er zijn <?php echo $aantal ?> aantal besmettingen in de
                        plaats <?php echo $plaats ?>
                        waarbij de leeftijd <?php echo $leeftijd ; ?> is.</h4> 
                        <?php } ?>

                <?php if($aantal >= 2){ ?> 
                        <h4 class="w3-padding-32">er zijn <?php echo $aantal ?> aantal besmettingen in de
                        plaats <?php echo $plaats ?>
                        waarbij de leeftijd <?php echo $leeftijd ?> is.</h4> <?php } ?>

                </div>

                <div class="w3-third w3-center">
                    <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
                </div>
            </div>
        </div>

       
        <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
            <h1 class="w3-margin w3-xlarge">Blijf binnen</h1>
        </div>

    <?php
    }else
        {
            $sql = "select  *  FROM gegevens WHERE (plaats  = '" . $plaats . "' AND  besmet='1' )  ";
            $result_sql = mysqli_query($conn, $sql);
            $conn->query($sql);

            $aantal = 0;

            while ($subject1 = mysqli_fetch_assoc($result_sql)) {
                $aantal++;
            }
            $conn->close();
            ?>


            <div class="w3-row-padding w3-padding-64 w3-container">
                <div class="w3-content">
                    <div class="w3-twothird">


                    <?php if($aantal == 1){ ?> 
                        <h4 class="w3-padding-32">er is <?php echo $aantal ?> besmetting in de
                        plaats <?php echo $plaats; 
                        } ?>

                    <?php if($aantal >= 2){ ?> 
                        <h4 class="w3-padding-32">er zijn <?php echo $aantal ?> aantal besmettingen in de
                        plaats <?php echo $plaats; 
                        }?>



                    </div>

                    <div class="w3-third w3-center">
                        <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
                    </div>
                </div>
            </div>

           

            <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
                <h1 class="w3-margin w3-xlarge">Blijf binnen</h1>
            </div>
            <?php
        }


}



if ($p ==2) {
    $plaats = $_POST["plaats"];

    if (isset($_POST['leeftijd']) && $_POST['leeftijd'] > 0) {
        $leeftijd = $_POST["leeftijd"];

        $sql = "select  *  FROM gegevens WHERE (gemeente  = '" . $plaats . "' AND  besmet='1' AND Leeftijd='" . $leeftijd . "')  ";
        $result_sql = mysqli_query($conn, $sql);
        $conn->query($sql);
        $aantal = 0;
        while ($s = mysqli_fetch_assoc($result_sql)) {
            $aantal++;
        }
        $conn->close();
        ?>

        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird">


                <?php if($aantal == 1){ ?> 
                        <h4 class="w3-padding-32">er is <?php echo $aantal ?> besmetting in de
                        plaats <?php echo $plaats ?>
                        waarbij de leeftijd <?php echo $leeftijd ?> is.</h4> <?php } ?>

                <?php if($aantal >= 2){ ?> 
                        <h4 class="w3-padding-32">er zijn <?php echo $aantal ?> aantal besmettingen in de
                        plaats <?php echo $plaats ?>
                        waarbij de leeftijd <?php echo $leeftijd ?> is.</h4> <?php } ?>


                </div>

                <div class="w3-third w3-center">
                    <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
                </div>
            </div>
        </div>

       

        <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
            <h1 class="w3-margin w3-xlarge">Blijf binnen</h1>
        </div>

        <?php
    } else {
        $sql = "select  *  FROM gegevens WHERE (gemeente  = '" . $plaats . "' AND  besmet='1')  ";
        $result_sql = mysqli_query($conn, $sql);
        $conn->query($sql);
        $aantal = 0;
        while ($s = mysqli_fetch_assoc($result_sql)) {
            $aantal++;
        }
        $conn->close();
        ?>

        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird">


                <?php if($aantal == 1){ ?> 
                        <h4 class="w3-padding-32">er is <?php echo $aantal ?> besmetting in de
                        plaats <?php echo $plaats; 
                        }?>

                <?php if($aantal >= 2){ ?> 
                        <h4 class="w3-padding-32">er zijn <?php echo $aantal ?> aantal besmettingen in de
                        plaats <?php echo $plaats;
                        } ?>


                </div>

                <div class="w3-third w3-center">
                    <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
                </div>
            </div>
        </div>

        

        <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
            <h1 class="w3-margin w3-xlarge">Blijf binnen</h1>
        </div>
        <?php
    }
}
    if ($p == 3) {
        $plaats = $_POST["plaats"];


        if (isset($_POST['leeftijd']) && $_POST['leeftijd'] > 0) {
            $leeftijd = $_POST["leeftijd"];
            $sql = "select  *  FROM gegevens WHERE (provincie  = '" . $plaats . "' AND  besmet='1' AND Leeftijd='" . $leeftijd . "')  ";
            $result_sql = mysqli_query($conn, $sql);
            $conn->query($sql);

            $aantal = 0;

            while ($subject1 = mysqli_fetch_assoc($result_sql)) {
                $aantal++;
            }
            $conn->close();


            ?>

            <div class="w3-row-padding w3-padding-64 w3-container">
                <div class="w3-content">
                    <div class="w3-twothird">


                    <?php if($aantal == 1){ ?> 
                        <h4 class="w3-padding-32">er is <?php echo $aantal ?> besmetting in de
                        plaats <?php echo $plaats ?>
                        waarbij de leeftijd <?php echo $leeftijd ?> is.</h4> <?php } ?>

                <?php if($aantal >= 2){ ?> 
                        <h4 class="w3-padding-32">er zijn <?php echo $aantal ?> aantal besmettingen in de
                        plaats <?php echo $plaats ?>
                        waarbij de leeftijd <?php echo $leeftijd ?> is.</h4> <?php } ?>


                    </div>

                    <div class="w3-third w3-center">
                        <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
                    </div>
                </div>
            </div>

            

            <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
                <h1 class="w3-margin w3-xlarge">Blijf binnen</h1>
            </div>
            <?php
        } else {
            $sql = "select  *  FROM gegevens WHERE (provincie  = '" . $plaats . "' AND  besmet='1')  ";
            $result_sql = mysqli_query($conn, $sql);
            $conn->query($sql);

            $aantal = 0;

            while ($subject1 = mysqli_fetch_assoc($result_sql)) {
                $aantal++;
            }
            $conn->close();


            ?>

            <div class="w3-row-padding w3-padding-64 w3-container">
                <div class="w3-content">
                    <div class="w3-twothird">


                    <?php if($aantal == 1){ ?> 
                        <h4 class="w3-padding-32">er is <?php echo $aantal ?> besmetting in de
                        plaats <?php echo $plaats; 
                        }?>

                <?php if($aantal >= 2){ ?> 
                        <h4 class="w3-padding-32">er zijn <?php echo $aantal ?> aantal besmettingen in de
                        plaats <?php echo $plaats;
                        } ?>


                    </div>

                    <div class="w3-third w3-center">
                        <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
                    </div>
                </div>
            </div>

            

            <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
                <h1 class="w3-margin w3-xlarge">Blijf binnen</h1>
            </div>
            <?php
        }
    }