<div class="aside">

<div class="panel panel-custom" id="panel-cateories">
	<div class="panel-heading">
		<h3 class="panel-title">Categorias</h3>
	</div>
	<div class="panel-body">
		<ul class="nav nav-pills custom-nav-pills">
		@foreach($categories as $category)
		  <li role="presentation">
		  	<a href="{{ route('front.search.category', $category->name) }}">{{ $category->name }}</a>
		  		<!--<span class="badge pull-right">3</span>-->
		  </li>
		@endforeach()
		</ul>
	</div><!--/.panel-body-->
</div><!--/#panel-cateories-->

<div class="panel panel-custom"  id="panel-tags">
	<div class="panel-heading">
		<h3 class="panel-title">Etiquetas</h3>
	</div>
	<div class="panel-body">
		
		<div class="panel panel-primary">
		  <div class="panel-body">
		  	@foreach($tags as $tag)
		  		<a href="{{ route('front.search.tag', $tag->name) }}">
					<span class="label label-default">{{ $tag->name }}</span>&nbsp;
				</a>
			@endforeach()	
		  </div>
		</div>

	</div><!--/.panel-body-->
</div><!--/#panel-tags-->

</div><!--aside-->