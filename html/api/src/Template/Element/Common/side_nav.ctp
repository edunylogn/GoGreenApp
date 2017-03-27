<nav class="columns sidebar-container">
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse" id="sidebar-nav">
            <ul class="nav" id="side-menu">
                <li class="sidebar-title">
                    <h4>Administrator - <small><?= isset($pageTitle)? $pageTitle : $this->fetch('title') ?></small></h4>
                </li>
<!--                <li class="sidebar-search">-->
<!--                    <div class="input-group custom-search-form">-->
<!--                        <input type="text" class="form-control" placeholder="Search...">-->
<!--                                <span class="input-group-btn">-->
<!--                                <button class="btn btn-default" type="button">-->
<!--                                    <i class="fa fa-search"></i>-->
<!--                                </button>-->
<!--                            </span>-->
<!--                    </div>-->
<!--                </li>-->
                <li>
                    <a href="."><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bed fa-fw"></i> Hotels<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?= $this->Html->link(__('Search Hotels'), ['controller' => 'Places', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Hotel'), ['controller' => 'Places', 'action' => 'add']) ?>
                        </li>
                        <li>
                            <a href="#">Room Categories <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <?= $this->Html->link(__('Room Categories List'), ['controller' => 'RoomCategories', 'action' => 'index']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Add Room Category'), ['controller' => 'RoomCategories', 'action' => 'add']) ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-wpexplorer fa-fw"></i> Tours<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?= $this->Html->link(__('Search Tours'), ['controller' => 'Tours', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Create Tours'), ['controller' => 'Tours', 'action' => 'add']) ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-ship fa-fw"></i> Transport<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?= $this->Html->link(__('Search Transport'), ['controller' => 'Transports', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Create Transport'), ['controller' => 'Transports', 'action' => 'add']) ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-briefcase fa-fw"></i> Packages<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?= $this->Html->link(__('Search Packages'), ['controller' => 'Packages', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Create Packages'), ['controller' => 'Packages', 'action' => 'add']) ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tags fa-fw"></i> Features and Tags<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Feature'), ['controller' => 'Features', 'action' => 'add']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Tag'), ['controller' => 'Tags', 'action' => 'add']) ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
</nav>