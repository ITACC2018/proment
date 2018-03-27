<section class="page">
    <section id="main">
		<section class="sidebar-container" id="dashboard">
			<div class="sidebar">
				<ul>
					<li class="active">
						<a href="/?controller=DashboardController&amp;action=show&amp;user_id=1" class="" title='' >Main Page</a>
					</li>
					<li >
						<a href="/?controller=DashboardController&amp;action=projects&amp;user_id=1" class="" title='' >My Content</a>
					</li>
				</ul>
			</div>
		
			<div class="sidebar-content">
				<div class="filter-box margin-bottom">
					<form method="get" action="/" class="search">
						<input type="hidden" name="controller" id="form-controller" value="SearchController"/>
						<input type="hidden" name="action" id="form-action" value="index"/>
						<div class="input-addon">
							<input type="text" name="search" id="form-search"  class="input-addon-field" placeholder="Search">
							<div class="input-addon-item">
								<div class="dropdown">
									<a href="#" class="dropdown-menu dropdown-menu-link-icon" title="Default filters"><i class="fa fa-filter fa-fw"></i><i class="fa fa-caret-down"></i></a>
									<ul>
										<li><a href="#" class="filter-helper filter-reset" data-filter="" title="Keyboard shortcut: &quot;r&quot;">Reset filters</a></li>
										<li><a href="#" class="filter-helper" data-filter="status:open assignee:me">My tasks</a></li>
										<li><a href="#" class="filter-helper" data-filter="status:open assignee:me due:tomorrow">My tasks due tomorrow</a></li>
										<li><a href="#" class="filter-helper" data-filter="status:open due:today">Tasks due today</a></li>
										<li><a href="#" class="filter-helper" data-filter="status:open due:tomorrow">Tasks due tomorrow</a></li>
										<li><a href="#" class="filter-helper" data-filter="status:open due:yesterday">Tasks due yesterday</a></li>
										<li><a href="#" class="filter-helper" data-filter="status:closed">Closed tasks</a></li>
										<li><a href="#" class="filter-helper" data-filter="status:open">Open tasks</a></li>
										<li><a href="#" class="filter-helper" data-filter="status:open assignee:nobody">Not assigned</a></li>
										<li><a href="#" class="filter-helper" data-filter="status:open category:none">No category</a></li>
										<li>
										<a href="/?controller=DocumentationController&amp;action=show&amp;file=search" class="" title='' target="_blank">View advanced search syntax</a>        </li>
									</ul>
								</div>
							</div>
						</div>
					</form>
				</div>
				
				<div class="table-list">
				   <div class="table-list-row table-border-left">
						<div>
							Welcome to AccPedia,
						</div>
					
				   </div>
				</div>
			</div>
			
			
		<section>
	<section>
<section>
