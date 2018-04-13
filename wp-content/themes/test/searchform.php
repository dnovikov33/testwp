<form
	id="searchform"
	class="form-inline"
	method="get"
	action="<?php echo home_url( '/' ) ?>"
	role="search">
	
	<input
		class="form-control border-0"
		type="search"
		value="<?php echo get_search_query() ?>"
		name="s"
		id="s"
		placeholder="Поиск">

</form>