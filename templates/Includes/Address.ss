<ul class="inline-list">
	<% control SiteConfig %>
	<% if Organisation %><li id="Organisation">$Organisation</li><% end_if %> 
	<% if Address %><li id="Address">$Address</li><% end_if %>
	<% if City %><li id="City">$City</li><% end_if %>
	<% if Phone %><li id="Phone">$Phone</li><% end_if %>
	<% if Fax %><li id="Fax">$Fax</li><% end_if %>
	<% if Email %><li id="Email"><a href="mailto:$Email">$Email</a></li><% end_if %>
	<% end_control %>
</ul>
