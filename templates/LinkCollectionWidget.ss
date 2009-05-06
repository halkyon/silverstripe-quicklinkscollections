<% if LinkCollection %>
	<h3>$LinkCollection.Title</h3>
	<% if Pages %>
	<ul class="linkCollection">
		<% control Pages %>
		<li<% if FirstLast %> class="$FirstLast"<% end_if %>><a href="$Link">$MenuTitle</a></li>
		<% end_control %>
	</ul>
	<% else %>
		<p>No links available at this time.</p>
	<% end_if %>
<% end_if %>