		<div class="col-sm-2">
				<div id="vbx-sidebar">
				<?php if(isset($counts)): ?>
					<div class="panel">
                        <div class="panel-heading panel-primary">
                            Messages
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                            <?php foreach($counts as $id => $item):
                                    $inbox = ($id == 0)? 'inbox' : '';
                                    $inbox_id = ($id == 0)? '' : $id;
                                    $class = (isset($group) && $id == $group) ? 'active' : ''; ?>
                                    <li class="<?php echo $class ?>">
                                            <a title="<?php echo $item->name ?>" href="<?php echo site_url('messages/inbox/' .$inbox_id) ?>">
                                            <span><?php echo $item->name ?></span>
                                            <?php if(isset($item->new) && $item->new > 0): ?>
                                                    <span class="count" rel="<?php echo $id ?>"><?php echo $item->new ?></span>
                                            <?php endif; ?>
                                            </a>
                                    </li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
						<?php if(!empty($setup_links)): ?>
                    <div class="panel">
                        <div class="panel-heading panel-primary">
                            Setup
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
						<?php foreach($setup_links as $link => $name):
								$class = (isset($section) && $section == $link)? 'active' :'' ?>
								<li class="<?php echo $class ?>">
										<a title="<?php echo $name ?>" href="<?php echo site_url($link) ?>"><?php echo $name?></a>
								</li>
						<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
						<?php endif; ?>

						<?php if(!empty($log_links)): ?>
                    <div class="panel">
                        <div class="panel-heading panel-primary">
                            Activity
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
						<?php foreach($log_links as $link => $name):
								$class = (isset($section) && $section == $link)? 'active' :'' ?>
								<li class="<?php echo $class ?>">
										<a title="<?php echo $name ?>" href="<?php echo site_url($link) ?>"><?php echo $name?></a>
								</li>
						<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
						<?php endif; ?>

						<?php if(!empty($admin_links)): ?>
                    <div class="panel">
                        <div class="panel-heading panel-primary">
                            Admin
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
						<?php foreach($admin_links as $link => $name):
								$class = (isset($section) && $section == $link)? 'active' :'' ?>
								<li class="<?php echo $class ?>">
										<a title="<?php echo $name ?>" href="<?php echo site_url($link) ?>"><?php echo $name?></a>
								</li>
						<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
						<?php endif; ?>

						<?php if(!empty($plugin_menus)): ?>
						<?php foreach($plugin_menus as $name => $links): ?>
                    <div class="panel">
                        <div class="panel-heading panel-primary">
                            <?php echo $name ?>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
						<?php foreach($links as $link => $name):
								$class = (isset($section) && ltrim($section, '/') == $link)? 'active' :'' ?>
								<?php if(is_array($name)): ?>
									<?php foreach($name as $sub_id => $sub_name): ?>
										<li class="<?php echo $class ?>">
							                <a title="<?php echo $sub_name ?>" href="<?php echo site_url($link) ?>"><?php echo $sub_id + 1 ?>. <?php echo $sub_name?></a>
										</li>
									<?php endforeach;?>
								<?php else: ?>
								<li class="<?php echo $class ?>">
									<a title="<?php echo $name ?>" href="<?php echo site_url($link) ?>"><?php echo $name?></a>
								</li>
								<?php endif; ?>
						<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
						<?php endforeach; ?>
						<?php endif; ?>
					</div><!-- #vbx-main-nav -->
				<?php endif; ?>
				</div><!-- #vbx-sidebar -->
		</div><!-- .yui-b -->
