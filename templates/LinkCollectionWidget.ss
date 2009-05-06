<% if LinkCollection %>
<div class="linkCollection" class="outer">
	<div class="inner">
		<h3>$LinkCollection.Title</h3>
		<% if LinkCollection.Content %>
			$LinkCollection.Content
		<% else %>
			<p>No links available at this time.</p>
		<% end_if %>
	</div>
</div>
<% end_if %>