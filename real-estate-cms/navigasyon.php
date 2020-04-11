<div class="header-container container custom-position-initial">
	<div class="header-row">
		<div class="header-column">
			<div class="header-logo">
				<a href="index.php">									
					<?php 
					if (strlen($ayar_logo)>0) { ?>
					<img alt="<?php echo $ayar_author; ?>" style="width:143px; height: 40px;" src="dosyalar/resimler/logo/<?php echo $ayar_logo; ?>" alt="">
					<?php } else { ?>
					<img alt="<?php echo $ayar_author; ?>" style="width:143px; height: 40px;" src="dosyalar/resimler/logo/logoyok.png" alt="">
					<?php } ?>
				</a>
			</div>
		</div>
		<div class="header-column">
			<div class="header-row">
				<div class="header-nav">
					<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
						<i class="fa fa-bars"></i>
					</button>
					<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse m-none">
						<nav>
							<ul class="nav nav-pills" id="mainNav">
								<?php 
								$menusor=$db->prepare("SELECT * FROM menu where menu_ust=:menu_ust  order by  menu_sira ASC");
								$menusor->execute(array("menu_ust" => 0));

								while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){
									$menu_id=$menucek['menu_id'];
									$altmenusor=$db->prepare("SELECT * FROM menu where menu_ust=:menu_id order by menu_sira");
									$altmenusor->execute(array(
										'menu_id' => $menu_id
										));
									$say=$altmenusor->rowCount();
									?>
									<li <?php 
									if ($say>0) {
										echo "class='dropdown'";
									}
									?>>
									<a style="color:white;" href=
									"
									<?php 

									if (strlen($menucek['menu_link'])>0)
									{
										echo $menucek['menu_link'];
									}
									elseif (strlen($menucek['menu_link'])==0)
										{ ?>

									sayfa-<?=seo($menucek['menu_ad']).'-'.($menucek['menu_id']);  ?>

									<?php } ?>

									"><?php echo $menucek['menu_ad']; ?></a>

									<ul class="dropdown-menu">
										<?php 

										while($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC))
											{ ?>

										<li>
											<a href=
											"
											<?php 

											if (strlen($altmenucek['menu_link'])>0)
											{
												echo $altmenucek['menu_link'];
											}
											elseif (strlen($altmenucek['menu_link'])==0)
												{ ?>

											sayfa-<?=seo($altmenucek['menu_ad']).'-'.($altmenucek['menu_id']);  ?>

											<?php } ?>

											"><?php echo $altmenucek['menu_ad']; ?></a>
										</li>

										<?php } ?>

									</ul>

								</li>
								<?php } ?>		

								<li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega" id="headerSearchProperties">
									<a class="dropdown-toggle" href="#">
										Araştır <i class="fa fa-search"></i>
									</a>
									<ul class="dropdown-menu custom-fullwidth-dropdown-menu">
										<li>
											<div class="dropdown-mega-content">
												<form id="propertiesFormHeader" action="emlak-ara.php" method="POST">
													<div class="container p-none">
														<div class="row">
															<div class="col-md-2">
																<div class="form-control-custom">
																	<select class="form-control text-uppercase font-size-sm" name="emlak_durum" data-msg-required="Bu alan zorunludur." id="propertiesPropertyType" >
																		<option value="">Emlak Türü</option>
																		<option value="SATILIK">SATILIK</option>
																		<option value="KİRALIK">KİRALIK</option>
																	</select>
																</div>
															</div>
															<div class="col-md-2">
																<div class="form-control-custom">
																	<select class="form-control text-uppercase font-size-sm" name="enaz_fiyat" data-msg-required="Bu alan zorunludur." id="propertiesMinPrice" required="">
																		<option value="">EN AZ</option>
																		<option value="1000">1.000 ₺</option>
																		<option value="5000">5.000 ₺</option>
																		<option value="10000">10.000 ₺</option>	
																		<option value="100000">100.000 ₺</option>					
																	</select>
																</div>
															</div>
															<div class="col-md-2">
																<div class="form-control-custom">
																	<select class="form-control text-uppercase font-size-sm" name="encok_fiyat" data-msg-required="Bu alan zorunludur." id="propertiesMaxPrice" required="">
																		<option value="">EN ÇOK</option>
																		<option value="5000">5.000 ₺</option>
																		<option value="25000">25.000 ₺</option>
																		<option value="50000">50.000 ₺</option>
																		<option value="500000">500.000 ₺</option>
																	</select>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-control-custom">
																	<input type="text" name="aranan" placeholder="Anahtar Kelime" class="form-control">
																</div>
															</div>
															<div class="col-md-2">
																<input type="submit" value="ARA" name="emlak-ara" class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
															</div>
														</div>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
