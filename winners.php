<?php
include 'core/init.php';
include 'core/functions/getwinners.php';
$page = 'winners_'.$year; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('./includes/header.php') ?>


</head>

<body>

	<?php include('./includes/header2.php') ?>


	<?php include('./includes/nav.php') ?>

	<main class="main-content">
		<div class="container-fluid photos">

			<div class="row">

				<div class="col-12 col-md-12 col-lg-12" style="padding:15px;">

					<div class="card winnersparentcard">
						<div class="card-title" style="font-size:25px;color:gold;">Grade 1 Winners</div>
						<div class="card-body">
							<div class="row">
								<div class="card-deck">

                                    <?php if ($result_1->num_rows > 0) {

                                        $i = 0;

                                        // output data of each row
                                        while ($row = $result_1->fetch_assoc()) {


                                        ?>



                                            <div class="card winnerbox" style="padding:15px;background: goldenrod;color: darkblue;">
                                                <img src="<?php echo $row['art_file_name'] ?>" class="card-img-top winnerart" />
                                                <div class="winnerimage"><img src="images/<?php echo ($i = $i + 1).'_place.png' ?>" /></div>


                                                <div class="card-body"></div>


                                                <div class="card-footer winnerinfo">
                                                    <h4 class="meta"><?php echo $row['name'] ?></h4>
                                                </div>
                                            </div>
                                            <?php

                                        }
                                    } ?>

								</div>
							</div>


						</div>
					</div>
				</div>

			</div>
			<div class="row">

				<div class="col-12 col-md-12 col-lg-12" style="padding:15px;">

					<div class="card winnersparentcard">
						<div class="card-title" style="font-size:25px;color:gold;">Grade 2 Winners</div>
						<div class="card-body">
							<div class="row">
								<div class="card-deck">


                                    <?php if ($result_2->num_rows > 0) {


                                        $i = 0;


                                        // output data of each row
                                        while ($row = $result_2->fetch_assoc()) { ?>


                                            <div class="card winnerbox" style="padding:15px;background: goldenrod;color: darkblue;">
                                                <img src="<?php echo $row['art_file_name'] ?>" class="card-img-top winnerart" />
                                                <div class="winnerimage"><img src="images/1_place.png" /></div>


                                                <div class="card-body"></div>


                                                <div class="card-footer winnerinfo">
                                                    <h4 class="meta"><?php echo $row['name'] ?></h4>
                                                </div>
                                            </div>
                                            <?php $i++;

                                            if (sizeof($sizes) == $i) {
                                                $i = 0;
                                            }
                                        }
                                    } ?>
									
								</div>
							</div>


						</div>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-12 col-md-12 col-lg-12" style="padding:15px;">

					<div class="card winnersparentcard">
						<div class="card-title" style="font-size:25px;color:gold;">Grade 3 Winners</div>
						<div class="card-body">
							<div class="row">
								<div class="card-deck">


                                    <?php if ($result_3->num_rows > 0) {


                                        $i = 0;


                                        // output data of each row
                                        while ($row = $result_3->fetch_assoc()) { ?>


                                            <div class="card winnerbox" style="padding:15px;background: goldenrod;color: darkblue;">
                                                <img src="<?php echo $row['art_file_name'] ?>" class="card-img-top winnerart" />
                                                <div class="winnerimage"><img src="images/1_place.png" /></div>


                                                <div class="card-body"></div>


                                                <div class="card-footer winnerinfo">
                                                    <h4 class="meta"><?php echo $row['name'] ?></h4>
                                                </div>
                                            </div>
                                            <?php $i++;

                                            if (sizeof($sizes) == $i) {
                                                $i = 0;
                                            }
                                        }
                                    } ?>
									
								</div>
							</div>


						</div>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-12 col-md-12 col-lg-12" style="padding:15px;">

					<div class="card winnersparentcard">
						<div class="card-title" style="font-size:25px;color:gold;">Grade 4 Winners</div>
						<div class="card-body">
							<div class="row">
								<div class="card-deck">


                                    <?php if ($result_4->num_rows > 0) {


                                        $i = 0;


                                        // output data of each row
                                        while ($row = $result_4->fetch_assoc()) { ?>


                                            <div class="card winnerbox" style="padding:15px;background: goldenrod;color: darkblue;">
                                                <img src="<?php echo $row['art_file_name'] ?>" class="card-img-top winnerart" />
                                                <div class="winnerimage"><img src="images/1_place.png" /></div>


                                                <div class="card-body"></div>


                                                <div class="card-footer winnerinfo">
                                                    <h4 class="meta"><?php echo $row['name'] ?></h4>
                                                </div>
                                            </div>
                                            <?php $i++;

                                            if (sizeof($sizes) == $i) {
                                                $i = 0;
                                            }
                                        }
                                    } ?>
									
								</div>
							</div>


						</div>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-12 col-md-12 col-lg-12" style="padding:15px;">

					<div class="card winnersparentcard">
						<div class="card-title" style="font-size:25px;color:gold;">Grade 5 Winners</div>
						<div class="card-body">
							<div class="row">
								<div class="card-deck">


                                    <?php if ($result_5->num_rows > 0) {


                                        $i = 0;


                                        // output data of each row
                                        while ($row = $result_5->fetch_assoc()) { ?>


                                            <div class="card winnerbox" style="padding:15px;background: goldenrod;color: darkblue;">
                                                <img src="<?php echo $row['art_file_name'] ?>" class="card-img-top winnerart" />
                                                <div class="winnerimage"><img src="images/1_place.png" /></div>


                                                <div class="card-body"></div>


                                                <div class="card-footer winnerinfo">
                                                    <h4 class="meta"><?php echo $row['name'] ?></h4>
                                                </div>
                                            </div>
                                            <?php $i++;

                                            if (sizeof($sizes) == $i) {
                                                $i = 0;
                                            }
                                        }
                                    } ?>
									
								</div>
							</div>


						</div>
					</div>
				</div>

			</div>
			<?php include('./includes/footer.php') ?>

		</div>
		</div>
	</main>

	</div> <!-- .site-wrap -->


</body>

</html>